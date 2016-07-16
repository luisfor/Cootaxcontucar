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

Route::get('password/email','Auth\PasswordController@getEmail');
Route::post('password/email','Auth\PasswordController@postEmail');
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('/', 'HomeController@index');
Route::resource('configurar', 'UsuarioController');
Route::resource('login', 'loginController');
Route::get('logout','loginController@logout');

Route::get('terceros','HomeController@terceros');
Route::resource('vehiculo','Cliente\Vehiculo\VehiculoController');
Route::resource('cuenta','CuentaController');
Route::resource('ingreso','IngresoController');
Route::resource('egreso','EgresoController');

Route::resource('empleado','Empleado\EmpleadoController');
Route::resource('cliente','Cliente\ClienteController');
Route::resource('proveedor','Proveedor\ProveedorController');
Route::resource('socio','Socio\SocioController');




