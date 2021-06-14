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
//home page
Route::get('/', 'HomeController@menu')->name('home');

//front pages
Route::get('/intro_front', 'HomeController@intro_front')->name('intro_front');
Route::get('/story_front', 'HomeController@story_front')->name('story_front');
Route::get('/discount_front', 'HomeController@discount_front')->name('discount_front');
Route::get('/sign_front', 'HomeController@sign_front')->name('sign_front');
Route::get('/game_front', 'HomeController@game_front')->name('game_front');
Route::get('/order_front', 'HomeController@order_front')->name('order_front');

//content pages
Route::get('/intro_content', 'HomeController@intro_content')->name('intro_content');
Route::get('/story_content', 'HomeController@story_content')->name('story_content');
Route::get('/story2_content', 'HomeController@story2_content')->name('story2_content');
Route::get('/discount_content', 'HomeController@discount_content')->name('discount_content');
Route::get('/sign_content', 'HomeController@sign_content')->name('sign_content');
Route::get('/game_content', 'HomeController@game_content')->name('game_content');
Route::get('/order_content', 'HomeController@order_content')->name('order_content');
