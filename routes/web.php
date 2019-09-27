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

Route::group(['prefix' => 'admin'], function(){
    
    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy', [
        'uses'  =>  'UsersController@destroy',
        'as'    =>  'users.destroy'
    ]);
    
});

Route::group(['prefix' => 'especialidades'], function(){
    
    Route::resource('especialidades','EspecialidadesController');
    
});

Route::group(['prefix' => 'os'], function(){
    
    Route::resource('os','OSController');
    
});

Route::group(['prefix' => 'pacientes'], function(){
    
    Route::resource('pacientes','PacientesController');
    
});

Route::group(['prefix' => 'medicos'], function(){
    
    Route::resource('medicos','MedicosController');
    
});
