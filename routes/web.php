<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/portfolios', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/case-study', [FrontendController::class, 'caseStudy'])->name('casestudy');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact');
Route::post('/submit/enqiry', [ContactController::class, 'submitEnquiry'])->name('submit.enquiry');

// POLICIES PAGES
Route::get('/privacy-policy', [PolicyController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-conditions', [PolicyController::class, 'termsCondition'])->name('term-condition');
Route::get('/cancellation-refund', [PolicyController::class, 'cancelRefund'])->name('cancel-refund');
Route::get('/shipping-delievery', [PolicyController::class, 'shippingDelievery'])->name('shipping-delievery');




Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Company Routes
    Route::get('company', [AdminController::class, 'companyList'])->name('admin.company.list');
    Route::get('company/create', [AdminController::class, 'companyCreate'])->name('admin.company.create');
    Route::post('company', [AdminController::class, 'companyStore'])->name('admin.company.store');
    Route::get('company/edit/{id}', [AdminController::class, 'companyEdit'])->name('admin.company.edit');
    Route::delete('company/{id}', [AdminController::class, 'companyDelete'])->name('admin.company.delete');


    // WORK
    Route::prefix('category')->group(function(){
        Route::get('list', [AdminController::class, 'listCategory'])->name('category.list');
        Route::get('create', [AdminController::class, 'createCategory'])->name('category.create');
        Route::post('store', [AdminController::class, 'categoryStore'])->name('category.store');
        Route::get('edit', [AdminController::class, 'categoryStore'])->name('category.edit');
        Route::delete('delete', [AdminController::class, 'categoryDelete'])->name('category.delete');
    });

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
