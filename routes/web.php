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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('page',function(){
	return view('a');
});
Route::get('page2',function(){
	return view('b');
});
Route::get('page3',function(){
	return view('c');
});
Route::get('page4',function(){
	return view('d');
});
Route::get('page5',function(){
	return view('e');
});
Route::get('page6',function(){
	return view('f');
});
Route::get('login',function(){
	return view('tampilanlogin,');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
