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

Route::get('cek',function(){
    return view('layouts.admin');
});

Route::get('user',function(){
    return view('layouts.user');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware' => ['auth','role:admin']],function(){
    
Route::resource('mobil','MobilController');
Route::resource('galeri','GaleriController');
Route::resource('customer','CustomerController');
Route::resource('pesanan','PesananController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
