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
//pasar parametros por get
/*Route::get('/name/{name}/lastname/{lastname?}',function($name,$lastname = 'apellido'){
	return 'Hola Soy: '. $name." ".$lastname;
});

Route::get('/mi_primer_ruta', function(){
	return "Hello World.";
});*/

//prueba
Route::get('/prueba/{name}', 'PruebaController@prueba');

//Controlador Trainers
Route::resource('trainers','TrainerController');
//

