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

Route::get('/tarefas', 'TodoListController@index')->name('listar-tarefas');
Route::get('/tarefas/criar/{id}', 'TodoListController@update');
Route::get('/tarefas/excluir/{id}', 'TodoListController@destroy');
Route::post('/tarefas/criar', 'TodoListController@store')->name('criar-tarefas');
