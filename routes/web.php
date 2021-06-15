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

Route::get('/veiculo/novo', 'VeiculoController@create');
Route::post('/veiculo/novo', 'VeiculoController@store')->name('registrar_veiculo');
