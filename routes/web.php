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

use App\Http\Controllers\StudentController;
//Listado de Estudiantes
Route::get('/', 'StudentController@list');
//Formulario de Estudiantes
Route::get('/form','StudentController@studentform');
//Guardar Estudiante
Route::post('/save','StudentController@save')->name('save');
//Eliminar Estudiante
Route::delete('/delete/{id}','StudentController@delete')->name('delete');
//Formulario Editar Estudiante
Route::get('/editForm/{id}','StudentController@editForm')->name('editForm');
//Edición Usuario
Route::patch('/edit/{id}','StudentController@edit')->name('edit');

//Listado de Grupos
Route::get('/grupos', 'GruposController@list');
//Formulario Grupos
Route::get('/formG','GruposController@gruposform');
//Guardar Grupos
Route::post('/saveG','GruposController@saveGrupos')->name('saveG');
//Eliminar Estudiante
Route::delete('/deleteG/{id}','GruposController@deleteGrupos')->name('deleteG');
//Formulario Editar Estudiante
Route::get('/editarFormG/{id}','GruposController@editFormGrupos')->name('editFormG');
//Edición Usuario
Route::patch('/editG/{id}','GruposController@editGrupos')->name('editG');
