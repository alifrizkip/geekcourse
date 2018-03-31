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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('courses', 'CourseController')->only('index', 'show');
Route::resource('my-courses/wishlist', 'WishlistCourseController')->only('index');
Route::resource('my-courses', 'MyCourseController')->only('index', 'show');

Route::get('/login', function() {
  return view('auth.login');
})->name('login');
Route::get('/register', function() {
  return view('auth.register');
})->name('register');