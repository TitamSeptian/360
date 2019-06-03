<?php
use Illuminate\Support\Facades\Auth;

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


    // destinations for CRUD admin
    Route::get('destination/create', 'DestinationController@create')->name('voyager.destinations.create');
    Route::post('destination/create', 'DestinationController@store')->name('voyager.destinations.store');
    Route::get('destination/{destination}/edit', 'DestinationController@edit')->name('voyager.destinations.edit');
    Route::put('destination/{destination}/edit', 'DestinationController@update')->name('voyager.destinations.update');

});

Route::get('/data', 'CommentsController@CommentDatatable')->name('data');

// Route::get('logout', function () {
//     Auth::logout();
// });
