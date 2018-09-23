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

Route::get('register', 'RegisterController@registerView')->name("register.view");

Route::get('login', 'LoginController@loginView')->name("login.view");

Route::get('index', 'ChordController@index')->name("index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
