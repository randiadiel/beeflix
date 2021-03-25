<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', 'MovieController@welcome')->name('welcome');
Route::get('/movie/{id}','MovieController@detail')->name('detailMovie');
Route::get('/genre/{id}','GenreController@detail')->name('detailGenre');
Route::get('/movies','MovieController@all')->name('allMovie');
