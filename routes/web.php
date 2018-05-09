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
})->name('home');

Route::get('tours',function (){
    return view('tour.main');
})->name('tours');
Route::get('gallery', function (){
    return view('galeria.main');
})->name('gallery');
Route::get('reservation',function (){
    return view('reservas.main');
})->name('reservation');
