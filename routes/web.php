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

Route::get('/marca/novo', 'MarcaController@create');
Route::get('/cor/listar', 'MarcaController@read');
Route::post('/marca/listar', 'MarcaController@store')->name('registrar_marca');

Route::get('/cor/novo', 'CorController@create');
Route::get('/cor/listar', 'CorController@read');
Route::post('/cor/novo', 'CorController@store')->name('registrar_cor');

Route::get('/veiculo/novo', 'VeiculoController@create');
Route::post('/veiculo/novo', 'VeiculoController@store')->name('registrar_veiculo');