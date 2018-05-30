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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page/{page?}', function ($page = 'home') {
    return view($page, ['page' =>$page]);
});

Route::get('/plop/{mot?}', function ($mot = 'hkqwdsr') {
    return view('plop', ["mot" => $mot]);
});

Route::get('/wall/{search?}', 'WallController@show')->name('wall');

Route::post('/write', 'WallController@write');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
