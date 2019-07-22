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

Route::get('/', 'NodeListController@index');
Route::get('/post', 'NodePostController@index');

Auth::routes();

//ログアウト
Route::get('/logout', 'Auth\LoginController@logout');

//コールバック用
Route::get('/login/{social}', 'Auth\LoginController@socialLogin')->where('social', 'facebook|twitter');
Route::get('/login/{social}/callback', 'Auth\LoginController@handleProviderCallback')->where('social', 'facebook|twitter');
