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



// Route home 

Route::get('/', function () {
    $data = [
        'comics' => config('comics')
     ]; 
     $list = [
        'list' => config('list')
     ];
    return view('home', $data, $list);
})->name('home');

// Route prodotti 

Route::get('/prodotti', function () {

    $data = [
       'comics' => config('comics')
    ];
    $list = [
        'list' => config('list')
     ];

   return view('product', $data, $list);
})->name('product');