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
Route::get('/privacy-policy', 'HomeController@privacypolicy')->name('privacypolicy');
Route::get('/test', 'HomeController@test')->name('test');
Auth::routes();
Route::resource('account', 'ReviewController');
Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::resource('edit-profile', 'EditProfileController');

/*dutch routes*/
Route::get('/dutch', 'DutchHomeController@index')->name('home');
Route::get('/dutch/home', 'DutchHomeController@index')->name('home');
Route::get('/dutch/clickets', 'DutchHomeController@clickets')->name('clickets');
Route::get('/dutch/casperbosma', 'DutchHomeController@casperbosma')->name('casperbosma');