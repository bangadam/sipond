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
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

//Pelanggaran
Route::get('/pelanggaran', 'PelanggaranController@index');
Route::get('/pelanggaran/tambah', 'PelanggaranController@tambah');
Route::post('/pelanggaran/store', 'PelanggaranController@store');
Route::get('/pelanggaran/edit/{id}', 'PelanggaranController@edit');
Route::put('/pelanggaran/update/{id}', 'PelanggaranController@update');
Route::get('/pelanggaran/hapus/{id}', 'PelanggaranController@hapus');
