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


Route::get('/', 'HomeController@index')->name('home');
Route::post('/register', 'ClientController@registerClient')->name('registerClient');

Route::post('/admin/course', 'CourseController@addCourse');
Route::get('/admin', 'CourseController@getCourses');
