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
    return view('/welcome');
});
//pertanyaan
Route::get('/pertanyaan', 'PertanyaanController@index'); //menampilkan home
Route::get('/create', 'PertanyaanController@create'); //menampilkan halaman form
Route::post('/pertanyaan', 'PertanyaanController@store'); //menampilkan data 
Route::get('/pertanyaan/{id}', 'PertanyaanController@answ'); //menampilkan form jawab
Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit'); //menampilkan form jawab 
Route::put('/pertanyaan/{id}', 'PertanyaanController@update'); //update form
Route::delete('/pertanyaan/{id}', 'PertanyaanController@destroy'); //mengapus

//penjawab
Route::get('/make', 'PenjawabController@make'); //menampilkan halaman form
Route::get('/penjawab', 'PenjawabController@indeks'); //menampilkan jawaban
Route::post('/penjawab', 'PenjawabController@storej'); //menampilkan data 
