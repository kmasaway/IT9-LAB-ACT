<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return Auth::check()
        ? redirect()->route('posts.index')
        : redirect()->route('login');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/dashboard', function () {
    $user = Auth::user();
    $postCount = $user->posts()->count();
    $latestPost = $user->posts()->latest()->first();

    return view('dashboard', compact('user', 'postCount', 'latestPost'));
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class);
});
