<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityHomeController;
use App\Http\Controllers\ActivityController as FrontendActivityController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ActivityController as AdminActivityController;
use App\Http\Controllers\Admin\DonationController as AdminDonationController;
use App\Http\Controllers\Admin\ActivityCategoryController as AdminActivityCategoryController;
use App\Http\Controllers\Admin\DonationCategoryController as AdminDonationCategoryController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/info/{id}', [ActivityHomeController::class, 'show'])->name('info.show');

Route::get('/kegiatan', [FrontendActivityController::class, 'index'])->name('activity.index');
Route::get('/kegiatan/{id}', [FrontendActivityController::class, 'show'])->name('activity.show');

Route::get('/about', [AboutController::class, 'index']);

Route::get('/donation', function() {
    return view('donation');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('login');
    });
    // Route::get('/register', function () {
    //     return redirect()->route('register');
    // });

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::resource('activities', AdminActivityController::class)->names([
            'index' => 'admin.activities.index',
            'create' => 'admin.activities.create',
            'store' => 'admin.activities.store',
            'show' => 'admin.activities.show',
            'edit' => 'admin.activities.edit',
            'update' => 'admin.activities.update',
            'destroy' => 'admin.activities.destroy',
        ]);

        Route::resource('donations', AdminDonationController::class)->names([
            'index' => 'admin.donations.index',
            'create' => 'admin.donations.create',
            'store' => 'admin.donations.store',
            'show' => 'admin.donations.show',
            'edit' => 'admin.donations.edit',
            'update' => 'admin.donations.update',
            'destroy' => 'admin.donations.destroy',
        ]);

        Route::resource('activity-categories', AdminActivityCategoryController::class)->names([
            'index' => 'admin.activity-categories.index',
            'create' => 'admin.activity-categories.create',
            'store' => 'admin.activity-categories.store',
            'show' => 'admin.activity-categories.show',
            'edit' => 'admin.activity-categories.edit',
            'update' => 'admin.activity-categories.update',
            'destroy' => 'admin.activity-categories.destroy',
        ]);

        Route::resource('donation-categories', AdminDonationCategoryController::class)->names([
            'index' => 'admin.donation-categories.index',
            'create' => 'admin.donation-categories.create',
            'store' => 'admin.donation-categories.store',
            'show' => 'admin.donation-categories.show',
            'edit' => 'admin.donation-categories.edit',
            'update' => 'admin.donation-categories.update',
            'destroy' => 'admin.donation-categories.destroy',
        ]);
    });
});


require __DIR__.'/auth.php';
