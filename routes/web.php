<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/portfolios', [FrontendController::class, 'portfolio'])->name('portfolio');
Route::get('/case-study', [FrontendController::class, 'caseStudy'])->name('casestudy');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact');

Route::post('/submit/enqiry', [ContactController::class, 'submitEnquiry'])->name('submit.enquiry');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
