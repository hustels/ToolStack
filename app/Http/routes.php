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
use App\Http\Request;




Route::group(['middlewareGroups' => ['web']], function () {
	Route::auth();
	Route::get('/home' , 'HomeController@index');
	Route::get('report/srvmast' , 'SrvmastController@show');
	Route::post('report/srvmast' , 'SrvmastController@index');
	Route::post('/report/srvmast/handler' , 'SrvmastController@handle');

	Route::get('report/china' , 'ChinaController@show');
	Route::post('report/china' , 'ChinaController@index');
	Route::post('/report/china/handler' , 'ChinaController@handle');

	Route::get('report/francia' , 'FranciaController@show');
	Route::post('report/francia' , 'FranciaController@index');
	Route::post('/report/francia/handler' , 'FranciaController@handle');

	Route::get('report/vicalvaro' , 'VicalvaroController@show');
	Route::post('report/vicalvaro' , 'VicalvaroController@index');
	Route::post('/report/vicalvaro/handler' , 'VicalvaroController@handle');

	Route::get('report/australia' , 'AustraliaController@show');
	Route::post('report/australia' , 'AustraliaController@index');
	Route::post('/report/australia/handler' , 'AustraliaController@handle');
});













