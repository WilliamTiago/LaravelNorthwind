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
Route::get('/home'                              , 'ControllerPrincipal@getViewHome');
Route::get('/home/cadastrofuncionario'          , 'ControllerPrincipal@getViewCadastroFuncionario');
Route::get('/home/cadastroterritorio'           , 'ControllerPrincipal@getViewCadastroTerritorio');
Route::get('/home/cadastroregiao'               , 'ControllerPrincipal@getViewCadastroRegiao');
Route::get('/home/consultafuncionario'          , 'ControllerFuncionario@getSqlPadraoConsultaFuncionario');
Route::get('/home/consultaterritorio'           , 'ControllerTerritorio@getSqlPadraoConsultaTerritorio');
Route::get('/home/consultaregiao'               , 'ControllerRegiao@getSqlPadraoConsultaRegiao');
Route::get('/home/consultafuncionarioterritorio', 'ControllerFuncionario@getSqlConultaFuncionarioTerritorio');

Route::post('/home/consultafuncionario'          , 'ControllerFuncionario@getSqlAdicionaFuncionario');
        