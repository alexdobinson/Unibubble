<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
|--------------------------------------------------------------------------
| Marketplace Routes
|--------------------------------------------------------------------------
| 
| /marketplace
| /marketplace/books
| /marketplace/books/business
| /marketplace/looking-for/books/business
| 
| /marketplace/looking-for/housing/house-mates
| /marketplace/housing/rent-a-room
| /marketplace/housing/rent-a-house
| 
| /marketplace/jobs/internships
| /marketplace/jobs/term-time
| /marketplace/jobs/graduate
| /marketplace/jobs/sell-your-skills
| 
| /marketplace/post
| 
| pagination appended as query string ?page=2&pp=16
*/


Route::group(array('prefix' => 'marketplace'), function() 
{


	// dd($app);
// 	$params = [];

// 	// Route::get('/', function() {
// 	// });

	Route::get('/', array('as' => 'marketplace', 'uses' => 'MarketplaceController@getListings'));
	Route::get('{param1?}/{param2?}/{param3?}', 'MarketplaceController@getListings');

// 	Route::get('{category}/{sub_category?}', function($category, $sub_category=null) 
// 	{
// 		$this->params['category'] = $category;

// 		if($sub_category) { $params['sub_category'] = $sub_category; }
// 	});

// 	// dd($params);
// 	// $controller = new MarketplaceController();

// 	// return $controller->getListings($params);

});





Route::get('/', function()
{
	// $user = Authentication::with('user')->find(1);
	// dd($user);
	//return View::make('hello');

	// $university = University::with('users')->find(1);
	// dd($university);

	// $page->title = "My Page";

	return View::make('authentication/login');
});


// Login Routes
Route::get('login', array('as' => 'login/show', 'uses' => 'LoginController@showLogin'))->before('guest');
Route::post('login', array('as' => 'login/post', 'uses' => 'LoginController@loginUser'))->before('guest')->before('csrf');

// Logout Routes
Route::get('logout', array('as' => 'logout', 'uses' => 'LogoutController@logoutUser'))->before('auth');