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

Route::get('/login', '\PhpSoft\Users\Controllers\UserController@getViewLogin', ['name' => 'Taylor']);
Route::get('/register', '\PhpSoft\Users\Controllers\UserController@getViewRegister');