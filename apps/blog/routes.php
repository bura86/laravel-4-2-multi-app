<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/test', 'Blog\HomeController@showTest');

Route::get('/class', 'Blog\HomeController@showClass');

Route::get('/model', 'Blog\HomeController@showModel');

Route::get('/', 'Blog\HomeController@showWelcome');