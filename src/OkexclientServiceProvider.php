<?php

namespace Hadilee\Okexclient;

use Illuminate\Support\ServiceProvider;

use Hadilee\Okexclient\Okexclient as Okexclient;

class OkexclientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('okexclient',function($app){
            return new Okexclient();
        });
    }

    /*public function provides()
    {
        return ['okexclient'];
    }*/

    /*public function isDeferred(){

    }*/
}
