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

Route::get('/', 'WelcomeController@index');
Route::get('/login', 'WelcomeController@index')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/judgeLogin', 'TabulateController@judgeLogin');

Route::get('/judgeLogout', 'TabulateController@judgeLogout');

Route::middleware('checkCode')->group(function () {
    Route::get('/tabulation', 'TabulateController@index');
});

Route::get('/addEvent', 'EventController@addEvent');

Route::get('/addScore', 'ScoreController@addScore');