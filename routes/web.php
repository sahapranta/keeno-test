<?php

use App\Category;
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
    $categories  = Category::all();
    return view('welcome', compact('categories'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@index');
Route::get('/products/{product:slug}', 'ProductController@view');
