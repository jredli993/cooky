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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.',  'middleware' => ['auth', 'admin']], function() {
    // Admin Recipes
    Route::resource('recipes', 'Admin\RecipeController', ['only' => ['index', 'destroy']]);
    // Admin Categories
    Route::resource('category', 'Admin\CategoryController');
});
