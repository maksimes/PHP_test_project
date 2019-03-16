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

Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function (){
 Route::get('/', 'DashboardController@dashboard')->name('admin.index');
 Route::resource('/banner', 'BannerController', ['as'=>'admin']);
});

Route::get('/', 'BannerController@index');

Route::get('banner/{banner_id}', 'LinkController@index')->name('banner.index');

Route::post('/sendmail/{banner_id}', 'LinkController@send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
