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

Route::get('/',
	['as' => 'home', 'uses' => 'WelcomeController@index']);

Route::get('home',
	['as' => 'home', 'uses' => 'WelcomeController@index']);

Route::post('home',
	['as' => 'home_send_mail', 'uses' => 'MailController@sendMail']);

Route::get('thanks',
	['as' => 'thanks', 'uses' => 'WelcomeController@showThanks']);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
