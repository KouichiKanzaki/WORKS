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
    return view('index');
});

Route::get('bulletin', 'BulletinController@index');

// 表示
Route::get('bulletin/view', 'BulletinController@view');

// 削除
Route::get('bulletin/delete', 'BulletinController@delete');
Route::post('bulletin/delete', 'BulletinController@remove');

// 新規作成
Route::get('bulletin/add', 'BulletinController@add');
Route::post('bulletin/add', 'BulletinController@create');

// 更新
Route::get('bulletin/edit', 'BulletinController@edit');
Route::post('bulletin/edit', 'BulletinController@update');
