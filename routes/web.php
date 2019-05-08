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
    return view('atividade');
});

Route::get('/atividade', 'AtividadeController@index');
Route::get('/atividade/criar', 'AtividadeController@create')->name('criaratividade');
Route::get('/atividade/{id}', 'AtividadeController@show');
Route::post('/atividade/delete/{id}', 'AtividadeController@destroy');


Route::get('/meta', 'MetaController@index');
Route::get('/meta/criar', 'MetaController@create');
Route::get('/meta/{id}', 'MetaController@index');
Route::post('/meta/delete/{id}', 'MetaController@estroy');

Route::get('/diaria', 'DiariaController@index');
Route::get('/diaria/criar', 'DiariaController@create');
Route::get('/diaria/{id}', 'DiariaController@index');
Route::post('/diaria/delete/{id}', 'DiariaController@destroy');

Route::get('/semanal', 'SemanalController@index');
Route::get('/semanal/criar', 'SemanalController@create');
Route::get('/semanal/{id}', 'SemanalController@index');
Route::post('/semanal/delete/{id}', 'SemanalController@destroy');

Route::get('/mensal', 'MensalController@index');
Route::get('/mensal/criar', 'MensalController@create');
Route::get('/mensal/delete/{id}', 'MensalController@index');
Route::post('/mensal/delete/{id}', 'MensalController@destroy');
