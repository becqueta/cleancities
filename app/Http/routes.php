<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('titi', 'titiController@index');

Route::get('qrcode/{type_incident}/{id_qr}', 'QrController@getIncident');

Route::get('dashboard', 'mobileController@index');
Route::get('detail/{id}', 'mobileController@show');