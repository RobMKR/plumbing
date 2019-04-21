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
    return view('welcome');
});


Route::post('/', function () {
    $minutes = 600;
    $response = new \Illuminate\Http\Response(view('welcome')->with('email', request('email')));
    $response->withCookie(cookie('email', request('email'), $minutes));
    return $response;
});

Route::get('/services', function() {
    return view('services');
});

Route::get('/terms', function() {
    return view('terms');
});

Route::get('/contact', function() {
    return view('contact')->with('email', 0);
});

Route::post('/contact', function() {
    return view('contact')->with('email', 1);
});

Route::get('/pricing', function() {
    return view('pricing');
});
