<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\City;
use App\Immobile;
use App\Stato;


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


      return view('back.inserisci',  compact('status', 'categories')); //PASSO GLI INDICI ALLA VIEW
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
        $city_inserita = $dati_inseriti['city'];



        //Creo le nuove istanze relative ad 1 immobile
        $nuovo_immobile = new Immobile();
        // $nuovo_details = new Detail();
        // $nuove_features = new Features();
        $nuova_city = new City();
        // $nuove_immagini = new ImmobileImage();

        // $slug = str_slug($dati_inseriti['titolo']);

        // $nuova_city = App\City::firstOrCreate(['name' => $dati_inseriti->city]);

        //Prendo i dati immobile
        $nuovo_immobile->fill($dati_inseriti);
        // $nuova_city->fill($city_inserita);


        $nuovo_immobile->slug = str_slug($nuovo_immobile->titolo.' '.$nuovo_immobile->id, '-');
        $nuovo_immobile->city_id = $nuova_city['id'];
        $nuovo_immobile->city = $city_inserita;

        dd($nuovo_immobile);

        $nuovo_immobile->save();
        $nuova_city->save();

        // //Salvo i dati dettagli
        // $nuovo_detail->fill($dati_inseriti);
        // $nuovo_detail->save();
        //
        // //Salvo i dati feature
        // $nuove_features->fill($dati_inseriti);
        // $nuove_features->save();
        //



        //Salvo le immagini feature
        // $nuove_immagini->fill($dati_inseriti);
        // $nuove_immagini->save();

      //   if($request->hasFile('photos'))
      //   {
      //     $estensioniPermesse=['jpg','png'];
      //     $files = $request->file('photos');
      //     foreach($files as $file){
      //       $filename = $file->getClientOriginalName();
      //       $extension = $file->getClientOriginalExtension();
      //       $check=in_array($extension,$allowedfileExtension);
      //       dd($check);
      //       if($check)
      //       {
      //         // $items= Item::create($request->all());
      //         // $path_foto = Storage::put('filepath', $dati_inseriti['photos']);
      //
      //         foreach ($request->photos as $photo) {
      //           $filename = $photo->store('photos');
      //           dd($filename);
      //           ImmobiliImage::create([
      //             'immobile_id' => $nuovo_immobile->id,
      //             'filepath' => $filename
      //           ]);
      //         }
      //         echo "Foto inserita con successo";
      //       }
      //       else
      //       {
      //       echo '<div class="alert alert-warning"><strong>Warning!</strong>Ciao {{ Auth::user()->name }}, puoi caricare solo file png o jpg. Per qualsiasi dubbio contatta contatta Donato!</div>';
      //     }
      //   }
      // }


      // //Recupero i dati
      //  $category = $request->category;
      //  $stato_immobile = $request->status;

    //   //Salvo i dati immobile foreign
    //   $nuovo_immobile->city_id = $nuova_city->id;
    //   $nuovo_immobile->stato_id = $_city->id;
    //   $nuovo_immobile->category_id = $category->id;
    //   $nuovo_immobile->feature_id = $nuove_features->id;
    //   $nuovo_immobile->detail_id = $nuovo_detail->id;
    //   $nuovo_immobile->save();

    return redirect()->route('dash');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
