<?php

namespace App\Http\Controllers;

use App\NewsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stato;
use App\Immobile;
use App\Detail;
use App\Image;
use App\Slider;
use App\News;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = DB::table('categories')->get();
        $statos = DB::table('statos')->get();
        $cities = DB::select("CALL getAvailCities()");
        $highlights = DB::select("CALL getHighlights()");
        $offers = DB::select('CALL getOffers()');
        $sliders = Slider::all();
        $news = News::orderBy('id', 'DESC')->get();
        $news_images = NewsImage::orderBy('id','DESC')->get();
        $images = array();
        $immobili = Immobile::all();

        foreach($news_images as $single_image) {
            $images[$single_image['news_id']] = $single_image['path'];
        }

        return view('front.home', compact('immobili', 'statos', 'cities', 'cat', 'highlights', 'offers', 'sliders', 'news', 'images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
