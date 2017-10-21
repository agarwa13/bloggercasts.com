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
Route::get('/home', 'SeriesController@index');

Route::get('/resources','WelcomeController@resources');

/*
 * Log Video Views
 */
Route::post('video-viewed','VideoViewsController@recordVideoViewed');

/*
 * Allow users to see the videos they have already viewed
 */
Route::get('watched','VideoViewsController@displayWatchedVideos');

/*
 * Landing Pages
 */
// Eliminate Spam from Google Analytics
//Route::get('services/eliminate-analytics-spam','LandingPageController@eliminateAnalyticsSpam');
//Route::get('services/eliminate-analytics-spam/thank-you','LandingPageController@purchasedEliminateAnalyticsSpam');

// WordPress Setup
//Route::get('services/free-wordpress-setup','LandingPageController@freeWordPressSetup');
//Route::post('services/free-wordpress-setup/thank-you','LandingPageController@purchasedFreeWordPressSetup');

// Online Business Schedule
//Route::get('meet-nikhil','LandingPageController@meetNikhil');

/*
Search for Affiliates in Kiosk + Affiliate Resource
*/
Route::post('spark/kiosk/affiliates/search','AffiliateController@search');
Route::resource('affiliates','AffiliateController');

/*
Lesson Resource + AMP Pages for Lessons
*/
Route::resource('lessons','LessonController');
Route::get('lessons/amp/{slug}','LessonController@showAMP');

/*
Series Resource + Routes for Editing and Updating the sequence of a series
*/
Route::resource('series','SeriesController');
Route::get('/series/{id}/edit-sequence','SeriesController@editSequence');
Route::put('/series/{id}/update-sequence','SeriesController@updateSequence');

/*
Download Resource
*/
Route::resource('downloads','DownloadController');


/*
 * Sitemap Controller
 */
Route::get('sitemap','SitemapController@index');
Route::get('sitemap/series','SitemapController@series');
Route::get('sitemap/lessons','SitemapController@lessons');
Route::get('sitemap/amp','SitemapController@amp');
Route::get('sitemap/videos','SitemapController@videos');
Route::get('sitemap/general','SitemapController@general');


/*
Less Seen Pages
*/


/*
Routes for Verifying the User when he clicks on the link in the Verification Email.
User Verification setup using: https://github.com/jrean/laravel-user-verification
*/
Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');


/*
Route for when the user clicks on the verification link for the first time
*/
Route::get('user-verified',function(){
	return view('email-verification.user-verified');
});
// $redirectAfterVerification = '/';

/*
Route for when the user clicks on the resend confirmation email button
*/
Route::get('resend-confirmation-email','WelcomeController@resendConfirmationEmail');

/* 
If the User Attempts to see a page that is only visible to verified users (such as the lessons pages), then the user
is redirected to this page. This is thrown by the isVerified Middleware that can be found in the jrean/laravel-user-verification package
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
