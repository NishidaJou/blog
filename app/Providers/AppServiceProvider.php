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
    
    public function boot()
    {
      \URL::forceScheme('https'); //追加
    }
    public function boot()
    {
      \URL::forceScheme('https');
      $this->app['request']->server->set('HTTPS','on');
    }
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
        //

}
