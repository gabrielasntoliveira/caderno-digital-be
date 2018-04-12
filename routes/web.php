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

Route::get('/', 'PagesController@index');

Route::resource('posts', 'PostsController');
Route::resource('answers', 'AnswersController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::delete('/answers/{answer}/{post}', 'AnswersController@destroy');
Route::get('/answers/create/{post}', 'AnswersController@create');
Route::get('/answers/edit/{post}/{answer}', 'AnswersController@edit');