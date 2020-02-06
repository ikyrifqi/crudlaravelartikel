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


Route::get('/articles', 'ArticleController@show')->name('articles.list');
Route::get('/articles/add', 'ArticleController@addArticle')->name('articles.add');
Route::post('/articles/add', 'ArticleController@saveArticle')->name('articles.save');
Route::get('/articles/edit/{id}', 'ArticleController@editArticle')->name('articles.edit');
Route::post('/articles/edit/{id}', 'ArticleController@updateArticle')->name('articles.update');
Route::get('/articles/delete/{id}', 'ArticleController@deleteArticle')->name('articles.delete');

Route::get('/', function () {
    return view('welcome');
});
