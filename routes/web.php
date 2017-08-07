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

Route::get('/', 'NewsDayController@showTop10');
Route::get('/all', 'NewsDayController@showAll');

// Route::get('/assimilate', '\CFratta\GazeOfTheWorld\Gaze@assimilateFeeds');

//Route::group(['prefix' => 'v1'], function ()
//{
//	Route::get('{country}/{days}', [
//		'uses' => 'APIController@getMentions'
//	]);
//	Route::get('{country}', [
//		'uses' => 'APIController@getMentions'
//	]);
//});