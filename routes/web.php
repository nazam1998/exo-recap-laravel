<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

Route::get('/','WelcomeController@index')->name('welcome');
Route::resource('article', 'ArticleController');
// Route::get('article','ArticleController@index')->name('article');
// Route::get('addArticle','ArticleController@create')->name('addArticle');
// Route::post('saveArticle','ArticleController@store')->name('saveArticle');
// Route::get('editArticle/{article}','ArticleController@edit')->name('editArticle');
// Route::post('updateArticle/{article}','ArticleController@update')->name('updateArticle');
// Route::get('showArticle/{article}','ArticleController@show')->name('showArticle');
// Route::get('deleteArticle/{article}','ArticleController@destroy')->name('deleteArticle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


 Route::get('user','UserController@index')->name('user');
 Route::get('editUser/{user}','UserController@edit')->name('editUser');
 Route::post('updateUser/{user}','UserController@update')->name('updateUser');
 Route::get('showUser/{user}','UserController@show')->name('showUser');
 Route::get('deleteUser/{user}','UserController@destroy')->name('deleteUser');
 Route::post('newsLetterUser/{user}','UserController@news')->name('newsUser');