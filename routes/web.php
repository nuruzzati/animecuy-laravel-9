<?php

use Illuminate\Support\Facades\Route;
use App\Models\Anime;
use App\Models\Category;

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


Route::get('/dashboard', function() {
    return view('dashboard');
});

// untuk admin
Route::resource('/dashboard/animes', 'DashboardAnimeController')->middleware('auth');
Route::resource('/dashboard/categories', 'DashboardCategoriesController')->middleware('auth');

// untuk user
Route::resource('/animes', 'AnimesController');
Route::resource('/categories', 'CategoriesController');
Route::get('/', function() {
    return view('user.beranda');
});


Route::get('categories/{id}', 'CategoriesController@show')->name('categories.show');


// untuk login
Route::get('/login', 'LoginController@index')->name('login')->middleware('guest');
Route::post('/login', 'LoginController@authenticate');


// logout
Route::post('/logout', 'LoginController@logout');
