<?php

use App\Http\Controllers\Backend\ArticleBackendController;
use App\Http\Controllers\Backend\GalleryBackendController;
use App\Http\Controllers\Backend\HomeBackendController;
use App\Http\Controllers\Backend\UserBackendController;
use App\Http\Controllers\Backend\ValveBackendController;
use App\Http\Controllers\Frontend\HomeFrontendController;
use App\Http\Controllers\Frontend\OrganizationFrontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', [HomeBackendController::class, 'index'])->name('backend.index');
    Route::resource('article', ArticleBackendController::class);
    Route::resource('valves', ValveBackendController::class);
    Route::resource('galleries', GalleryBackendController::class);
    Route::resource('utilisateur', UserBackendController::class);

    Route::put('activeArticle/{key}', [ArticleBackendController::class, 'confirmed'])
        ->name('article.active');
    Route::put('inactiveArticle/{key}', [ArticleBackendController::class, 'unconfirmed'])
        ->name('article.inactive');

    Route::put('activeUsers/{key}', [UserBackendController::class, 'confirmed'])
        ->name('utilisateur.active');
    Route::put('inactiveUsers/{key}', [UserBackendController::class, 'unconfirmed'])
        ->name('utilisateur.inactive');
});


Route::get('/', [HomeFrontendController::class, 'index'])->name('home.index');
route::get('/nos-article-cs-berakha/{key}', [HomeFrontendController::class, 'show'])->name('article.voirplus');
Route::get('/all_articles_cs_berkha', [HomeFrontendController::class, 'all_articles'])->name('article.all');
Route::get('/apropos_ud_cs_berakha', [HomeFrontendController::class, 'about'])->name('pages.about');
Route::get('/admission_au_cs_berakha', [HomeFrontendController::class, 'admission'])->name('pages.admission');
Route::get('/innovations_au_cs_berakha', [HomeFrontendController::class, 'innovations'])->name('pages.inovations');
Route::get('/options_du_cs_berakha', [HomeFrontendController::class, 'options'])->name('pages.options');
Route::get('/actualites_du_cs_berakha', [HomeFrontendController::class, 'actu'])->name('pages.actu');
Route::get('/galery_du_cs_berakha', [HomeFrontendController::class, 'gallery'])->name('pages.galery');
Route::get('/under_construct', [HomeFrontendController::class, 'underContstruct'])->name('pages.under');
Route::get('/contacter_le_cs_berakha', [HomeFrontendController::class, 'contact'])->name('pages.contact');
Route::get('/details/{id}', [MainController::class, 'detail'])->name('pages.detail');