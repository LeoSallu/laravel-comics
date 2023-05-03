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
   $list = [
      'list' => config('list')
   ];
   return view('home', $list);
})->name('home');

// Route prodotti 

Route::get('/prodotti', function () {

   $data = [
      'comics' => config('comics')
   ];
   $list = [
      'list' => config('list')
   ];

   return view('products', $data, $list);
})->name('products');

// Route info prodotto

Route::get('/info-fumetto/{index}', function ($index) {
   $comics_total = config('comics');
   $list = [
      'list' => config('list')
   ];

   $comics = $comics_total[$index];

   return view('product', $list, compact('comics'));
})->name('product');
