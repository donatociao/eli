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

/*Route::get('/news', function () {
    return view('front.articolo');
})->name('articolo');*/

Route::get('/fittasi', 'ImmobiliController@indexAffittasi')->name('fittasi');
Route::get('/vendesi', 'ImmobiliController@indexVendesi')->name('vendesi');

/*Route::get('/vendesi', function () {
    return view('front.vendesi');
})->name('vendesi');*/

Route::get('/immobile/', function () {
    return view('front.immobile');
})->name('immobile');

Route::get('/contatti', function () {
    return view('front.contatti-page');
})->name('contatti');

Route::get('/servizi', function () {
    return view('front.servizi');
})->name('servizi');

Route::get('/privacy-policy', function () {
    return view('front.privacy');
})->name('privacy');






Auth::routes();
//DASHBOARD
Route::any('/dash', 'DashController@index')->name('dash'); //pannello di controllo

//NEWS
Route::get('/dash/news', 'HomeController@create_news')->name('create.news'); //Gestione News
Route::any('/news/{news_id}', 'NewsController@show')->name('show.news')->middleware('auth'); //apri scheda articolo

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
Route::get('/dash/immobili/', 'ImmobiliController@create')->name('create.immobile')->middleware('auth'); //view di inserimento nuovo immobile
Route::post('/dash', 'ImmobiliController@store')->name('immobili.store')->middleware('auth'); //inserisco nuovo immobile
Route::get('/dash/immobili/delete/{id}', 'ImmobiliController@destroy')->name('destroy.immobile')->middleware('auth'); //Elimino un immobile
Route::get('/{slug}/{immobile_id}', 'ImmobiliController@show')->name('show.immobile'); //apri scheda immobile
Route::any('/immobile/search', 'ImmobiliController@search')->name('search.immobile');
Route::any('/dash/immobili/edit/{id}', 'ImmobiliController@edit')->name('edit.immobile')->middleware('auth');
Route::post('/dash/immobili/upd/{id}', 'ImmobiliController@update')->name('update.immobile')->middleware('auth');

Route::post('/dash/news', 'NewsController@store')->name('store.news')->middleware('auth'); //Inserisco news
Route::get('/dash/news/delete/{id}', 'NewsController@destroy')->name('destroy.news')->middleware('auth'); //Elimino una news
Route::get('/dash/news/edit/{id}', 'NewsController@edit')->name('edit.news')->middleware('auth'); //Modifico una news
Route::post('/dash/news/upd/{id}', 'NewsController@update')->name('update.news')->middleware('auth'); //Modifico una news
