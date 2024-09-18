<?php

use App\Http\Controllers\BuyplanController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('users', UserController::class)->except(['show', 'create', 'store'])->names('users');
Route::resource('permissions', PermissionController::class)->except('show')->names('permissions');
Route::resource('roles', RoleController::class)->except('show')->names('roles');
Route::resource('plans', PlanController::class)->except('show')->names('plans');
Route::resource('compras', BuyplanController::class)->except('show')->names('compras');

Route::prefix('plans')->group(function () {
    Route::post('/buyplan', [PlanController::class, "buyplan"])->name("plans.buyplan");

});

require __DIR__.'/auth.php';
