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
    return view('auth.login');
});

Route::get('/rekeningen', 'RekeningenController@index')->middleware('auth');
Route::get('/createrekening', 'RekeningenController@create')->middleware('auth');

Route::get('/kalender', function () {
    return view('kalender');
});

Route::get('/betaalverzoeken', 'BetaalVerzoekenController@index')-> middleware('auth');
Route::get('/nieuwverzoek', 'BetaalVerzoekenController@create')-> middleware('auth');

Route::get('/contacten', 'ContactenController@index')->middleware('auth');
Route::get('/nieuwcontact', 'ContactenController@create')->middleware('auth');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/betalen/{id}', 'BetalenController@index')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/callback/{id}', 'BetalenController@finish');

Route::get('/callback/{id}', 'BetalenController@finish');

Auth::routes();

Route::post('/nieuwverzoek', 'BetaalVerzoekenController@store');

Route::post('/nieuwerekening', 'RekeningenController@store');

Route::post('/nieuwcontact', 'ContactenController@store');

Route::post('/deleterekening', 'RekeningenController@delete');

Route::post('/deleteverzoek', 'BetaalVerzoekenController@delete');

Route::post('/betalen', 'BetalenController@betalen')->middleware('auth');
