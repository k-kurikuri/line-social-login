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

Route::get('login', '\App\Http\Controllers\LineLoginController@index');
Route::get('login/line', '\App\Http\Controllers\LineLoginController@redirectToProvider');
Route::get('login/line/callback', '\App\Http\Controllers\LineLoginController@callBack');
