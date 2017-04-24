<?php

namespace ArnisLielturks\FayeClient;

use Illuminate\Support\ServiceProvider;
use ArnisLielturks\FayeClient\FayeService;

class FayeServiceProvider extends ServiceProvider
{
//    protected $defer = true;

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
        $this->app->bind('ArnisLielturks\FayeClient\FayeServiceInterface', function ($app) {
            return new FayeService(config('faye'));
        });
    }

}
