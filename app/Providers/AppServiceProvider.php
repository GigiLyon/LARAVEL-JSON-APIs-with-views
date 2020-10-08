<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Resources\Comment;
use Blade;

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
        //
        // Comment::withoutWrapping();
        Blade::if('featured', function($comment){
            return $comment->featured();
        });
    }
}
