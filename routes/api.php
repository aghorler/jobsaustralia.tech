<?php

use Illuminate\Http\Request;
use App\Job;
use App\User;


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

Route::get('/jobs', function (){
	return Job::all();
});

Route::get('/jobs/{state?}', function (){
	return Job::all();
});

Route::get('/jobs/by', function (){
	$id = Auth::user()->id;
});

Route::get('/users', function (){
	return User::all();
});
