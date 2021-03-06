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

/* GET Routes */

Route::get('/', function (){
    return view('index');
})->name('index');

Route::get('/about', function (){
    return view('about');
})->name('about');

Route::get('/support', function (){
    return view('support');
})->name('support');

Route::get('/contact', function (){
    return view('contact');
})->name('contact');

Route::get('/terms', function (){
    return view('terms');
})->name('terms');


/* GET Controller Routes */

Route::get('/job/{id}', 'JobController@jobIndex')->name('displayJob');

Route::get('/employer/{id}', 'JobController@employerProfile')->name('employer');

Route::get('/matches', 'JobController@matchIndex')->name('matches');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/profile/edit', 'ProfileController@editIndex')->name('editProfile');

Route::get('/applications', 'ApplicationController@indexApplications')->name('applications');

Route::get('/resume', 'ResumeController@viewResume')->name('resume');

Route::get('/application/delete/{id}', 'ApplicationController@indexDelete')->name('displayDeleteApplication');


/* POST Controller Routes */

Route::post('/enquire', 'ContactController@send')->name('enquire');

Route::post('/job/apply', 'ApplicationController@apply')->name('apply');

Route::post('/profile/delete', 'ProfileController@delete')->name('delete');

Route::post('/profile/update', 'ProfileController@updateProfile')->name('updateProfile');

Route::post('/resume/upload', 'ResumeController@uploadResume')->name('uploadResume');

Route::post('/resume/delete', 'ResumeController@deleteResume')->name('deleteResume');

Route::post('/application/delete', 'ApplicationController@delete')->name('deleteApplication');

Route::post('/profile/notifications/update', 'ProfileController@updateNotificationSettings')->name('updateNotificationSettings');


/* Authentication Routes */

Auth::routes();


/* API Routes */

/* Return currently authenticated user. */
Route::get('/api/user/token/{token}', 'APIController@getUser')->name('getUser');

/* Return jobs by filter. */
Route::get('/api/jobs/state/{state}/hours/{hours}/term/{term}/rate/{rate}/salary/{salary}/token/{token}', 'APIController@getJobs')->name('getJobs');

/* Return jobs by employer. */
Route::get('/api/jobs/employer/{employerid}/token/{token}', 'APIController@getJobsByEmployer')->name('getJobsByEmployer');

/* Return single job by ID. */
Route::get('/api/job/{id}/token/{token}', 'APIController@getJob')->name('getJob');
