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

Route::get('/login', function() {
	return view('auth.login');
});

// Pelanggaran
Route::resource('pelanggaran', 'PelanggaranDetailController');

Route::resource('perizinans', 'PerizinanController');
Route::put('/perizinans/update_status/{id}', 'PerizinanController@konfirmasi')->name('perizinans.konfirmasi');

Route::resource('kesehatans', 'KesehatanController');

