<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\NewsImage;

class NewsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('back.news');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $news = News::orderBy('id', 'DESC')->get();
        return view('back.inserisci-news', compact('news'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $news_data = $request->all();
        $news = new News();
        $news_image  = new NewsImage();
        $news->fill($news_data);

        $news->slug = str_slug($news->title.' '.$news->id, '-') . '-' . rand(1,999999);
        $news->save();

        //Inserimento immagine di copertina
        if($request->hasFile('img_news'))
        {
            $allowedfileExtension=['jpg','png'];
            $files = $request->file('img_news');
            foreach($files as $file){
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check)
                {
                    $filename = $file->store('public/news');
                    $news_image->path= $filename;
                    echo "Immagine inserita con successo";
                }
                else
                {
                    echo '<div class="alert alert-warning"><strong>Warning!</strong>Ciao {{ Auth::user()->name }}, puoi caricare solo file png o jpg. Per qualsiasi dubbio contatta Donato!</div>';
                }
            }

        } else {
            $img = 'public/news/default.png';
            $news_image->path = $img;
        }
        $news_image->news_id = $news->id;
        $news_image->save();

        return redirect(route('dash'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($news_id) {
        $show_news = News::where('id', $news_id)->firstOrFail();
        if(empty($show_news)) {
            echo('Metodo show Immobile controller');
        }

        $news_image = NewsImage::where('news_id', $show_news->id)->first();
        return view('front.articolo', compact('show_news', 'news_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $news_to_edit = News::find($id);

        return view('back.edit-news', compact('news_to_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $news = News::find($id);
        //$news_image  = new NewsImage();

        $news->title = $request->title;
        $news->body = $request->body;

        $news->save();
        return redirect(route('dash'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $news_to_delete = News::find($id);
        if (!empty($news_to_delete)) {
            $news_to_delete->delete();
        }

        return redirect(route('create.news'));
    }
}
