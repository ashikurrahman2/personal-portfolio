<?php

use App\Http\Controllers\admin\main\AllcvController;
use App\Http\Controllers\Admin\Main\DashboardController;
use App\Http\Controllers\admin\main\RessumeController;
use App\Http\Controllers\Admin\Main\ServiceController;
use App\Http\Controllers\Admin\Main\SkillsController;
use App\Http\Controllers\Admin\Main\ContactController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\Admin\Main\LinkController;
use Illuminate\Support\Facades\Route;


/*** For Frontend page route ***/
Route::get('/', [frontendController::class, 'index'])->name('home');
/*** For download cv from frontend  ****/
Route::get('/download-cv/{id}', [FrontendController::class, 'downloadCV'])->name('download.cv');
/***  Middleware and backend Routing    ***/
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('services', ServiceController::class);
    Route::resource('ressumes', RessumeController::class);
    Route::resource('skills', SkillsController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('allcvs', AllcvController::class);
    Route::resource('links', LinkController::class);
});
