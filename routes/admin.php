<?php

use App\Http\Controllers\admin\ClinicsController;
use App\Http\Controllers\admin\CompainController;
use App\Http\Controllers\admin\ConnectUsController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\FaqController;
use App\Http\Controllers\admin\LanguageLineController;
use App\Http\Controllers\admin\PermissionController;
use App\Http\Controllers\admin\RolesController;
use App\Http\Controllers\admin\SectionController;
use App\Http\Controllers\admin\SectionServiceController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\admin\StaffController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard' , [DashboardController::class , 'index'])->name('index');

Route::resource('permission' , PermissionController::class);
Route::resource('role' , RolesController::class);
Route::resource('user' , UserController::class);
Route::resource('lang' , LanguageLineController::class);
Route::resource('section' , SectionController::class);
Route::resource('services' , ServiceController::class);
Route::resource('sectionService' , SectionServiceController::class);
Route::resource('staff' , StaffController::class);
Route::resource('connect' , ConnectUsController::class)->only('index' , 'destroy' , 'show');
Route::resource('compain' , CompainController::class)->only('index' , 'destroy' , 'show');
Route::resource('clinic' , ClinicsController::class);
Route::resource('faq' , FaqController::class);
Route::controller(SettingController::class)->group(function () {
    Route::get('/setting' , 'index')->name('setting.index');
    Route::post('/setting-update' , 'update')->name('setting.update');
});
