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

	// $venues = App\Venue::join('events', 'venues.id', '=', 'events.venue_id')
	// 	->get();


	
});

Route::get('register', 'RegisterController@registerView')->name("register.view");

Route::get('login', 'LoginController@loginView')->name("login.view");

Route::get('index', 'ChordController@index')->name("index");

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('events/{city}', 'EventController@view')->name("events.view");

Route::get('event/{event_id}', 'EventController@singleEventView');

Route::get('venues/{city}', 'VenueController@view')->name("venues.view");

Route::get('venue/{venue}', 'FavouriteController@register')->name("venue.favourite");

Route::get('favourites/{venue}', 'FavouriteController@remove')->name("venue.unfavourite");

Route::get('admin-venues', 'AdminController@adminVenuesView')->name("admin-venues.view");

Route::get('venue/{venue}/events', 'EventController@venueView')->name('events.show');

Route::post('venue/{venue}/add-event', 'EventController@store')->name('event.store');

Route::get('interests', 'EventController@viewInterested')->name('user.interests');

Route::get('favourites', 'FavouriteController@viewFavourites')->name('user.favourites');

Route::get('events/{event}/register-interest', 'EventController@registerInterest')->name('event.interest');

Route::get('interests/{event}', 'InterestController@delete')->name("event.uninterest");

Route::get('venue-data', 'VenueController@data')->name('venue.data');