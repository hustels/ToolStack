<?php


use App\Http\Request;


Route::get('/', function () {
    return redirect('/home');
});



Route::group(['middlewareGroups' => ['web']], function () {
	Route::auth();
	/**
	 * Rutas de reportes de Backups
	 */
	Route::get('dti/salas' , 'ChatController@index');
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


	Route::get('report/oracle' , 'OracleController@show');
	Route::post('report/oracle' , 'OracleController@index');
	Route::post('/report/oracle/handler' , 'OracleController@handle');


	// app routes
	Route::get('comments' , 'CommentController@index');
	Route::post('comments/remove' , 'CommentController@remove');
	Route::post('comments/add' , 'CommentController@add');
	Route::get('comments/all' , 'CommentController@all');
});













