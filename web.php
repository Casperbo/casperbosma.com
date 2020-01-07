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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clickets', 'HomeController@clickets')->name('clickets');

Route::get('/casperbosma', 'HomeController@casperbosma')->name('casperbosma');

Route::get('/test', 'HomeController@test')->name('test');

Auth::routes();

/*Route::get('/account', 'AccountController@account')->name('account');*/

Route::resource('account', 'ReviewController');