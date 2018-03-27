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
    return view('/tmp/welcome');
});


//Formular Validator

Route::get('/formular', function (){
    return view('formular');
});

Route::post('/validate', 'ValidateController@inputValidate');



/*
//Grundfunktionen

Route::get('/impressum', function () {
    return view('/tmp/impressum');
});

Route::get('/formular' , function (){
    return view('/tmp/formular');
});

Route::post('/data' , 'FormularController@formularAuswerten');
Route::get('/data', 'DataAusgabeController@standartwert' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
