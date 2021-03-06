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

/* Route::get('/', function () {
    return view('home');
}); */



Route::get('/', function () {
    return view("front.home");
})->name("home");

Route::get('/aboute', function () {
    return view("front.about");
})->name("about");

Route::get('/menu', function () {
    return view("front.menu");
})->name("menu");;

Route::get('/helpme', function () {
    return view("front.help");
})->name("help");;