<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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



Route::get('/', [MainController::class, 'index'])->name('pages.index');
Route::get('/about_us', [MainController::class, 'about'])->name('pages.about');
Route::get('/admission', [MainController::class, 'admission'])->name('pages.admission');
Route::get('/innovations', [MainController::class, 'innovations'])->name('pages.inovations');
Route::get('/options', [MainController::class, 'options'])->name('pages.options');
Route::get('/actualites', [MainController::class, 'actu'])->name('pages.actu');
Route::get('/galery', [MainController::class, 'galery'])->name('pages.galery');
Route::get('/under_construct', [MainController::class, 'underContstruct'])->name('pages.under');
Route::get('/contact_us', [MainController::class, 'contact'])->name('pages.contact');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
