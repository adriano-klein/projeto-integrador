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

// Route::get('login', 'LoginController@login');

Route::get('/', 'IndexController@index');


// Route::post('/valida-login', 'ControllerValidaLogin@validaLogin');
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

//Carrinho
Route::get('carrinho', 'ControllerCarrinho@carrinho');
Route::get('carrinho/adicionar',function(){
    return redirect('/');
});
Route::post('carrinho/adicionar','ControllerCarrinho@adicionar');
Route::delete('carrinho/remover','ControllerCarrinho@remover');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
