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

// primary
Route::get('/', 'PrimaryControl@index')->name('home');
Route::get('/about', 'PrimaryControl@about')->name('about');
Route::get('/example', 'PrimaryControl@example')->name('example');
Route::get('/tourism', 'TourismControl@index')->name('tourism');
Route::get('/gallery', 'GalleryControl@index')->name('gallery');
Route::get('/login', 'PrimaryControl@login')->name('login');
Route::get('/register', 'PrimaryControl@register')->name('register');
Route::get('/result', 'PrimaryControl@search')->name('result');

// discovery
Route::get('/discovery/{slug}', 'PrimaryControl@discovery');

// destination
Route::get('/tourism/destination/{slug}', 'TourismControl@destination');

// category
Route::get('/tourism/category/{slug}', 'TourismControl@category');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
