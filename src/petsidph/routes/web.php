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
    return view('pages.home');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/about-us', function () {
    return view('pages.about-us');
});
Route::get('/contact-us', function () {
    return view('pages.contact-us');
});
Route::get('/user/login', function () {
    return view('pages.login');
});
Route::get('/user/register', function () {
    return view('pages.register');
});

Route::post('/user/create', 'UserController@create');

