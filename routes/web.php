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
// AUTH
Route::get('/', 'AuthController@index')->name('login');
Route::post('login', 'AuthController@login')->name('login-process');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {

    Route::get('/mainpage', function () {
        return view('mainpage');
    })->name('home');

    Route::get('user', 'UserController@index')->name('user');
    Route::get('kokab', 'KokabController@index')->name('kokab');
    Route::get('kecamatan', 'KecamatanController@index')->name('kecamatan');
    Route::get('jenis-korban', 'JenisKorbanController@index')->name('jenis-korban');
    Route::get('korban', 'KorbanController@index')->name('korban');
    Route::get('kebencanaan', 'KebencanaanController@index')->name('kebencanaan');
    Route::get('pemulihan', 'PemulihanController@index')->name('pemulihan');
    Route::get('bantuan', 'BantuanController@index')->name('bantuan');
    Route::get('donatur', 'DonaturController@index')->name('donatur');
    Route::get('pendistribusian', 'PendistribusianController@index')->name('pendistribusian');
    Route::get('laporan', 'LaporanController@index')->name('laporan');

// USER
    Route::get('user/create', 'UserController@create')->name('user-create');
    Route::post('user/store', 'UserController@store')->name('user-store');
    Route::post('user/search', 'UserController@search')->name('user-search');
    Route::post('user/delete/{id}', 'UserController@delete')->name('user-delete');
    Route::post('user/edit/{id}', 'UserController@edit')->name('user-edit');
    Route::post('user/update/{id}', 'UserController@update')->name('user-update');

// KOKAB
    Route::get('kokab/create', 'KokabController@create')->name('kokab-create');
    Route::post('kokab/store', 'KokabController@store')->name('kokab-store');
    Route::post('kokab/search', 'KokabController@search')->name('kokab-search');
    Route::post('kokab/delete/{id}', 'KokabController@delete')->name('kokab-delete');
    Route::post('kokab/edit/{id}', 'KokabController@edit')->name('kokab-edit');
    Route::post('kokab/update/{id}', 'KokabController@update')->name('kokab-update');

// KECAMATAN
    Route::get('kecamatan/create', 'KecamatanController@create')->name('kecamatan-create');
    Route::post('kecamatan/store', 'KecamatanController@store')->name('kecamatan-store');
    Route::post('kecamatan/search', 'KecamatanController@search')->name('kecamatan-search');
    Route::post('kecamatan/delete/{id}', 'KecamatanController@delete')->name('kecamatan-delete');
    Route::post('kecamatan/edit/{id}', 'KecamatanController@edit')->name('kecamatan-edit');
    Route::post('kecamatan/update/{id}', 'KecamatanController@update')->name('kecamatan-update');

// KEBENCANAAN
    Route::get('kebencanaan/create', 'KebencanaanController@create')->name('kebencanaan-create');
    Route::post('kebencanaan/store', 'KebencanaanController@store')->name('kebencanaan-store');
    Route::post('kebencanaan/search', 'KebencanaanController@search')->name('kebencanaan-search');
    Route::post('kebencanaan/delete/{id}', 'KebencanaanController@delete')->name('kebencanaan-delete');
    Route::post('kebencanaan/edit/{id}', 'KebencanaanController@edit')->name('kebencanaan-edit');
    Route::post('kebencanaan/update/{id}', 'KebencanaanController@update')->name('kebencanaan-update');

// KORBAN
    Route::get('korban/create', 'KorbanController@create')->name('korban-create');
    Route::post('korban/store', 'KorbanController@store')->name('korban-store');
    Route::post('korban/search', 'KorbanController@search')->name('korban-search');
    Route::post('korban/delete/{id}', 'KorbanController@delete')->name('korban-delete');
    Route::post('korban/edit/{id}', 'KorbanController@edit')->name('korban-edit');
    Route::post('korban/update/{id}', 'KorbanController@update')->name('korban-update');

// JENIS KORBAN
    Route::get('jenis-korban/create', 'JenisKorbanController@create')->name('jenis-korban-create');
    Route::post('jenis-korban/store', 'JenisKorbanController@store')->name('jenis-korban-store');
    Route::post('jenis-korban/search', 'JenisKorbanController@search')->name('jenis-korban-search');
    Route::post('jenis-korban/delete/{id}', 'JenisKorbanController@delete')->name('jenis-korban-delete');
    Route::post('jenis-korban/edit/{id}', 'JenisKorbanController@edit')->name('jenis-korban-edit');
    Route::post('jenis-korban/update/{id}', 'JenisKorbanController@update')->name('jenis-korban-update');

// PEMULIHAN
    Route::get('pemulihan/create', 'PemulihanController@create')->name('pemulihan-create');
    Route::post('pemulihan/store', 'PemulihanController@store')->name('pemulihan-store');
    Route::post('pemulihan/search', 'PemulihanController@search')->name('pemulihan-search');
    Route::post('pemulihan/delete/{id}', 'PemulihanController@delete')->name('pemulihan-delete');
    Route::post('pemulihan/edit/{id}', 'PemulihanController@edit')->name('pemulihan-edit');
    Route::post('pemulihan/update/{id}', 'PemulihanController@update')->name('pemulihan-update');

// DONATUR
    Route::get('donatur/create', 'DonaturController@create')->name('donatur-create');
    Route::post('donatur/store', 'DonaturController@store')->name('donatur-store');
    Route::post('donatur/search', 'DonaturController@search')->name('donatur-search');
    Route::post('donatur/delete/{id}', 'DonaturController@delete')->name('donatur-delete');
    Route::post('donatur/edit/{id}', 'DonaturController@edit')->name('donatur-edit');
    Route::post('donatur/update/{id}', 'DonaturController@update')->name('donatur-update');

// BANTUAN
    Route::get('bantuan/create', 'BantuanController@create')->name('bantuan-create');
    Route::post('bantuan/store', 'BantuanController@store')->name('bantuan-store');
    Route::post('bantuan/search', 'BantuanController@search')->name('bantuan-search');
    Route::post('bantuan/delete/{id}', 'BantuanController@delete')->name('bantuan-delete');
    Route::post('bantuan/edit/{id}', 'BantuanController@edit')->name('bantuan-edit');
    Route::post('bantuan/update/{id}', 'BantuanController@update')->name('bantuan-update');

// PENDISTRIBUSIAN
    Route::get('pendistribusian/create', 'PendistribusianController@create')->name('pendistribusian-create');
    Route::post('pendistribusian/store', 'PendistribusianController@store')->name('pendistribusian-store');
    Route::post('pendistribusian/search', 'PendistribusianController@search')->name('pendistribusian-search');
    Route::post('pendistribusian/delete/{id}', 'PendistribusianController@delete')->name('pendistribusian-delete');
    Route::post('pendistribusian/edit/{id}', 'PendistribusianController@edit')->name('pendistribusian-edit');
    Route::post('pendistribusian/update/{id}', 'PendistribusianController@update')->name('pendistribusian-update');

// LAPORAN
    Route::get('laporan', 'LaporanController@index')->name('laporan');
    Route::post('laporan/search', 'LaporanController@search')->name('laporan-search');
    Route::post('laporan/cetak', 'LaporanController@print')->name('laporan-print');

// CONTACT US
    Route::get('contact', function(){
        return view('contact');
    })->name('contact');
});
