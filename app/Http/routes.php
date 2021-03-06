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

Route::get('/', 'WelcomeController@index');

Route::resource('about', 'AboutController', ['only' => ['index']]);

Route::get('contact', [
	'as'	=>	'contact',
	'uses'	=>	'ContactController@create'
]);

Route::post('contact', [
	'as'	=>	'contact_store',
	'uses'	=>	'ContactController@store'
]);

Route::get('login', [
	'as' => 'login',
	'uses' => 'Auth\AuthController@getLogin'
]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);


Route::resource('discounts', 'DiscountsController', ['only' => 'index']);
