<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Users\UserManagement as UserManagement;
use App\Livewire\Courses\Courses as Courses;
use App\Livewire\Courses\CourseDetails as CourseDetails;
use App\Livewire\EducationalGames;

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
    
    // Course Details
    Route::get('/courses/{courseId}', CourseDetails::class)->name('courses.course-details');

    // Educational Games
    Route::get('/educational-games', EducationalGames::class)->name('educational-games');

    // Calendar
    Route::get('/calendar')->name('calendar');

    // Grades
    Route::get('/grades')->name('grades');

    // User Management
    Route::get('/user-management', UserManagement::class)->name('user-management');

    // Support
    Route::get('/support')->name('support');
});