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
//My pages routes initialized
Route::get('/', 'PagesController@index');
Route::get('/music', 'PagesController@music');
Route::get('/sports', 'PagesController@sports');
Route::get('/ent', 'PagesController@ent');
Route::get('/ad', 'PagesController@ad');
Route::get('/contact', 'PagesController@contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Insert Dynamic PArameters into url(you need this)
// Route::get('/users/{id}/{user}', function($id, $user){
//     return 'This is User '. $id. $user;
// });

//Route Resource for our posts
Route::resource('posts','PostsController');

//Route Resource for our Ads
Route::resource('ads', 'AdsController');
