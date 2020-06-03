<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Immobile;

class SliderController extends Controller
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
      $sliders = Slider::all();

      return view('back.slider', compact('sliders', 'immobili'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        if(!is_numeric($request->immobile_id))
            return redirect(route('create.slider'));


      $data = $request->all();
      $nuovo_slider = new Slider();
      $nuovo_slider->fill($data);

      //controllo se l'immobile è presente nello slider
      $check = Slider::where('immobile_id', $data['immobile_id'])->count();

      //Salvo se l'immobile non è presente nello slider
      if ($check == 0) {
        $nuovo_slider->save();
      }

      // $nuovo_slider->save();
      $immobili = Immobile::all();
      $sliders = Slider::all();
      return view('back.slider', compact('sliders', 'immobili'));
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
      $slider = Slider::findOrFail($id);
      $slider->delete();
      return redirect(route('create.slider'));

    }
}
