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
	$today = date('Y-m-d');
	$venue_ids = App\Event::where('date', $today)->select('venue_id')->get();
	$venues = [];
	foreach($venue_ids as $venue_id) {
		$venues[] = App\Venue::where('id', $venue_id->venue_id)->first();
	}
	return App\Venue::all();


	
});

Route::get('register', 'RegisterController@registerView')->name("register.view");

Route::get('login', 'LoginController@loginView')->name("login.view");

Route::get('index', 'ChordController@index')->name("index");

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');

Route::get('venues', 'ChordController@venuesView')->name("venues.view");

Route::get('venues/{city}', 'VenueController@view')->name("venues.city");

Route::get('venue/{venue}', 'FavouriteController@register')->name("venue.favourite");

Route::get('favourites/{venue}', 'FavouriteController@remove')->name("venue.unfavourite");

Route::get('admin-venues', 'AdminController@adminVenuesView')->name("admin-venues.view");

Route::get('venue/{venue}/events', 'EventController@view')->name('events.show');

Route::get('venue/{venue}/events/create', 'AdminController@addEventForm')->name('admin.addevent');

Route::post('venue/{venue}/add-event', 'EventController@store')->name('event.store');

Route::get('interests', 'EventController@viewInterested')->name('user.interests');

Route::get('favourites', 'FavouriteController@viewFavourites')->name('user.favourites');

Route::get('venue/{venue}/events/{event}/register-interest', 'EventController@registerInterest')->name('event.interest');

Route::get('venue-data', 'VenueController@data')->name('venue.data');