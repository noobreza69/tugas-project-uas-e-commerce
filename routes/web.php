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
    return view('welcome');
});
Auth::routes();

Route::auth();
Route::group(['middleware'=>'auth'],function(){

Route::get('/dashboard','AdminController@dashboard')->name('dashboard');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ProdukController@index')->name('index');
Route::get('produk/add','ProdukController@create');
Route::post('produk/add','ProdukController@store');
Route::get('/search','ProdukController@search')->name('search');

Route::get('produk/{id}/edit','ProdukController@edit');
Route::patch('produk/{id}/edit','ProdukController@update');
Route::delete('produk/{id}/delete','ProdukController@destroy');


Route::get('pegawai','PegawaiController@index')->name('pegawai');
Route::get('pegawai/add','PegawaiController@create');
Route::post('pegawai/add','PegawaiController@store');
Route::get('pegawai/{id}/edit','PegawaiController@edit');
Route::patch('pegawai/{id}/edit','PegawaiController@update');
Route::delete('pegawai/{id}/delete','PegawaiController@destroy');
Route::get('/cari','PegawaiController@search')->name('cari');

Route::get('customer','CustController@index')->name('customer');
Route::get('customer/add','CustController@create');
Route::post('customer/add','CustController@store');
Route::get('customer/{id}/edit','CustController@edit');
Route::patch('customer/{id}/edit','CustController@update');
Route::delete('customer/{id}/delete','CustController@destroy');

Route::get('menu','MenuController@index')->name('menu');
Route::post('menu','MenuController@index')->name('menu');


});