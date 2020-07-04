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

Route::get('/', 'PertanyaanController@index');
Route::get('/pertanyaan', 'PertanyaanController@create');

Route::post('/pertanyaan1', 'PertanyaanController@store');

Route::get('/jawaban/{id}', 'JawabanController@index');

Route::get('/answer/{id}', 'JawabanController@answer');
//Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@store');