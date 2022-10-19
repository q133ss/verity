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
Route::prefix('volunteers')->group(function(){
    Route::get('/', [App\Http\Controllers\VolunteerController::class, 'index'])->name('volunteers');
    Route::post('/sort/{field}', [App\Http\Controllers\VolunteerController::class, 'sort']);
    Route::post('/search/{query}', [App\Http\Controllers\VolunteerController::class, 'search']);
    Route::post('/search/city/{query}', [App\Http\Controllers\VolunteerController::class, 'searchCity']);
});
Route::prefix('contributors')->group(function(){
    Route::get('/', [App\Http\Controllers\ContributorController::class, 'index'])->name('contributors');
    Route::post('/payment', [App\Http\Controllers\ContributorController::class, 'payment'])->name('contributors.payment');
    Route::post('/', [App\Http\Controllers\ContributorController::class, 'store'])->name('contributors.store');
    Route::post('/sort/{field}', [App\Http\Controllers\ContributorController::class, 'sort']);
    Route::post('/search/{query}', [App\Http\Controllers\ContributorController::class, 'search']);
    Route::post('/search/city/{query}', [App\Http\Controllers\ContributorController::class, 'searchCity']);
});
Route::get('/certificate/{id}', [App\Http\Controllers\CertificateController::class, 'make'])->name('certificate.make');
Route::view('/verification', 'verification')->name('verification');
Route::post('/certificate/check', [App\Http\Controllers\VerificationController::class, 'check']);
Route::view('/for-volunteers', 'for_volunteers')->name('for.volunteers');

Route::prefix('admin')->name('admin.')->middleware('auth')->middleware('is.admin')->group(function(){
    Route::get('/', function (){
        return view('layouts.admin');
    })->name('index');

    Route::resource('volunteers', App\Http\Controllers\Admin\VolunteersController::class)->except('show');
    Route::resource('recommend', App\Http\Controllers\Admin\RecommendController::class)->except('show');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
