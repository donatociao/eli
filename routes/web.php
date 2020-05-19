<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index')->name('home');

Route::get('/news', function () {
    return view('front.articolo');
})->name('articolo');

Route::get('/fittasi', function () {
    return view('front.fittasi');
})->name('fittasi');

Route::get('/vendesi', function () {
    return view('front.vendesi');
})->name('vendesi');

Route::get('/immobile/', function () {
    return view('front.immobile');
})->name('immobile');

Route::get('/contatti', function () {
    return view('front.contatti-page');
})->name('contatti');

Route::get('/privacy-policy', function () {
    return view('front.privacy');
})->name('privacy');




//NEWS
Route::get('/dash/news', 'NewsController@create')->name('create.news'); //Gestione News
Route::get('/{slug}/{news_id}', 'NewsController@show')->name('show.news'); //apri scheda articolo
Route::post('/dash/news', 'NewsController@store')->name('store.news'); //Inserisco news
Route::delete('/dash/news/delete/{id}', 'NewsController@destroy')->name('destroy.news'); //Elimino una news

Auth::routes();
//DASHBOARD
Route::get('/dash', 'DashController@index')->name('dash'); //pannello di controllo



//EVIDENZA
Route::get('/dash/evidenza', 'EvidenzaController@create')->name('create.evidenza'); //Gestione evidenza
Route::post('/dash/evidenza', 'EvidenzaController@store')->name('store.evidenza'); //Inserisco immobile in evidenza
Route::get('/dash/evidenza/delete/{id}', 'EvidenzaController@destroy')->name('destroy.evidenza'); //Elimino un immobile in evidenza

//Slider
Route::get('/dash/slider', 'SliderController@create')->name('create.slider'); //Gestione slider
Route::post('/dash/slider', 'SliderController@store')->name('store.slider'); //Inserisco immobile nello slider
Route::get('/dash/slider/delete/{id}', 'SliderController@destroy')->name('destroy.slider'); //Elimino immobile dallo slider


// Offerte
Route::get('/dash/offerte', 'OffersController@index')->name('offerte'); //Gestione offerte
Route::post('/dash/offerte', 'OffersController@store')->name('store.offerte'); //Inserisco immobile in offerta
Route::get('/dash/offerte/delete/{id}', 'OffersController@destroy')->name('destroy.offerte'); //Elimino un immobile in offerta

//IMMOBILI
Route::get('/dash/immobili/', 'ImmobiliController@create')->name('create.immobile'); //view di inserimento nuovo immobile
Route::post('/dash', 'ImmobiliController@store')->name('immobili.store'); //inserisco nuovo immobile
Route::get('/dash/immobili/delete/{id}', 'ImmobiliController@destroy')->name('destroy.immobile'); //Elimino un immobile
Route::get('/{slug}/{immobile_id}', 'ImmobiliController@show')->name('show.immobile'); //apri scheda immobile

