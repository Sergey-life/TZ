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

Route::get('/', 'EventController@index');

Route::get('/test', 'EventController@highest_bid_price')->name('test');

Route::get('/test1', 'EventController@events_for_which_there_are_no_applications')->name('test1');

Route::get('/test2', 'EventController@events_for_which_more_than_three_applications')->name('test2');

Route::get('/test3', 'EventController@events_for_which_the_most_applications')->name('test3');
