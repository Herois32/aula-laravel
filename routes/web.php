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
Route::get('/painel/produtos/testes', 'Painel\ProdutoController@testes');
Route::resource('/painel/produtos', 'Painel\ProdutoController');


Route::group(['namespace' => 'Site'], function(){

Route::get('/categoria/{id?}', 'SiteController@categoria');

Route::get('/contato', 'SiteController@contato');

Route::get('/', 'SiteController@index');

});



Route::group(['namespace' => 'Painel'], function(){

Route::get('/painel', 'PainelController@index');
Route::get('/painel/contato', 'PainelController@contato');

});

/*Route::get('/', function () {
    return view('welcome');
});*/
