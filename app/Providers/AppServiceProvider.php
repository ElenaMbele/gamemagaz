<?php

namespace App\Providers;

use App\Category;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categories = Category::all();
        $products = Product::query()->orderBy('id', 'DESC')->get();
        $randomProduct = $products[random_int(0, count($products) - 1)];
        View::share('categories', $categories);
        View::share('randomProduct', $randomProduct);
        view()->composer('*', function($view) {$view->with('isGuest', !Auth::check());});

    }

}
