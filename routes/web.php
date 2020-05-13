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

Route::get('/dash', 'DashController@index')->name('dash'); //pannello di controllo

Route::get('/dash/inserisci-immobile', 'ImmobiliController@create')->name('inserisci'); //inserimento nuovo immobile

Route::post('/dash', 'ImmobiliController@store')->name('immobili.store'); //salva nuovo immobile

Route::get('/dash/slider', 'SliderController@index')->name('slider'); //Gestione slider
Route::get('/dash/offerte', 'OffersController@index')->name('offerte'); //Gestione offerte
Route::get('/dash/news', 'NewsController@index')->name('news'); //Gestione offerte
