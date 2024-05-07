<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserManagement;
use App\Livewire\Courses;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Courses
    Route::get('/courses', Courses::class)->name('courses');

    // Lareduca Games
    // Route::get('/lareduca-games', LareducaGames::class)->name('lareduca-games');

    // Calendar
    // Route::get('/calendar', Calendar::class)->name('calendar');

    // Grades
    // Route::get('/grades', Grades::class)->name('grades');

    // User Management
    Route::get('/user-management', UserManagement::class)->name('user-management');
});