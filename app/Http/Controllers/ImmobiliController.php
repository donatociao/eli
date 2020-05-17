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
use App\Evidenza;
use DateTime;

class ImmobiliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Validazione dei dati
      // $validated = $request->validate([
      // // 'status' => 'required',
      // // 'category' => 'required',
      // // 'city' => 'required|string|max:255',
      // // 'address' => 'required|string|max:255',
      // // 'price' => 'required|integer|min:1',
      // // 'titolo' => 'required|string|max:255',
      // // 'mq' => 'required|integer|min:1',
      // // 'vani' => 'required|integer|min:1',
      // // 'wc' => 'required|integer|min:1',
      // // 'box' => 'required|integer|min:1',
      // // 'ape' => 'required|string|max:255',
      // // 'description' => 'required',
      // // 'ristrut' => 'required|boolean',
      // // 'riscald' => 'required|boolean',
      // // 'terrazzo' => 'required|boolean',
      // // 'balconi' => 'required|boolean',
      // // 'posto' => 'required|boolean',
      // // 'evidenza' => 'required|boolean'
      // ]);

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

        //Salvo i dati feature
        $nuove_features->fill($dati_inseriti);

        //controlli sulle features
        if(!array_key_exists('ristrutturato', $dati_inseriti)) {
            $nuove_features->ristrutturato = 'off';
          }
        if (!array_key_exists('riscaldamento', $dati_inseriti)) {
            $nuove_features->riscaldamento = 'off';
          }
        if (!array_key_exists('balconi', $dati_inseriti)) {
            $nuove_features->balconi = 'off';
          }
        if (!array_key_exists('terrazzo', $dati_inseriti)) {
            $nuove_features->terrazzo = 'off';
          }
        if (!array_key_exists('posto_auto', $dati_inseriti)) {
            $nuove_features->posto_auto = 'off';
          }
        $nuove_features->save();

        //Salvo i dati dettagli
        $nuovo_detail->fill($dati_inseriti);
        $nuovo_detail->save();


        $dati_inseriti['detail_id'] = $nuovo_detail->id;
        $dati_inseriti['feature_id'] = $nuove_features->id;


        //Prendo i dati immobile
        $nuovo_immobile->fill($dati_inseriti);

        $nuovo_immobile->slug = str_slug($nuovo_immobile->titolo.' '.$nuovo_immobile->id, '-') . '-' . rand(1,999999);

        //Inserimento immagine di copertina
        if($request->hasFile('img_preview'))
        {
            $allowedfileExtension=['jpg','png'];
            $files = $request->file('img_preview');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check)
                {
                  $filename = $file->store('public/preview');
                  $nuovo_immobile->img_preview = $filename;
                    echo "Immagine inserita con successo";
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
            $allowedfileExtension=['jpg','png'];
            $files = $request->file('photos');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check)
                {
                  $path_foto = $file->store('public/immobili_images');
                  // $filename = Storage::put('immobili_images', $file);

                    Image::create([
                        'immobile_id' => $nuovo_immobile->id,
                        'filepath' => $path_foto
                    ]);
                    echo "Immagini inserite con successo";
                }
                else
                {
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
