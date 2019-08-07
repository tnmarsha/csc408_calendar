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
Route::get('/users/{id}/attendees','ApiUserController@Attendees');
Route::resource('/users','ApiUserController');

Route::get('/meetings/{id}/attendees','ApiMeetingController@Attendees');
Route::resource('/meetings','ApiMeetingController');



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//////////////////////////////