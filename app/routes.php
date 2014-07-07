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
*/

/*
 * Home route.
 */
Route::get('/', function()
{	
	$events = DB::table('events')->get();

	//return $events;
	return View::make('home');
});

/*
 * Events route.
 */
Route::get('/events', function()
{	
	return View::make('events');
});

/*
 * Menu route.
 */
Route::get('/menu', function()
{	
	return View::make('menu');
});

/*
 * About route.
 */
Route::get('/about', function()
{	
	return View::make('about');
});

/*
 * Contact route.
 */
Route::get('/contact', function()
{	
	return View::make('contact');
});