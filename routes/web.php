<?php

use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\SettingController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LanguageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::get('/login' , function(){
    return redirect('/admin/login');
});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function(){
    Route::controller(IndexController::class)->group(function () {
        Route::get('/' , 'index')->name('index');
        Route::get('/about-us' , 'about')->name('about');
        Route::get('/department' , 'department')->name('department');
        Route::get('/services/{service?}' , 'services')->name('services');
        Route::get('/devices/{service?}' , 'devices')->name('devices');
        Route::get('/doctors' , 'doctors')->name('doctors');
        Route::get('/gallery' , 'gallery')->name('gallery');
        Route::get('/contact-us' , 'contact')->name('contact');
        Route::post('/contact-us-send' , 'contact_store')->name('contact.store');
        Route::get('/complain' , 'compain')->name('compain');
        Route::post('/complain-store' , 'compain_store')->name('compain.store');
        Route::get('/clinic/{clinic}' , 'clinic')->name('clinic');
        Route::get('/staff/{staff}' , 'staff_show')->name('staff.show');
        Route::get('/education' , 'education')->name('education');
    });
});
Route::get('/admin/login', [AdminLoginController::class , 'index']);
Route::post('/admin/auth', [AdminLoginController::class , 'auth']);



Route::get('/lang-{lang}.js', [LanguageController::class , 'index']);

Route::get('/{any}', [IndexController::class , 'NotFound'])->where('any', '.*');


