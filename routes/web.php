<?php

use App\Http\Controllers\{EnquiryController, ProfileController, HomeController, ToursController};
use Illuminate\Support\Facades\Route;

// Public Routes
Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/about', [HomeController::class, 'about']);
    Route::get('/contact', [HomeController::class, 'contact']);
    Route::get('/tours', [HomeController::class, 'tours']);
    Route::get('/tours/details/{slug}', [HomeController::class, 'tours_details']);
    Route::get('/tours/{category?}', [HomeController::class, 'tours'])->name('tours.category');
    Route::post('tours/contact', [HomeController::class, 'contactussubmit'])->name('tours.contact');
    Route::post('/tours/enquiry', [HomeController::class,'toursenquiry'])->name('enquiry.store');
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect()->route('tours.index');
    })->name('dashboard');

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

// Admin Routes
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/tours', [ToursController::class, 'index'])->name('tours.index');
        Route::get('/tours/create', [ToursController::class, 'create'])->name('tours.create');
        Route::post('/tours/store', [ToursController::class, 'store'])->name('tours.store');
        Route::get('/tours/{id}/edit', [ToursController::class, 'edit'])->name('tours.edit');
        Route::post('/tours/{id}', [ToursController::class, 'update'])->name('tours.update');
        Route::delete('/tours/{id}', [ToursController::class, 'destroy'])->name('tours.destroy');

        // Enquiry

        Route::get('/enquiry', [EnquiryController::class, 'enquiry'])->name('enquiry.index');
        Route::get('/contact', [EnquiryController::class, 'contact'])->name('contact.index');
        Route::get('/tours/enquiry', [EnquiryController::class, 'index'])->name('tours.enquiry');
    });
});


require __DIR__ . '/auth.php';


// Admin Routes
