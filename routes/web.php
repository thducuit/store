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

Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('login');
});

Route::get('/search', 'HomeController@search');

//Auth::routes();

Route::prefix('admin')->group(function() {
	//dashboard
	Route::get('dashboard', function() {
		return view('admin.dashboard.index');
	});
	//store
	Route::get('stores', function() {
		return view('admin.store.index');
	});
});
