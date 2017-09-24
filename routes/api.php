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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:api')->group(function () {

	Route::get('/user', function (Request $request) {
	    return $request->user();
	});

	Route::get('/resource', function (Request $request) {
		// Do I need this? I don't want to call it a 'website', so what's a better name? And is this already known due to authentication/authorization?
		return $request->resource();
	});

	Route::get('/post', function (Request $request) {
		// I think I was to go with a better thing than 'post', thinking 'channel' is the right choice. Then everything is a channel. Pagest will also fit in channel, but perhaps having posts and pages as custom 'channel types'
		return $request->post();
	});

	Route::get('/category', function (Request $request) {
		return $request->category();
	});

	Route::get('/tag', function (Request $request) {
		return $request->tag();
	});




});