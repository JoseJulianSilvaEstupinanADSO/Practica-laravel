<?php

use App\Http\Controllers\PermissionController;
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
// Route::prefix('users')->group(function () {
//     Route::get('/', [UserController::class, "index"])->name("users.index");
//     // Route::get('/create', [UserController::class, "create"])->name("users.create");
//     // Route::post('/store', [UserController::class, "store"])->name("users.store");
//     // Route::get("/edit/{id}", [UserController::class, "edit"])->name("users.edit");
//     // Route::post("/update/{id}", [UserController::class, "update"])->name("users.update");
//     // Route::post("/destroy/{id}", [UserController::class, "destroy"])->name("users.destroy");
//     // Route::get("/{id}/posts", [UserController::class, "posts"])->name("users.posts");
//   });

require __DIR__.'/auth.php';
