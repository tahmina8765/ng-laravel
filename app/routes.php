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

//Route::get('/', 'PagesController@home');
//Route::get('/about', 'PagesController@about');
Route::get('/', function() {
//    $users = DB::table('users')->find(1);
//    dd($users);
//    $users = User::all();
    $user = new User;
    
    $user->username = 'Mehedi';
    $user->password = Hash::make('123456');
    $user->save();
    
    return User::all();
//    return View::make('hello');
}
);
