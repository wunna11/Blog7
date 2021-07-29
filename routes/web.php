<?php

use App\Http\Controllers\ArticleController;
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
Route::get('/', 'ArticleController@index');
Route::get('/articles', 'ArticleController@index');
Route::get('/articles/detail/{id}', 'ArticleController@detail');
Route::get('/articles/add/', 'ArticleController@add');
Route::post('/articles/add/', 'ArticleController@create');
Route::get('/articles/delete/{id}', 'ArticleController@delete');

//product
Route::get('/products', 'Product\ProductController@index');



Route::get('/home', 'HomeController@index')->name('home');
