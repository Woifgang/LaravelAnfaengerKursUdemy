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


Route::get('/test', 'DatenController@daten');

Route::get('/autoeintragen' , function (){
    return view('carEintragen');
});
Route::post('/autoGespeichert', 'DatenController@datenFormular');
Route::get('/autofinden' , 'Datencontroller@datenFinden');
Route::get('/autoupdate' , 'Datencontroller@datenUpdate');
Route::get('/autowhere' , 'Datencontroller@datenWhere');
Route::get('/autoall' , 'Datencontroller@datenAll');
Route::get('/autolöschen' , 'Datencontroller@datenEntfernen');
Route::get('/autozuweisen' , 'Datencontroller@datenVerknuepfen');
Route::get('/automanytomany' , 'Datencontroller@datenManyToMany');
Route::get('/autoinneuegarage' , 'Datencontroller@datenAutoNeueGarage');
Route::get('/autogarageerste' , 'Datencontroller@datenErsteGarageZumAuto');



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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/geheim', 'UserController@userDatenAusgeben')->middleware('auth');
Route::get('/email', 'UserController@emailVersenden')->middleware('auth');

/*
Route::get('/geheim', function (){
   return "geheimer Inhalt";
})->middleware('auth');
*/