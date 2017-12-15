<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/insert', 'ApiController@store');

Route::post('/confirmTrip', 'ApiController@confirmTrip');


Route::get('/showTrips', 'ApiController@showTrips');

Route::post('/showSortTrips', 'ApiController@showSortedTrips');


Route::post('/showUserTrips', 'ApiController@showUserTrips');