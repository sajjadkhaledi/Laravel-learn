<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\View\Composers\TestComposer;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // view()->composer('*', function($view){
        //     $view->with('count', 10);
        // });

        // view()->composer('admin/*', function($view){
        //     $view->with('count', 10);
        // });

        // view()->composer('*', TestComposer::class);


        // view()->composer(['layouts.master', 'layouts.header'], TestComposer::class);
    }
}
