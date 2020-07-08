<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\City;
use App\Immobile;
use App\Detail;
use App\Stato;
use App\Feature;
use App\Image;
use Illuminate\Support\Facades\Redirect;
use App\Category;
use App\Evidenza;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image as Img;

class ImmobiliController extends Controller
{
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAffittasi()
    {
        $matches = Immobile::where('stato_id', '=', '2')->orderBy('id', 'DESC')->get();
        $cat = DB::table('categories')->get();
        $stato = array('Fittasi');
        $cities = DB::select("CALL getAvailCities()");
        return view('front.fittasi', compact('matches', 'stato', 'cities','cat'));
    }

    public function indexVendesi()
    {
        $matches = Immobile::where('stato_id', '=', '1')->orderBy('id', 'DESC')->get();
        $cat = DB::table('categories')->get();
        $stato = array('Vendesi');
        $cities = DB::select("CALL getAvailCities()");
        return view('front.fittasi', compact('matches', 'stato', 'cities','cat'));
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $status = DB::table('statos')->get(); //RECUPERO GLI STATI IN DB
      $categories = DB::table('categories')->get(); //recupero categorie

      return view('back.inserisci-immobile',  compact('status', 'categories')); //PASSO GLI INDICI ALLA VIEW
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'stato_id' => 'required',
            'category_id' => 'required|int',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'titolo' => 'required|string|max:255',
            'mq' => 'required|integer|min:1',
            'vani' => 'required|integer|min:0',
            'wc' => 'required|integer|min:0',
            'box' => 'required|integer|min:0',
            'ape' => 'required|string|max:255',
            ];

        $customMessages = [
            'required' => 'Il campo :attribute non può essere vuoto.',
            'integer' => 'Il campo :attribute non può essere vuoto.',

        ];
        $customAttributes = [
            'stato_id' => 'Status',
            'city_id' => 'Città',
            'address' => 'Indirizzo',
            'price' => 'Richiesta',
            'title' => 'Titolo',
            'wc' => 'WC',
            'box' => 'Box',
            'vani' => 'Vani',
            'mq' => 'Mq',
            'category_id' => 'Categoria',
            'ape' => 'APE'
        ];

        $this->validate($request,$rules,$customMessages,$customAttributes);

      //recupero dati inseriti
        $dati_inseriti = $request->all();
        $check_city = DB::table('cities')->select('id')->where('name', '=', $dati_inseriti['city'])->first();

        if($check_city == null || $check_city->id == 0 || $check_city->id == null ) { // città non esistente -> aggiunge una nuova città
            $now = new DateTime();
            $formatted = $now->format('Y-m-d H:i:s');
            $new_city = DB::table('cities')->insertGetId(['name' => $dati_inseriti['city'], 'created_at' => $formatted, 'updated_at' => $formatted]);
            $dati_inseriti['city_id'] = $new_city;
        } else {
            $dati_inseriti['city_id'] = $check_city->id;
        }


        //
        //Creo le nuove istanze relative ad 1 immobile
        $nuovo_immobile = new Immobile();
        $nuovo_detail = new Detail();
        $nuove_features = new Feature();
        $nuove_features->fill($dati_inseriti);


        if($nuove_features->ristrutturato == null)
            $nuove_features->ristrutturato = 'off';
        if($nuove_features->riscaldamento == null)
            $nuove_features->riscaldamento = 'off';
        if($nuove_features->terrazzo == null)
            $nuove_features->terrazzo= 'off';
        if($nuove_features->posto_auto == null)
            $nuove_features->posto_auto = 'off';
        if($nuove_features->balconi == null)
            $nuove_features->balconi = 'off';

        $nuove_features->save();

        //Salvo i dati dettagli
        $nuovo_detail->fill($dati_inseriti);
        $nuovo_detail->save();


        $dati_inseriti['detail_id'] = $nuovo_detail->id;
        $dati_inseriti['feature_id'] = $nuove_features->id;


        //Prendo i dati immobile
        $nuovo_immobile->fill($dati_inseriti);

        $nuovo_immobile->slug = str_slug($nuovo_immobile->titolo.' '.$nuovo_immobile->id, '-') . '-' . rand(1,999999);

        if($nuovo_immobile->video_link != '') {
            $video_embed = explode('watch?v=', $dati_inseriti['video_link']);
            $nuovo_immobile->video_link = 'https://www.youtube.com/embed/' . $video_embed[1];
        }

        //Inserimento immagine di copertina
        if($request->hasFile('img_preview'))
        {
            $allowedfileExtension=['jpg','png','PNG','JPG','JPEG','jpeg'];
            $files = $request->file('img_preview');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check) {
                    $filename = $file->store('public/preview');
                    $nuovo_immobile->img_preview = $filename;
                    $img_path = public_path('storage/public/preview/'.$file->hashName());
                    $imgObject = Img::make($img_path);
                    Image::resizeImage($imgObject, true, $file->hashName(), '/storage/public/preview/');
                    // echo "Immagine inserita con successo";
                }
                else
                {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong>Ciao {{ Auth::user()->name }}, puoi caricare solo file png o jpg. Per qualsiasi dubbio contatta Donato!</div>';
                }
            }
        }
        $nuovo_immobile->save();

      if(!array_key_exists('evidenza', $dati_inseriti)) {
          echo "Ok";
        } else {
      //controllo evidenza -> se è checked inserisco in evidenza
      if ($dati_inseriti['evidenza'] == 'on') {
        $nuova_evidenza = new Evidenza();
        $nuova_evidenza->immobile_id = $nuovo_immobile['id'];
        $nuova_evidenza->save();
        }
      }
        // Salvo le immagini feature
        $nuove_immagini = new Image();
        $nuove_immagini->fill($dati_inseriti);


        //inserimento immagini galleria immobile
        if($request->hasFile('photos'))
        {
            $allowedfileExtension=['jpg','png','PNG','JPG','JPEG','jpeg'];
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check) {
                  $path_foto = $file->store('public/immobili_images');
                  // $filename = Storage::put('immobili_images', $file);
                    $img_path = public_path('storage/public/immobili_images/'.$file->hashName());

                    $img_name = $file->hashName();

                    Image::addWaterMark($img_path, $img_name);

                    Image::create([
                        'immobile_id' => $nuovo_immobile->id,
                        'filepath' => $path_foto
                    ]);



                    $file->move(public_path('images/'), asset('public/immobili_images'));
                    echo "Immagini inserite con successo";
                }
                else {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong>Ciao {{ Auth::user()->name }}, puoi caricare solo file png o jpg. Per qualsiasi dubbio contatta Donato!</div>';
                }
            }
        }

    return redirect()->route('dash');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug, $immobile_id)
    {
      $immobile_show = Immobile::where('slug', $slug)->first();
      if(empty($immobile_show)) {
      echo('Metodo show Immobile controller');
      }

      $images = Image::where('immobile_id', $immobile_id)->get();
      $immobile_show->price = number_format($immobile_show->price, 0, ',', '.');
      return view('front.immobile', compact('immobile_show', 'images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imm_to_edit = Immobile::find($id);
        $status = Stato::all();
        $categories = Category::all();
        $features = Feature::find($imm_to_edit->feature_id);
        $immobile_images = Image::where('immobile_id', '=', $imm_to_edit->id)->get();
        return view('back.edit-immobile', compact('imm_to_edit', 'status','categories', 'immobile_images', 'features'));
    }


    public function update(Request $request,$id) {
        $rules = [
            'stato_id' => 'required',
            'category_id' => 'required|int',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'titolo' => 'required|string|max:255',
            'mq' => 'required|integer|min:1',
            'vani' => 'required|integer|min:0',
            'wc' => 'required|integer|min:0',
            'box' => 'required|integer|min:0',
            'ape' => 'required|string|max:255',
        ];

        $customMessages = [
            'required' => 'Il campo :attribute non può essere vuoto.',
            'integer' => 'Il campo :attribute non può essere vuoto.',

        ];
        $customAttributes = [
            'stato_id' => 'Status',
            'city_id' => 'Città',
            'address' => 'Indirizzo',
            'price' => 'Richiesta',
            'title' => 'Titolo',
            'wc' => 'WC',
            'box' => 'Box',
            'vani' => 'Vani',
            'mq' => 'Mq',
            'category_id' => 'Categoria',
            'ape' => 'APE'
        ];

        $this->validate($request,$rules,$customMessages,$customAttributes);


        $immobile = Immobile::find($id);
        $check_city = DB::table('cities')->select('id')->where('name', '=', $request['city'])->first();

        $immobile->titolo = $request->titolo;
        $immobile->stato_id = $request->stato_id;
        $immobile->address = $request->address;
        $immobile->video_link = $request->video_link;
        $immobile->description = $request->description;
        $immobile->category_id = $request->category_id;
        $immobile->price = $request->price;
        $immobile->city_id = $check_city->id;

        $detail = Detail::find($immobile->detail_id);
        $detail->mq = $request->mq;
        $detail->vani = $request->vani;
        $detail->box = $request->box;
        $detail->ape = $request->ape;
        $detail->wc = $request->wc;

        $features = Feature::find($immobile->feature_id);
        $features->ristrutturato = $request->ristrutturato ;
        $features->riscaldamento = $request->riscaldamento ;
        $features->terrazzo = $request->terrazzo ;
        $features->balconi = $request->balconi ;
        $features->posto_auto = $request->posto_auto ;

        if($features->ristrutturato == null)
            $features->ristrutturato = 'off';
        if($features->riscaldamento == null)
            $features->riscaldamento = 'off';
        if($features->terrazzo == null)
            $features->terrazzo= 'off';
        if($features->posto_auto == null)
            $features->posto_auto = 'off';
        if($features->balconi == null)
            $features->balconi = 'off';

        $features->save();
        $detail->save();

        $messages = array('message' => 'Tutto ok', 'msgType' => 'success');

        //Inserimento immagine di copertina
        if($request->hasFile('img_preview'))
        {
            $allowedfileExtension=['jpg','png','PNG','JPG','JPEG','jpeg'];
            $files = $request->file('img_preview');

            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check) {
                  $filename = $file->store('public/preview');
                  $immobile->img_preview = $filename;
                  $img_path = public_path('storage/public/preview/'.$file->hashName());
                  $imgObject = Img::make($img_path);
                  Image::resizeImage($imgObject, true, $file->hashName(), '/storage/public/preview/');
                }
                else
                {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong>Ciao {{ Auth::user()->name }}, puoi caricare solo file png o jpg. Per qualsiasi dubbio contatta Donato!</div>';
                }
            }
        }

        //inserimento immagini galleria immobile
        if($request->hasFile('photos'))
        {
            $allowedfileExtension=['jpg','png','PNG','JPG','JPEG','jpeg'];
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check) {
                    $path_foto = $file->store('public/immobili_images');
                    // $filename = Storage::put('immobili_images', $file);
                    $img_path = public_path('storage/public/immobili_images/'.$file->hashName());

                    $img_name = $file->hashName();

                    Image::addWaterMark($img_path, $img_name);
                    Image::create([
                        'immobile_id' => $immobile->id,
                        'filepath' => $path_foto
                    ]);
                    $file->move(public_path('images/'), asset('public/immobili_images'));
                    echo "Immagini inserite con successo";
                }
                else {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong>Ciao {{ Auth::user()->name }}, puoi caricare solo file png o jpg. Per qualsiasi dubbio contatta Donato!</div>';
                }
            }
        }
        $immobile->save();
        return redirect(route('dash'))->with('messages',$messages);




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $immobile_to_delete = Immobile::find($id);
      if (!empty($immobile_to_delete)) {
        $immobile_to_delete->delete();
      }

      return redirect(route('dash'));
    }

    public function search(Request $request) {

        if($request->ajax()) {
            $immobili = Immobile::where('titolo', 'LIKE', "%$request->search%")->get();
            $output = '';

            foreach($immobili as $key => $value) {
                $stato = $value->stato->name;
                $cat = $value->category->name;
                $city = $value->city->name;
                $route = route('destroy.immobile', $value->id);

                $output .= "<tr>";
                $output .= "<td>$value->id</td>";
                $output .= "<td>$value->titolo</td>";
                $output .= "<td>$stato</td>";
                $output .= "<td>$cat</td>";
                $output .= "<td>$city</td>";
                $output .= "<td>";
                $output .= "<button type=\"button\" class=\"btn btn-info\"><i class=\"fas fa-search-plus\"></i></button><a href=\"{$route}\"><button type=\"button\" class=\"btn btn-danger\"><i class=\"far fa-trash-alt\"></i></button></a>
                            <a href=\"{{ route('edit.immobile', $value->id) }}\"><button type=\"button\" class=\"btn btn-warning\"><i class=\"far fa-edit\"></i></button></a></td>";
                $output .= '</tr>';

            }
            return $output;
        }

        $stato = Stato::where('id', '=', $request->state_id)->pluck('search_label');
        $form_data = array('category_id' => $request->category_id, 'stato_id' => $request->state_id, 'city_id' => $request->city_id);
        $filters = array();
        $cat = DB::table('categories')->get();
        $cities = DB::select("CALL getAvailCities()");

        if($stato->first() == null)
            $stato = array('Ricerca');


        $index = 0;
        foreach ($form_data as $key => $value) {
            if($value == null) {
                continue;
            } elseif($value != null) {
                $filters[$index][0] = $key;
                $filters[$index][1] = '=';
                $filters[$index][2] = $value;
                $index++;
            }
        }

        $matches = Immobile::where($filters)->get();
        return view('front.fittasi', compact('matches', 'stato', 'cities','cat'));
    }
}
