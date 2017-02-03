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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/locais_coleta', 'LocaisColetaController@index');

Route::get('/redirect', 'SocialAuthController@redirect');

Route::get('/callback', 'SocialAuthController@callback');

Route::get('/historico', 'HistoricoController@index');

// Rotas Locais
Route::post('/api/local/create', 'Api\LocaisController@create');

Route::post('/api/local/retrieve', 'Api\LocaisController@retrieve');

Route::post('/api/local/update', 'Api\LocaisController@update');

Route::post('/api/local/delete', 'Api\LocaisController@delete');

// Rotas Pontos
Route::post('/api/ponto/create', 'Api\PontosController@create');

Route::post('/api/ponto/retrieve', 'Api\PontosController@retrieve');

Route::post('/api/ponto/update', 'Api\PontosController@update');

Route::post('/api/ponto/delete', 'Api\PontosController@delete');