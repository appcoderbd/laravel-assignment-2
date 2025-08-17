<?php

namespace App\Providers;

use App\Models\Categorie;
use App\Models\Post;
use Illuminate\Support\Facades\View;
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
        //
        // সব ভিউতে categoryCount পাঠাবে
        View::composer('*', function ($view) {
            $view->with('categoryCount', Categorie::count());
        });

        // Post Count
        View::composer('*', function($view){
            $view->with('postCount', Post::count());
        });

        // Category Item All-------
        View::composer('*', function($view){
            $view->with('categories', Categorie::get()->all());
        });

        // Latest 5 Post is Dashboard
        View::composer('*', function($view){
            $view->with('latestPosts', Post::latest()->take(5)->get());
        });
    }
}
