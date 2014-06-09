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

Route::get('/test', 'Admin\HomeController@showTest');

Route::get('/class', 'Admin\HomeController@showClass');

Route::get('/model', 'Admin\HomeController@showModel');

Route::get('/', 'Admin\HomeController@showWelcome');