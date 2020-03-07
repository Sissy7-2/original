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


Route::get('/', 'TopController@add');

Route::get('profile', 'ProfileController@add');

Route::get('about', 'AboutController@add');

Route::get('details', 'DetailsController@add');

Auth::routes();
Route::get('contact', 'ContactsController@index');
Route::post('contact/confirm', 'ContactsController@confirm');
Route::post('contact/complete', 'ContactsController@complete');


Route::group(['prefix' => 'admin'], function() {
Route::get('movie/create', 'Admin\MovieController@add')->middleware('auth');

    
});

// Route::get('/home', 'HomeController@index')->name('home');
