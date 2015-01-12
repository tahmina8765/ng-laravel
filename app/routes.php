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

Route::get('/', 'PagesController@home');

Route::get('/', array('as' => 'home', function()
{
    return View::make('home');
}));

//Route::get('/users', 'UsersController@index');
//Route::get('/users/{id}', 'UsersController@show');
//https://github.com/rydurham/Sentinel
//Route::resource('users', 'UsersController@index');