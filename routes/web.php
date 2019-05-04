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
    return view('welcome');
});

Route::get('/atividade', 'AtividadeController@index');
Route::get('/atividade/criar', 'AtividadeController@create');
Route::get('/meta', 'MetaController@index');
Route::get('/meta/criar', 'MetaController@create');

Route::get('/meta', 'MetaController@index');
Route::get('/meta/criar', 'MetaController@create');
Route::get('/meta', 'MetaController@index');
Route::get('/meta/criar', 'MetaController@create');

Route::get('/diaria', 'DiariaController@index');
Route::get('/diaria/criar', 'DiariaController@create');
Route::get('/diaria', 'DiariaController@index');
Route::get('/diaria/criar', 'DiariaController@create');

Route::get('/semanal', 'SemanalController@index');
Route::get('/semanal/criar', 'SemanalController@create');
Route::get('/semanal', 'SemanalController@index');
Route::get('/semanal/criar', 'SemanalController@create');

Route::get('/mensal', 'MensalController@index');
Route::get('/mensal/criar', 'MensalController@create');
Route::get('/mensal', 'MensalController@index');
Route::get('/mensal/criar', 'MensalController@create');
