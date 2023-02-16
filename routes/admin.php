<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LanguageLineController;
use App\Http\Controllers\admin\SectionController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard' , [DashboardController::class , 'index'])->name('index');

Route::resource('user' , UserController::class);
Route::resource('lang' , LanguageLineController::class);
Route::resource('section' , SectionController::class);
