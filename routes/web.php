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
Route::get('/contrato/{id}', function ($id) {
    return "Contrato = $id";
});
Route::post('/contrato', function () {
    var_dump($_POST);
    return "Contrato: POST";
});
Route::put('/contrato', function () {
    return "Contrato: Put";
});

Route::get('/admin/cursos',
    ['as' => 'admin.cursos', 'uses' => 'Admin/CursosController@index']);

Route::get('/admin/cursos/adicionar',[
    'as' => 'admin.cursos.adicionar', 'uses' => 'Admin/CursosController@adicionar']);

Route::post('/admin/cursos/salvar',
    ['as' => 'admin.cursos.salvar', 'uses' => 'Admin/CursosController@salvar']);

Route::get('/admin/cursos/editar/{id}',
    ['as' => 'admin.cursos.editar', 'uses' => 'Admin/CursosController@editar']);

Route::put('/admin/cursos/atualizar/{id}',
    ['as' => 'admin.cursos.atualizar', 'uses' => 'Admin/CursosController@atualizar']);

Route::get('/admin/cursos/deletar/{id}',
    ['as' => 'admin.cursos.deletar', 'uses' => 'Admin/CursosController@deletar']);
