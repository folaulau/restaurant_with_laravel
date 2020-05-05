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

Route::get('/', function () {
    return view('layouts.landing.content');
});

Route::get('/aboutus', function () {
    return view('about-us');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/signup', 'AuthenticationController@showSignUp');

Route::get('/signin', 'AuthenticationController@showSignIn');
