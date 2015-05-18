<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('home', 'HomeController@index');

Route::get('movies', 'MoviesController@index');
Route::get('movies/{title}', 'MoviesController@show');

Route::get('cinemas/{id}/date/{date}', 'CinemasController@movies_on_date');
Route::get('cinemas/{name}', 'CinemasController@show');
Route::get('cinemas', 'CinemasController@index');

Route::get('sessions', 'SessionsController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
