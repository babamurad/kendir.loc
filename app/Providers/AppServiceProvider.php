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
        session()->put('locale', 'ru');

        $categories = Category::with('cparent', 'children' )->get();
        view()->share('categories', $categories);

        //dd(Category::with('cparent', 'children' )->get());
//        composer(
//            'layouts.app',
//            function ($view) {
//                $view->with('categories', Category::all());
//            }
//        );
    }
}
