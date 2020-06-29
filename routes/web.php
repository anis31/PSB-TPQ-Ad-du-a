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

Route::get('/','SitusController@home');
Route::get('/tentang','SitusController@tentang');
Route::get('/pendaftaran','SitusController@pendaftaran');
Route::post('/daftar','SitusController@daftar');
Route::get('/pesan_telah_daftar','SitusController@pesan_telah_daftar');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','DashboardController@index');
    Route::get('/kelompok','DashboardController@kelompok');
    Route::get('/daftar','DashboardController@daftar');
    Route::get('/psb/{id}/profil','DashboardController@profil');
    Route::get('/psb/wawancara','DashboardController@wawancara');
    Route::post('/psb/tambah','DashboardController@tambah');

    Route::post('/psb/insert_wawancara','PsbController@create');
    
    Route::get('/santri','SantriController@index');
    Route::post('/santri/tambah','SantriController@tambah');
    Route::get('/santri/{id}/edit', 'SantriController@edit');
    Route::post('/santri/{id}/update','SantriController@update');
    Route::get('/santri/{id}/delete', 'SantriController@delete');
    Route::get('/santri/{id}/profil','SantriController@profil');


    // Route GURU
    Route::get('/guru','GuruController@index');
    Route::post('/guru/tambah','GuruController@tambah');
});
    