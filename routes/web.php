<?php

use Illuminate\Support\Facades\Route;

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

/* 
| if you want to setup billing on your app. pass 'billing' middleware.
| ['middleware' => 'verify.shopify', 'billable']
*/


/* 
|| Your app all routes are work in below group. make sure use 'verify.shopify' middleware.
*/
Route::group(['middleware' => 'verify.shopify'], function () {
	
	Route::get('/', function () {
		return view('welcome'); 
	})->name('home');
	
});

/* 
|| Your app proxy data will be comming from below controller. make sure use 'auth.proxy' middleware.
*/
Route::get('/proxy', 'AppProxyController@index')->middleware('auth.proxy');
