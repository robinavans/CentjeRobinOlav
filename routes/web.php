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

Route::get('/rekeningen', 'RekeningenController@index')->middleware('auth');
Route::get('/createrekening', 'RekeningenController@create')->middleware('auth');

Route::get('/kalender', function () {
    return view('kalender');
});

Route::get('/betaalverzoeken', 'BetaalVerzoekenController@index')-> middleware('auth');
Route::get('/nieuwverzoek', 'BetaalVerzoekenController@create')-> middleware('auth');

Route::get('/contacten', function () {
    return view('contacten');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/nieuwverzoek', 'BetaalVerzoekenController@store');

Route::post('/nieuwerekening', 'RekeningenController@store');


