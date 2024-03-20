<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        app()->setLocale('ru');
        view()->share('categories', Category::all());
//        composer(
//            'layouts.app',
//            function ($view) {
//                $view->with('categories', Category::all());
//            }
//        );
    }
}
