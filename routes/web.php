<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticlesController;

/*
|--------------------------------------------------------------------------
| Front Pages
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/booking', [HomeController::class, 'booking'])->name('book.appointment');
Route::post('/book-appointment', [AppointmentController::class, 'store'])
    ->name('appointment.store');

Route::get('/therapies', [HomeController::class, 'therapies'])->name('therapies');
Route::get('/therapiest', fn () => view('therapiest'));

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/send', [HomeController::class, 'sendContact'])
    ->name('contact.send');


/*
|--------------------------------------------------------------------------
| ADMIN (NO LOGIN — TEMP)
|--------------------------------------------------------------------------
| MAIN ADMIN PAGE = /Admin
*/
Route::prefix('Admin')->group(function () {

    // Dashboard (old admin page)
    Route::get('/', [AdminController::class, 'bookings'])
        ->name('admin.dashboard');

    // Bookings
    Route::get('/bookings', [AdminController::class, 'bookings'])
        ->name('admin.bookings');

    Route::get('/booking/{id}/edit', [AdminController::class, 'editBooking'])
        ->name('admin.booking.edit');

    Route::put('/booking/{id}/update', [AdminController::class, 'updateBooking'])
        ->name('admin.booking.update');

    Route::delete('/booking/{id}/delete', [AdminController::class, 'deleteBooking'])
        ->name('admin.booking.delete');

    // Contacts
    Route::get('/contacts', [AdminController::class, 'contacts'])
        ->name('admin.contacts');
});


/*
|--------------------------------------------------------------------------
| Articles
|--------------------------------------------------------------------------
*/
Route::get('/crud', [ArticlesController::class, 'show']);
Route::get('/crud/add', [ArticlesController::class, 'addArticle'])->name('crud.add');
Route::post('/crud/add', [ArticlesController::class, 'saveArticle'])->name('article.save');


/*
|--------------------------------------------------------------------------
| Breeze / Auth (DISABLED)
|--------------------------------------------------------------------------
*/
// require __DIR__.'/auth.php';
