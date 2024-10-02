<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('web.site.app');
});

Route::view('/','web.site.pages.home')->name('home.index');
Route::view('/majors','web.site.pages.majors')->name('majors.index');
Route::view('/doctors','web.site.pages.doctors')->name('doctors.index');
Route::view('/login','web.site.pages.login')->name('login.index');
