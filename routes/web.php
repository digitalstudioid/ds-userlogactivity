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

//REFERENSI --> https://itsolutionstuff.com/post/custom-user-log-activity-in-laravel-5-app-exampleexample.html

Route::get('/', function () {
    return view('welcome');
});

Route::get('add-to-log', 'HomeController@myTestAddToLog');
Route::get('logActivity', 'HomeController@logActivity');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
