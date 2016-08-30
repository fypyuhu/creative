<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PageController@getAbout')->name('about');
Route::get('/services', 'PageController@getServices')->name('services');
Route::get('/portfolio', 'PageController@getPortfolio')->name('portfolio');
Route::get('/contact', 'PageController@getContact')->name('contact');
Route::post('/contact', 'ContactController@postContact')->name('contact.post');

Route::get('/shop', 'ShopController@getIndex')->name('shop');


Route::get('/admin/contact', 'Admin\ContactController@getIndex')->name('admin.contact');
Route::get('/admin/contact/{id}/delete', 'Admin\ContactController@getDelete')->name('admin.contact.delete');

Route::get('/admin/shop', 'Admin\ShopController@getIndex')->name('admin.shop');

