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

Route::get('dashboard', 'dashboardController@index');

Route::get('mobile/', 'mobileController@index');

Route::get('mobile/report', 'mobileController@signaler');
Route::get('mobile/scanner', 'mobileController@scanner');