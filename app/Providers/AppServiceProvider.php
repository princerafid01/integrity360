<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('includes.header', function($view)
        {
            $view->with('header' , \App\HeaderArea::all()->first());
        });
        view()->composer('contact', function($view)
        {
            $view->with('header' , \App\HeaderArea::all()->first());
        });
    }
}
