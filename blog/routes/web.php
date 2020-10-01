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
    return view('/pages/naujienos_virsus');
});

Route::get('/new', function () {
    return view('/pages/random');
});
Route::get('/advertise', function () {
    return view('/pages/advertise');
});
Route::get('/post', function () {
    return view('/pages/newblog');
});