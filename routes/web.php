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

use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\MetaController;


Route::get('/', function () {
    $Atividades = (new AtividadeController())->index();
    return view('atividades')->with('Atividades', json_decode($Atividades,true));

});

Route::get('/atividades/{id}', function ($id) {
    $Metas = (new AtividadeController())->mostrar_metas($id);
    return view('atividadesgerais')->with('Metas', json_decode($Metas,true));

});

Route::get('/atividades/meta/{id}', function ($id) {
    $Diarias = (new MetaController())->metas_diarias($id);
    $Semanais = (new MetaController())->metas_semanais($id);
    $Mensais = (new MetaController())->metas_mensais($id);
    return view('meta', ["Diarias"=>json_decode($Diarias,true),"Semanais"=>json_decode($Semanais,true),"Mensais"=>json_decode($Mensais,true)]);
});

Route::get('/atividades/meta/diaria/{id}', function ($id) {
    return view('metadiariasemanal');
});

Route::get('/atividades/meta/semanal/{id}', function ($id) {
    return view('metadiariasemanal');
});

Route::get('/atividade', 'AtividadeController@index');
Route::get('/atividade/criar', 'AtividadeController@create')->name('criaratividade');
Route::get('/atividade/{id}', 'AtividadeController@show');
Route::get('/atividade/{id}/mostrarmetas', 'AtividadeController@mostrar_metas');
Route::post('/atividade/delete/{id}', 'AtividadeController@destroy');
Route::get('/atividade/atualizar/{id}', 'AtividadeController@update');


Route::get('/meta', 'MetaController@index');
Route::get('/meta/criar', 'MetaController@create')->name('criarmeta');
Route::get('/meta/{id}', 'MetaController@show');
Route::post('/meta/delete/{id}', 'MetaController@destroy');
Route::get('/meta/atualizar/{id}', 'MetaController@update');
Route::get('/meta/{id}/diaria', 'MetaController@metas_diarias');

Route::get('/diaria', 'DiariaController@index');
Route::get('/diaria/criar', 'DiariaController@create')->name('criarmetadiaria');
Route::get('/diaria/{id}', 'DiariaController@show');
Route::post('/diaria/delete/{id}', 'DiariaController@destroy');
Route::post('/diaria/atualizar/{id}', 'DiariaController@update');

Route::get('/semanal', 'SemanalController@index');
Route::get('/semanal/criar', 'SemanalController@create')->name('criarmetasemanal');
Route::get('/semanal/{id}', 'SemanalController@show');
Route::post('/semanal/delete/{id}', 'SemanalController@destroy');
Route::post('/semanal/atualizar/{id}', 'SemanalController@update');

Route::get('/mensal', 'MensalController@index');
Route::get('/mensal/criar', 'MensalController@create')->name('criarmetamensal');
Route::get('/mensal/{id}', 'MensalController@show');
Route::post('/mensal/delete/{id}', 'MensalController@destroy');
Route::post('/mensal/atualizar/{id}', 'MensalController@update');

Route::get('/relatorio', 'RelatorioController@index');
Route::get('/relatorio/criar', 'RelatorioController@create');
Route::get('/relatorio/{id}', 'RelatorioController@show');
Route::post('/relatorio/delete/{id}', 'RelatorioController@destroy');
Route::post('/relatorio/atualizar/{id}', 'RelatorioController@update');
