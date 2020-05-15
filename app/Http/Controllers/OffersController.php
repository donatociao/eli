<?php

namespace App\Http\Controllers;


use App\Offer;
use Illuminate\Http\Request;
use App\Immobile;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $immobili = Immobile::all();
        $offers = Offer::all();
        return view('back.offerte', compact('immobili','offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $immobili = Immobile::all();
        $offers = Offer::all();
        return view('back.offerte', compact('immobili','offers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->all();
        $new_offer = new Offer();
        $new_offer->fill($data);

        //conto quante offerte ci sono con l'id della request
        $check = Offer::where('immobile_id', $data['immobile_id'])->count();

        //se non ci sono offerte con l'id della request salvo
        if ($check == 0) {
            $new_offer->save();
        }


        $immobili = Immobile::all();
        $offers = Offer::all();
        return view('back.offerte', compact('immobili','offers'));
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
    public function destroy($id) {

        $item = Offer::findOrFail($id);
        //$this->authorize('deleteItem', $item);
        $item->delete();
        return redirect(route('offerte'));

    }
}
