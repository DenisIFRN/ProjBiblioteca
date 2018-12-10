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

Route::resource('registro', 'RegistroController');

Route::get('/', 'LoginController@loginForm')->name('/');

Route::post('/login', 'LoginController@login')->name('login');

Route::post('/logout', 'LoginController@logout')->name('logout');

Route::get('/home', 'PaginaController@getHome')->name('/home');

Route::get('sobre', 'PaginaController@getSobre')->name('sobre');

Route::get('contato', 'PaginaController@getContato')->name('contato');

Route::resource('user', 'UserController');

Route::resource('emprestimo', 'EmprestimoController');

Route::resource('livro', 'LivroController');

Route::resource('historico', 'HistoricoController');