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


//Resources
Route::resource('/', '\App\Http\Controllers\HomeController');
Route::resource('home', '\App\Http\Controllers\HomeController');
Route::resource('about', '\App\Http\Controllers\AboutController');
Route::resource('client', '\App\Http\Controllers\ClientController');
Route::resource('services', '\App\Http\Controllers\ServiceController');
Route::resource('contact', '\App\Http\Controllers\ContactController');

Route::get('terms', [App\Http\Controllers\HomeController::class, 'terms']); 
Route::get('privacy', [App\Http\Controllers\HomeController::class, 'privacy']); 
Route::get('/contact/delete/{id}', [App\Http\Controllers\ContactController::class, 'destroy'])->name('contact.destroy');


//Authentication 
Route::get('home', [App\Http\Controllers\CustomAuthController::class, 'dashboard']); 
Route::get('login', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::post('custom-registration', [App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');