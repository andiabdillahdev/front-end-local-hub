<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\admin\master_data\kategoriController;
use App\Http\Controllers\admin\master_data\tagController;
use App\Http\Controllers\admin\service\wisataController;
use App\Http\Controllers\page\pageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Homepage
Route::get('/','App\Http\Controllers\page\pageController@index')->name('page.index');
Route::get('/penginapan','App\Http\Controllers\page\pageController@penginapan')->name('page.penginapan');
Route::get('/transportasi','App\Http\Controllers\page\pageController@transportasi')->name('page.transportasi');
// 

Route::get('/dashboard','App\Http\Controllers\dashboardController@index')->name('admin.dashboard.index');


// Kategori
Route::get('/master-data/kategori','App\Http\Controllers\admin\master_data\kategoriController@index')->name('admin.master_data.kategori.index');
Route::get('/master-data/kategori/create','App\Http\Controllers\admin\master_data\kategoriController@create')->name('admin.master_data.kategori.create');

// Sub Kategori
Route::get('/master-data/sub-kategori','App\Http\Controllers\admin\master_data\subKategoriController@index')->name('admin.master_data.kategori.index');
Route::get('/master-data/sub-kategori/create','App\Http\Controllers\admin\master_data\subKategoriController@create')->name('admin.master_data.kategori.create');

// Tag
Route::get('/master-data/tag','App\Http\Controllers\admin\master_data\tagController@index')->name('admin.master_data.tag.index');
Route::get('/master-data/tag/create','App\Http\Controllers\admin\master_data\tagController@create')->name('admin.master_data.tag.create');

// Kategori Transport
Route::get('/master-data/kategori-transport','App\Http\Controllers\admin\master_data\kategoriTransportController@index')->name('admin.master_data.kategoriTransport.index');
Route::get('/master-data/kategori-transport/create','App\Http\Controllers\admin\master_data\kategoriTransportController@create')->name('admin.master_data.kategoriTransport.create');

// Wisata
Route::get('/service-layanan/wisata','App\Http\Controllers\admin\service\wisataController@index')->name('admin.service.wisata.index');
Route::get('/service-layanan/wisata/create','App\Http\Controllers\admin\service\wisataController@create')->name('admin.service.wisata.create');