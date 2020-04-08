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

Route::get('/','HomeController@index')->middleware('web');

Route::get('/home','HomeController@index')->middleware('web');

Route::get('/user/login','UserController@login')->middleware('web');

Route::post('/user/login','UserController@login')->middleware('web');

Route::get('/user/logout','UserController@logout')->middleware('web');
