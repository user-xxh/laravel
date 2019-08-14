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
Route::get('test', 'TestController@test');
Route::get('admin_test', 'admin\TestController@test');
Route::get('add', 'TestController@add');
Route::get('del', 'TestController@del');
Route::get('mod', 'TestController@mod');
Route::get('select', 'TestController@select');
Route::get('admin_test1', 'admin\TestController@test1');
Route::get('admin_test2', 'admin\TestController@test2');
Route::get('form', 'CsrfController@form');
Route::post('csrf', 'CsrfController@csrf');
Route::get('model_test', 'model\Model@test');
Route::post('model_form_add', 'model\Model@model_add');
Route::get('model_add', 'model\Model@add');
Route::get('model_select', 'model\Model@select');
Route::get('model_mod', 'model\Model@mod');
Route::get('model_del', 'model\Model@del');
Route::get('page', 'PageController@page');