<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LanguageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::controller(IndexController::class)->group(function () {
        Route::get('/' , 'index')->name('index');
        Route::get('/about-us' , 'about')->name('about');
        Route::get('/department' , 'department')->name('department');
        Route::get('/doctors' , 'doctors')->name('doctors');
        Route::get('/gallery' , 'gallery')->name('gallery');
        Route::get('/contact-us' , 'contact')->name('contact');
    });
});
Route::get('/admin/login', [AdminLoginController::class , 'index']);
Route::post('/admin/auth', [AdminLoginController::class , 'auth']);
Route::get('/lang-{lang}.js', [LanguageController::class , 'index']);
Route::get('/{any}', [IndexController::class , 'NotFound'])->where('any', '.*');


