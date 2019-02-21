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
    return view('index');
});


Route::post('/valida-login', 'ControllerValidaLogin@validaLogin');
Route::get('/cursos', 'ControllerMostraCursos@cursos');
Route::get('/contato', 'ControllerContato@contato');
Route::get('curso_programacao','ControllerMostraCursos@programacao');