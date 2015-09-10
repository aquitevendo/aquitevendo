<?php

/*
|		Rutas de Aquitevendo.com.mx
|
*/

get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

	Route::resource('usuario', 'UsuarioController');

	Route::resource('centro-comercial', 'CentroComercialController');
	
	Route::resource('establecimiento', 'EstablecimientoController');
   
});

get('/activo/agregar', 'ActivoController@create');
post('/activo/agregar', 'ActivoController@store');