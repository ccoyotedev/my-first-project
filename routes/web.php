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

Route::get('tinker', function () {
	return App\Venue::where('id',1)->first()->events;
});

Route::get('register', 'RegisterController@registerView')->name("register.view");

Route::get('login', 'LoginController@loginView')->name("login.view");

Route::get('index', 'ChordController@index')->name("index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/venues', 'ChordController@venuesView')->name("venues.view");

Route::get('/admin-venues', 'AdminController@adminVenuesView')->name("admin-venues.view");

Route::get('/admin-venues/add-event/{venue}', 'AdminController@addEventForm')->name('admin.addevent');

Route::post('/admin-venues/add-event', 'EventController@store')->name('event.store');

Route::get('/events/{venue}', 'EventController@view')->name('events.show');