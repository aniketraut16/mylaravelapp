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

Route::get('/veggies/{sabji}', function ($sabji) {
   
    return $sabji;
})->whereIn('sabji', ['baigan', 'bhindi', 'aaloo', 'gobhi']);

Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/hello', function () {
    return view('veggies');
});
Route::get('/veggies', function () {
    return view('table');
});

