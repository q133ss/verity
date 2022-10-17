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

Route::view('/', 'index')->name('index');
Route::view('/donate', 'donate')->name('donate');
Route::view('/volunteers', 'volunteers')->name('volunteers');
Route::view('/contributors', 'contributors')->name('contributors');
Route::view('/verification', 'verification')->name('verification');
Route::view('/for-volunteers', 'for_volunteers')->name('for.volunteers');
