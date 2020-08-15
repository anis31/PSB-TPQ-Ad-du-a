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

//Route SITUS Landing Page
Route::get('/','SitusController@home');
Route::get('/tentang','SitusController@tentang');
Route::get('/pendaftaran','SitusController@pendaftaran');
Route::get('/pendaftaran-tutup','SitusController@pendaftaranTutup');
Route::post('/daftar','SitusController@daftar');
Route::get('/pesan_telah_daftar','SitusController@pesan_telah_daftar');
Route::get('/pengumuman','SitusController@pengumuman');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => 'auth'],function(){
    // Route DASHBOARD
    Route::get('/dashboard','DashboardController@index');
    Route::get('/kelompok','DashboardController@kelompok');
    Route::get('/daftar','DashboardController@daftar');
    Route::get('/psb/{id}/profil','DashboardController@profil');
    Route::get('/psb/wawancara','DashboardController@wawancara');
    
    // Route PSB
    Route::get('/psb/insert_wawancara','PsbController@index');
    Route::post('/psb/insert_wawancara','PsbController@tambah');
    Route::get('/psb/{id}/detail_wawancara','PsbController@detail');
    Route::get('/psb/{id}/edit','PsbController@edit');
    Route::post('/psb/{id}/update','PsbController@update');
    Route::get('/psb/{id}/tolak','PsbController@tolak');
    Route::post('/psb/{id}/terima','PsbController@terima');
    Route::get('/psb/pengumuman','PsbController@pengumuman');
    
    // Route SANTRI
    Route::get('/santri','SantriController@index');
    Route::post('/santri/tambah','SantriController@tambah');
    Route::get('/santri/{id}/edit', 'SantriController@edit');
    Route::post('/santri/{id}/update','SantriController@update');
    Route::get('/santri/{id}/delete', 'SantriController@delete');
    Route::get('/santri/{id}/profil','SantriController@profil');


    // Route GURU
    Route::get('/guru','GuruController@index');
    Route::post('/guru/tambah','GuruController@tambah');
    
    // Route Halaqoh
    Route::post('/halaqoh/simpan-santri','HalaqohController@simpanSantri');
    Route::post('/halaqoh/simpan','HalaqohController@simpanHalaqoh');
    
    // Route Setting Aplikasi
    Route::post('/app/edit-pendaftaran','AppController@editPendaftaran');

});
    