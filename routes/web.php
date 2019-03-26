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
Route::post('pagamento', 'ControllerPagamento@pagamento');
// Route::get('detalhes_compra/{id}', 'ControllerDetalhesCompra@detalhes_compra')->name('detalhes_compra');
Route::get('detalhes_compra/{id}', array('as' => 'detalhes_compra', 'uses' => 'ControllerDetalhesCompra@detalhes_compra'));


//Carrinho
Route::get('carrinho', 'ControllerCarrinho@carrinho');
Route::get('carrinho/adicionar',function(){
    return redirect('/');
});
Route::post('carrinho/adicionar','ControllerCarrinho@adicionar');
Route::delete('carrinho/remover','ControllerCarrinho@remover');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

{
      // Authentication Routes...
      $this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
      $this->post('login/{carrinho?}', 'Auth\LoginController@login');
      $this->post('logout', 'Auth\LoginController@logout')->name('logout');

      // Registration Routes...
      $this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
      $this->post('register', 'Auth\RegisterController@register');

      // Password Reset Routes...
      $this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
      $this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
      $this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
      $this->post('password/reset', 'Auth\ResetPasswordController@reset');
}

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
