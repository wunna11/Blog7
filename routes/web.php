<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

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
Auth::routes();

//article
Route::get('/', 'ArticleController@index')->name('home');
Route::get('/articles', 'ArticleController@index')->name('articleList');
Route::get('/articles/detail/{id}', 'ArticleController@detail')->name('articleDetail');
Route::get('/articles/add/', 'ArticleController@add')->name('articleAdd');
Route::post('/articles/add/', 'ArticleController@create')->name('post_articleAdd');
Route::get('/articles/edit/{id}', 'ArticleController@edit')->name('articleEdit');
Route::post('/aritcles/edit/{id}', 'ArticleController@update')->name('articleUpdate');
Route::get('/articles/delete/{id}', 'ArticleController@delete')->name('articleDelete');

//category
Route::get('categories/add/', 'CategoryController@add')->name('categoryAdd');
Route::post('categories/add/', 'CategoryController@create')->name('post_categoryAdd');

//comment
Route::post('/comments/add', 'CommentController@create')->name('commentAdd');
Route::get('/comments/delete/{id}', 'CommentController@delete')->name('commentDelete');

//product
Route::get('/products', 'Product\ProductController@index');



Route::get('/home', 'HomeController@index')->name('home');
