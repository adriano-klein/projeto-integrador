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

//rotas para envio de emails via formulario de contato
Route::get('contato', 'ControllerContato@contato');
Route::post('contato', 'ControllerContato@enviarEmail');

//rotas dos cursos
Route::get('curso_programacao','ControllerMostraCursos@programacao');
Route::get('curso_marketing', 'ControllerMostraCursos@marketing');
Route::get('curso_data_science', 'ControllerMostraCursos@data_science');
Route::get('curso_mentoria', 'ControllerMostraCursos@mentoria');
Route::get('curso_redes', 'ControllerMostraCursos@redes');
Route::get('curso_mobile', 'ControllerMostraCursos@mobile');
Route::get('sobre', 'ControllerSobre@sobre');
Route::get('carrinho', 'ControllerCarrinho@carrinho');
