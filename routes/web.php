<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityHomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/info/{id}', [ActivityHomeController::class, 'show'])->name('activity.show');

Route::get('/kegiatan', function () {
    return view('frontend.activity.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });


Route::prefix('/admin')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});




require __DIR__.'/auth.php';
