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

Route::get('/', 'UserController@index');

Route::resource('users', 'UserController');
Route::post('users/{id}/update', 'users@update');
Route::get('users/{id}/delete', 'users@destroy');
Route::post('register', 'UserController@store');
Route::post('login', 'UserController@login');

Route::resource('tasks', 'TaskController');
Route::post('tasks/{id}/update', 'tasks@update');
Route::get('tasks/{id}/delete', 'tasks@destroy');
Route::post('settasks', 'TaskController@store');

