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





Auth::routes();
//DASHBOARD
Route::get('/dash', 'DashController@index')->name('dash'); //pannello di controllo

//IMMOBILI
Route::get('/dash/inserisci-immobile', 'ImmobiliController@create')->name('create.immobile'); //inserimento nuovo immobile
Route::post('/dash', 'ImmobiliController@store')->name('immobili.store'); //salva nuovo immobile

//EVIDENZA
Route::get('/dash/evidenza', 'EvidenzaController@create')->name('create.evidenza'); //Gestione evidenza
Route::post('/dash/evidenza', 'EvidenzaController@store')->name('store.evidenza'); //Inserisco immobile in evidenza

//Slider
Route::get('/dash/slider', 'SliderController@create')->name('create.slider'); //Gestione slider
Route::post('/dash/slider', 'SliderController@store')->name('store.slider'); //Inserisco immobile nello slider


// Offerte
Route::get('/dash/offerte', 'OffersController@index')->name('offerte'); //Gestione offerte
Route::post('/dash/offerte', 'OffersController@store')->name('store.offerte'); //Inserisco immobile in offerta
Route::get('/dash/offerte/delete/{id}', 'OffersController@destroy')->name('destroy.offerte'); //Elimino un immobile in offerta

Route::get('/dash/news', 'NewsController@index')->name('news'); //Gestione offerte
