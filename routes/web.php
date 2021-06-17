<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/marca/novo', 'MarcaController@create')->name('layout_cadastro');
Route::get('/marca/listar', 'MarcaController@read');
Route::post('/marca/novo', 'MarcaController@store')->name('registrar_marca');
Route::get('/marca/edit/{id}', 'MarcaController@edit')->name('editarm');
Route::post('/marca/edit/{id}', 'MarcaController@update')->name('editar_marca');
Route::get('/marca/listar/{id}', 'MarcaController@destroy')->name('excluir_marca');

Route::get('/cor/novo', 'CorController@create');
Route::get('/cor/listar', 'CorController@read');
Route::post('/cor/novo', 'CorController@store')->name('registrar_cor');
Route::get('/cor/edit/{id}', 'CorController@edit')->name('editarc');
Route::post('/cor/edit/{id}', 'CorController@update')->name('editar_cor');
Route::get('/cor/listar/{id}', 'CorController@destroy')->name('excluir_cor');

// rotas pra usuario
Route::get('/usuario/novo', 'UsuarioController@create');
Route::get('/usuario/listar', 'UsuarioController@read');
Route::post('/usuario/novo', 'UsuarioController@store')->name('registrar_usuario');
Route::get('/usuario/edit/{id}', 'UsuarioController@edit')->name('editaru');
Route::post('/usuario/edit/{id}', 'UsuarioController@update')->name('editar_usuario');
Route::get('/usuario/delete/{id}', 'UsuarioController@destroy')->name('excluir_usuario');

Route::get('/veiculo/novo', 'VeiculoController@create')->name('layout_cadastro');
Route::get('/veiculo/listar', 'VeiculoController@read');
Route::post('/veiculo/novo', 'VeiculoController@store')->name('registrar_veiculo');
Route::get('/veiculo/edit/{id}', 'VeiculoController@edit')->name('editarv');
Route::post('/veiculo/edit/{id}', 'VeiculoController@update')->name('editar_veiculo');
Route::get('/veiculo/delete/{id}', 'VeiculoController@destroy')->name('excluir_veiculo');
