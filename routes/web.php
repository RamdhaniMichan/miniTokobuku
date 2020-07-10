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
/*Route Buku*/

Route::get('/dashboard', 'BukuController@welcome');

Route::get('/buku', 'BukuController@index');

Route::get('/buku/create', 'BukuController@create')->name('buku.create');

Route::post('/buku/store', 'BukuController@store')->name('buku.store');

Route::get('/buku/destroy/{id}', 'BukuController@destroy')->name('buku.destroy');

Route::get('/buku/edit/{id}', 'BukuController@edit')->name('buku.edit');

Route::put('/buku/update/{id}', 'BukuController@update')->name('buku.update');

Route::get('/buku/search', 'BukuController@search')->name('buku.search');


/*Route Category*/

Route::get('/category', 'CategoryController@index');

Route::get('/category/create', 'CategoryController@create')->name('category.create');

Route::post('/category/store', 'CategoryController@store')->name('category.store');

Route::post('/category/destroy', 'CategoryController@destroy')->name('category.destroy');

/*Route Menu Utama*/

Route::get('/', 'HomeController@index');







