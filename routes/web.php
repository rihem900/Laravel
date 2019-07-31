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

//Authentification routes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');


//To Post or creation form
Route::post('/home/{usere}/create','PosteController@store');

//Show all the postes created by the user 
Route::get('/home/{user}/','PosteController@index')->middleware('auth');

//To get to the form to create a post
Route::get('/home/{user}/create', 'PosteController@create')->middleware('auth');


//Showing the Post and the comments
Route::get('/posts/{post}','PosteController@show');



