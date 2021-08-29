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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'RecipeController@index')->name('home');
Route::get('/profile', 'RecipeController@profile')->name('profile');

Route::get('/home/create', 'RecipeController@create');
Route::post('/home', 'RecipeController@store');
Route::get('/home/{recipe}', 'RecipeController@show');
Route::get('/home/{recipe}/edit', 'RecipeController@edit');
Route::put('/home/{recipe}', 'RecipeController@update');
Route::delete('/home/{recipe}', 'RecipeController@destroy');

Route::get('/home/ingredient/create', 'IngredientController@create');
Route::post('/home/ingredient/store', 'IngredientController@store');
