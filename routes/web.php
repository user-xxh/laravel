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