<?php

namespace App\Http\Controllers;

use App\NewsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Stato;
use App\Category;
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
        $category = Category::all();
        $statos = DB::table('statos')->get();
        $cities = DB::select("CALL getAvailCities()");
        // $highlights = DB::select("CALL getHighlights()");
        // $offers = DB::select('CALL getOffers()');

        //ATTIVARE DOPO AVER MIGRATO LE MODIFICHE
        $highlights = DB::select("CALL getHighlightsVisible()");
        $offers = DB::select('CALL getOffersVisible()');

        $sliders = Slider::all();

        $news = News::orderBy('id', 'DESC')->get();
        $news_images = NewsImage::orderBy('id','DESC')->get();
        $images = array();
        $immobili = Immobile::where([
        ['visible', '=', 'on']
        ])->orderBy('id', 'DESC')->get();

        foreach($news_images as $single_image) {
            $images[$single_image['news_id']] = $single_image['path'];
        }

        return view('front.home', compact('immobili', 'statos', 'cities', 'cat', 'highlights', 'offers', 'sliders','news','images','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    public function create_news() {

        $news = News::orderBy('id', 'DESC')->get();
        return view('back.inserisci-news', compact('news'));

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
