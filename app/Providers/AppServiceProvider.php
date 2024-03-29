<?php

namespace App\Providers;

use App\Models\Categories;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(
            'client.layout.header',
            function ($view) {
                $view->with('categories', Categories::all());
            }
        );
    }
}
