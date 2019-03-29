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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rekeningen/{lang?}', 'RekeningenController@index')->middleware('auth');
Route::get('/createrekening/{lang?}', 'RekeningenController@create')->middleware('auth');

Route::get('/kalender', function () {
    return view('kalender');
});

Route::get('/betaalverzoeken/{lang?}', 'BetaalVerzoekenController@index')-> middleware('auth');
Route::get('/nieuwverzoek/{lang?}', 'BetaalVerzoekenController@create')-> middleware('auth');

Route::get('/contacten/{lang?}', function () {
    return view('contacten');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/betalen/{id}/{lang?}', 'BetalenController@index')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/callback/{lang?}', 'BetaalVerzoekenController@index');

Route::get('/callback/{id}', 'BetalenController@finish');


Auth::routes();

Route::post('/nieuwverzoek', 'BetaalVerzoekenController@store');

Route::post('/nieuwerekening', 'RekeningenController@store');

Route::post('/deleterekening', 'RekeningenController@delete');

Route::post('/deleteverzoek', 'BetaalVerzoekenController@delete');

Route::post('/betalen', 'BetalenController@betalen')->middleware('auth');
