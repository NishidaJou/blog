<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        paginator::useBootstrap();    //動画
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
        //

}
