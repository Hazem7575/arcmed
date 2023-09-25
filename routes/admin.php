<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LanguageLineController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RolesController;
use App\Http\Controllers\admin\SectionController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard' , [DashboardController::class , 'index'])->name('index');

Route::resource('permission' , PermissionController::class);
Route::resource('role' , RolesController::class);
Route::resource('user' , UserController::class);
Route::resource('lang' , LanguageLineController::class);
Route::resource('section' , SectionController::class);
Route::resource('services' , ServiceController::class);
