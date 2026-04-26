<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentPortalController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\ContactController;



// University website routes
Route::get('/', function () {
    return view('welcome');
})->name('home');






// Search route
Route::get('/search', function () {
    return redirect()->back()->with('info', 'Search functionality coming soon!');
})->name('search');

// Newsletter subscription
Route::post('/newsletter/subscribe', function () {
    return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
})->name('newsletter.subscribe');



// Student Portal Routes (no backend - demo)

Route::prefix('portal')->group(function () {

    Route::get('/', [StudentPortalController::class,'dashboard'])->name('portal.dashboard');
    Route::get('/courses', [StudentPortalController::class, 'courses'])->name('portal.courses');
    Route::get('/grades', [StudentPortalController::class, 'grades'])->name('portal.grades');
    Route::get('/attendance', [StudentPortalController::class, 'attendance'])->name('portal.attendance');
});






// Enroll/Admissions Routes
Route::get('/enroll', [EnrollController::class,'index'])->name('enroll');
Route::post('/enroll/submit', [EnrollController::class, 'submitApplication'])->name('enroll.submit');






// Named routes for navigation




Route::get('/About', [AboutController::class, 'about'])->name('about');



// Staff Directory Route
Route::get('/staff', [StaffController::class, 'index'])->name('staff');

// News Routes
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');



// Programs Routes
Route::get('/programs', [ProgramsController::class, 'index'])->name('programs');
Route::get('/programs/{slug}', [ProgramsController::class, 'show'])->name('programs.show');

Route::get('/research', [ResearchController::class, 'index'])->name('research');

Route::get('/students', [StudentsController::class, 'index'])->name('students');

Route::get('/library', [LibraryController::class, 'index'])->name('library');



// Contact page route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');



// Search route
Route::get('/search', function () {
    $query = request()->get('q');
    return view('search-results', compact('query'));
})->name('search');

// Authentication routes
