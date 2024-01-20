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

Route::get('/', [\App\Http\Controllers\Frontend\HomepagesController ::class, 'index'])->name('homePages');
Route::get('/services', [\App\Http\Controllers\Frontend\ServicepagesController ::class, 'index'])->name('services');
Route::get('/cars', [\App\Http\Controllers\Frontend\CarpagesController ::class, 'index'])->name('car');
Route::get('/cars/{car:slug}', [\App\Http\Controllers\Frontend\CarpagesController ::class, 'show'])->name('car.show');
Route::get('/contacts', [\App\Http\Controllers\Frontend\ContactpagesController ::class, 'index'])->name('contact');
