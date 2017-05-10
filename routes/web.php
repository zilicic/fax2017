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
Route::get('/student', '\App\Http\Controllers\StudController@pozdrav');
Route::get('/student1', '\App\Http\Controllers\StudController@uci');
Route::get('/studenti','\App\Http\Controllers\StudController@lista');