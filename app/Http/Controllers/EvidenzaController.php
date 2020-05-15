<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Immobile;
use App\Evidenza;

class EvidenzaController extends Controller
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
      $immobili = Immobile::all();
      $highlights = Evidenza::all();
      return view('back.immobili-evidenza', compact('highlights', 'immobili'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();
        $nuova_evidenza = new Evidenza();
        $nuova_evidenza->fill($data);

        //conto quante evidenze ci sono con l'id della request
        $check = Evidenza::where('immobile_id', $data['immobile_id'])->count();

        //se non ci sono evidenze con l'id della request salvo
        if ($check == 0) {
          $nuova_evidenza->save();
        }


        $immobili = Immobile::all();
        $highlights = Evidenza::all();
        return view('back.immobili-evidenza', compact('highlights', 'immobili'));
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
