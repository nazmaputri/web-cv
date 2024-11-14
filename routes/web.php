<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\SettingController;

//Landing Page
Route::get('/', [LandingPageController::class, 'about'])->name('about');
Route::get('/lp-resume', [LandingPageController::class, 'resume'])->name('resume');
Route::get('/lp-certificate', [LandingPageController::class, 'certificate'])->name('certificate');
Route::get('/lp-contact', [LandingPageController::class, 'contact'])->name('contact');

//Login 
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/settings', [SettingController::class, 'show'])->name('settings');
    Route::post('/settings', [SettingController::class, 'update']);
});
 
//Dashboard
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('profile', ProfileController::class);
Route::resource('about', AboutController::class);
Route::resource('certificates', CertificateController::class);
Route::resource('education', EducationController::class);
Route::resource('experience', ExperienceController::class);
Route::resource('skill', SkillController::class);
Route::resource('languages', LanguageController::class);








