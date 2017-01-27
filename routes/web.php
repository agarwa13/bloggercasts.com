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
Search for Affiliates in Kiosk
*/
Route::post('spark/kiosk/affiliates/search','AffiliateController@search');


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
