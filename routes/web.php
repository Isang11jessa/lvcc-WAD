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

Route::get('/home', function(){
	return view('home');
});


Route::get('/news', function(){
	return view('news');
});

Route::get('/about', function(){
	return view('about');
});

Route::get('/tagaytay', function(){
	return view('tagaytay');
});

Route::get('/launion', function(){
	return view('launion');
});

Route::get('/puertogalera', function(){
	return view('puertogalera');
});

Route::get('/corregidor', function(){
	return view('corregidor');
});

Route::get('/baguio', function(){
	return view('baguio');
});

Route::get('/boracay', function(){
	return view('boracay');
});

Route::get('/banaue', function(){
	return view('banaue');
});

Route::get('/sagada', function(){
	return view('sagada');
});

Route::get('/pagudpud', function(){
	return view('pagudpud');
});

Route::get('/palawan', function(){
	return view('palawan');
});