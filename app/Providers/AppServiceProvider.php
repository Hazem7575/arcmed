<?php

namespace App\Providers;

use App\Models\Service;
use App\Models\System;
use App\Utils\ModuleUtil;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        View::composer(
            ['layouts.app'],
            function ($view) {
                $services = Service::where('status' , 1)->pluck(prefix_lang('name' , 'name') , 'id')->toArray();
                $view->with('services', $services);
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
