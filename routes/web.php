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

Route::get('/', 'controlePagina@getHome')->name('/');

Route::get('sobre', 'controlePagina@getSobre')->name('sobre');

Route::get('contato', 'controlePagina@getContato')->name('contato');

Route::resource('user', 'UserController');

Route::resource('emprestimo', 'EmprestimoController');

Route::resource('livro', 'LivroController');

Route::resource('historico', 'HistoricoController');