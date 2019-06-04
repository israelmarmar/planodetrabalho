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
use App\Http\Controllers\DiariaController;
use App\Http\Controllers\SemanalController;
use App\Http\Controllers\IncidenteController;
use App\Http\Controllers\PlanodetrabalhoController;


Route::get('/', function () {
    $Planodetrabalho = (new PlanodetrabalhoController())->index();
    return view('index',['Planodetrabalho'=>json_decode($Planodetrabalho,true)]);

});


Route::get('/plano/{id}', function ($id) {
    $Plano = (new PlanodetrabalhoController())->show($id);
    $Atividades = (new PlanodetrabalhoController())->mostrar_atividades($id);
    $Metas = (new PlanodetrabalhoController())->mostrar_metas($id);
    return view('plano',['Plano'=>json_decode($Plano,true),'Atividades'=>json_decode($Atividades,true),'Metas'=>json_decode($Metas,true)]);
});


Route::get('/atividades/{id}', function ($id) {
    $Atividade = (new AtividadeController())->show($id);
    return view('atividadesgerais',['Atividade'=>json_decode($Atividade,true)]);

});

Route::get('/atividades/{id}/incidente', function ($id) {
    $Metas = (new AtividadeController())->mostrar_incidentes($id);
    return view('incidente',['Incidentes'=>json_decode($Metas,true)]);

});

Route::get('/metas/{id}', function ($id) {
    $Metas = (new MetaController())->show($id);
    $Diarias = (new MetaController())->metas_diarias($id);
    $Semanais = (new MetaController())->metas_semanais($id);
    $Mensais = (new MetaController())->metas_mensais($id);
    return view('meta', ["Metas"=>json_decode($Metas,true),"Diarias"=>json_decode($Diarias,true),"Semanais"=>json_decode($Semanais,true),"Mensais"=>json_decode($Mensais,true)]);
});

Route::get('/atividades/meta/diaria/{id}', function ($id) {
    $Diarias = (new DiariaController())->show($id);
    return view('metadiariasemanal',["Meta"=>json_decode($Diarias,true)]);
});

Route::get('/atividades/meta/diaria/{id}/manutencao', function ($id) {
    $Diarias = (new DiariaController())->show($id);
    $Manutencoes = $Diarias["Manutencao"];
    return view('manutencao',["id"=>$id]);
});

Route::get('/atividades/meta/semanal/{id}/manutencao', function ($id) {
    $Semanal = (new SemanalController())->show($id);
    $Manutencoes = $Semanal["Manutencao"];
    return view('manutencao',["id"=>$id]);
});


Route::get('/atividades/{id}/relatoriosemanal', function ($id) {
    return view('relatoriosemanal');
});

Route::get('/atividades/{id}/relatoriomensal', function ($id) {
    $Semanais = (new SemanalController())->show($id);
    return view('relatoriomensal');
});


Route::get('/planodetrabalho', 'PlanodetrabalhoController@index');
Route::get('/planodetrabalho/criar', 'PlanodetrabalhoController@create')->name('criarplano');
Route::get('/planodetrabalho/{id}', 'PlanodetrabalhoController@show');
Route::get('/planodetrabalho/{id}/mostrarmetas', 'PlanodetrabalhoController@mostrar_metas');
Route::post('/planodetrabalho/delete/{id}', 'PlanodetrabalhoController@destroy');
Route::get('/planodetrabalho/atualizar/{id}', 'PlanodetrabalhoController@update');


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


Route::get('/incidente', 'IncidenteController@index');
Route::get('/incidente/criar', 'IncidenteController@create')->name('criarincidente');
