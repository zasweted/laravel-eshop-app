<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Home\HeroSliderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

//Admin Group Routes
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/profile/edit', [AdminController::class, 'editProfile'])->name('admin.profile.edit');
    Route::get('/admin/profile/pass-edit', [AdminController::class, 'editProfilePassword'])->name('admin.profile.passw-edit');
    Route::post('/admin/profile/pass-update', [AdminController::class, 'updateProfilePassword'])->name('admin.profile.passw-update');
    Route::post('/admin/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
});
//HeroSlider Group Routes
Route::controller(HeroSliderController::class)->group(function () {
    Route::get('/admin/home/hero-slider', [HeroSliderController::class, 'index'])->middleware(['auth', 'verified'])->name('home.hero-slider');
    Route::post('/admin/home/hero-slider-update', [HeroSliderController::class, 'updateHeroSlider'])->name('home.hero-slider-update');
    
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
