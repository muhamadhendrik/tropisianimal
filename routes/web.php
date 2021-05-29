<?php

use Illuminate\Routing\RouteGroup;
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
Route::get('/foo', function () {
    Artisan::call('storage:link');
    return 'udah di tambahin storage:link';
});

Route::get('/clear-cache', function () {
    Artisan::call('config:cache');
    return 'cache udah di hapus';
});

//user
Route::get('/', 'User\UserController@home');
Route::get('/berita', 'User\UserController@berita');
Route::get('/tentang', 'User\UserController@tentang');
Route::get('/galeri', 'User\UserController@galeri');
Route::get('/kontak', 'User\UserController@kontak');
Route::get('/berita/{beritaStr:slug}','User\UserController@show')->name('berita.selengkapnya');

Route::post('/store', 'User\UserController@store')->name('user.kirim');

Auth::routes();

Route::get('master', 'AdminController@index')->middleware('auth')->name('dashboard');

Route::prefix('master/berita')->name('berita.')->middleware('auth')->group(function () {
    Route::get('', 'BeritaController@index')->name('index');
    Route::get('create', 'BeritaController@create')->name('create');
    Route::post('store', 'BeritaController@store')->name('store');
    Route::get('{berita:slug}/edit', 'BeritaController@edit')->name('edit');
    Route::patch('{berita:slug}/update', 'BeritaController@update')->name('update');
    Route::delete('{berita:slug}/delete', 'BeritaController@destroy')->name('hapus');
    Route::get('{berita:slug}/show','BeritaController@show')->name('show');
});

Route::prefix('master/tentang')->name('tentang.')->middleware('auth')->group(function () {
    Route::get('', 'TentangController@index')->name('index');
    Route::get('create', 'TentangController@create')->name('create');
    Route::post('store', 'TentangController@store')->name('store');
    Route::get('{tentang}/edit', 'TentangController@edit')->name('edit');
    Route::patch('{tentang}/update', 'TentangController@update')->name('update');
    Route::delete('{tentang}/delete', 'TentangController@destroy')->name('hapus');
    Route::get('{tentang}/show','TentangController@show')->name('show');
});

Route::prefix('master/galeri')->name('galeri.')->middleware('auth')->group(function () {
    Route::get('', 'GaleriController@index')->name('index');
    Route::get('create', 'GaleriController@create')->name('create');
    Route::post('store', 'GaleriController@store')->name('store');
    Route::get('{galeri}/edit', 'GaleriController@edit')->name('edit');
    Route::patch('{galeri}/update', 'GaleriController@update')->name('update');
    Route::delete('{galeri}/delete', 'GaleriController@destroy')->name('hapus');
});

Route::prefix('master/kontak')->name('kontak.')->middleware('auth')->group(function () {
    Route::get('', 'KontakController@index')->name('index');
    Route::delete('{kontak}/delete', 'KontakController@destroy')->name('hapus');
});

