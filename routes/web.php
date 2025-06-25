<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\NewsController;
use App\Http\Controllers\Site\AboutController;
use App\Http\Controllers\Site\ContactController;
use App\Http\Controllers\Site\ServiceController;
use App\Http\Controllers\Site\ProductController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\PartnerController as AdminPartnerController;
use App\Http\Controllers\Admin\ClientController as AdminClientController;
use App\Http\Controllers\Admin\PortfolioController as AdminPortfolioController;


/* SITE */
/* Route::get('/', function () {
    return view('site.home.index');
})->name('site.home.index'); */

Route::get('/', [HomeController::class, 'index'])->name('site.home.index');
/* noticias */
Route::get('/blog', [NewsController::class, 'index'])->name('site.news.index');
/* sobre */
Route::get('/about', [AboutController::class, 'index'])->name('site.about.index');
/* contacto */
Route::get('/contact', [ContactController::class, 'index'])->name('site.contact.index');
/* contacto */
Route::get('/service', [ServiceController::class, 'index'])->name('site.service.index');
/* product*/
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');

/* Admin*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');
     Route::resource('news', AdminNewsController::class);
    
    Route::get('/contact', [AdminContactController::class, 'index'])->name('contact.index');
    Route::get('/about', [AdminAboutController::class, 'index'])->name('about.index');
    Route::get('/service', [AdminServiceController::class, 'index'])->name('service.index');
    Route::resource('partner', AdminPartnerController::class);
    Route::resource('portfolio',AdminPortfolioController::class);
   // Página principal de gestão de produto
Route::get('product', [AdminProductController::class, 'index'])->name('product.index');

// CRUD de FAQ
Route::post('product/faq', [AdminProductController::class, 'storeFaq'])->name('product.storeFaq');
Route::get('product/faq/{id}/edit', [AdminProductController::class, 'editFaq'])->name('product.editFaq');
Route::put('product/faq/{id}', [AdminProductController::class, 'updateFaq'])->name('product.updateFaq');
Route::delete('product/faq/{id}', [AdminProductController::class, 'destroyFaq'])->name('product.destroyFaq');

// CRUD de Planos
Route::post('product/plan', [AdminProductController::class, 'storePlan'])->name('product.storePlan');
Route::get('product/plan/{id}/edit', [AdminProductController::class, 'editPlan'])->name('product.editPlan');
Route::put('product/plan/{id}', [AdminProductController::class, 'updatePlan'])->name('product.updatePlan');
Route::delete('product/plan/{id}', [AdminProductController::class, 'destroyPlan'])->name('product.destroyPlan');

Route::get('product/plans-list', [AdminProductController::class, 'plansList'])->name('product.plansList');


});


