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

Route::get('/', function () {
    return view('welcome');
});

//Route for frontend
Route::get('/home', [App\Http\Controllers\FrontController::class, 'index'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\FrontController::class, 'contact'])->name('contact');
Route::get('/agent', [App\Http\Controllers\FrontController::class, 'agent'])->name('agent');
Route::get('/blog', [App\Http\Controllers\FrontController::class, 'blog'])->name('blog');
Route::get('/about', [App\Http\Controllers\FrontController::class, 'about'])->name('about');
Route::get('/blogSingle', [App\Http\Controllers\FrontController::class, 'blogSingle'])->name('blogSingle');
Route::get('/propertiesSingle', [App\Http\Controllers\FrontController::class, 'propertiesSingle'])->name('propertiesSingle');
Route::get('/properties', [App\Http\Controllers\FrontController::class, 'properties'])->name('properties');
Route::get('/services', [App\Http\Controllers\FrontController::class, 'services'])->name('services');

Route::admineticAuth();
