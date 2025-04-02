<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Service Routes
Route::get('/services/plumbing', [ServiceController::class, 'plumbing'])->name('service.plumbing');
Route::get('/services/water-solutions', [ServiceController::class, 'waterSolutions'])->name('service.water-solutions');
Route::get('/services/construction', [ServiceController::class, 'construction'])->name('service.construction');
Route::get('/services/emergency', [ServiceController::class, 'emergency'])->name('service.emergency');
Route::get('/services/maintenance', [ServiceController::class, 'maintenance'])->name('service.maintenance');
Route::get('/services/specialized', [ServiceController::class, 'specialized'])->name('service.specialized');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Privacy Policy Route
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy');
