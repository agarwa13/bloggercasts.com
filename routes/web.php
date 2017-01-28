<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@show');

Route::get('/home', 'HomeController@show');


/*
Search for Affiliates in Kiosk + Affiliate Resource
*/
Route::post('spark/kiosk/affiliates/search','AffiliateController@search');
Route::resource('affiliates','AffiliateController');

/*
Lesson Resource
*/
Route::resource('lessons','LessonController');

/*
Series Resource
*/
Route::resource('series','SeriesController');


/*
Download Resource
*/
Route::resource('downloads','DownloadController');

/*
Less Seen Pages
*/

/* 
If the User Attempts to see a page that is only visible to 
verified users (such as the lessons pages), then the user
is redirected to this page. This is thrown by the isVerified Middleware
that can be found in the jrean/laravel-user-verification package
*/
Route::get('user-not-verified',function(){
	return view('email-verification.user-not-verified');
});


/*
Grown Up Stuff
*/
Route::get('dmca-policy',function(){
	return view('grown-up-stuff.dmca-policy');
});

Route::get('privacy',function(){
	return view('grown-up-stuff.privacy');
});

Route::get('affiliate-disclaimer',function(){
	return view('grown-up-stuff.affiliate-disclaimer');
});

Route::get('terms',function(){
	return view('grown-up-stuff.terms');
});
