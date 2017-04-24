<?php

namespace ArnisLielturks;

use Illuminate\Support\ServiceProvider;
use App\Services\FayeService;

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
        $this->app->bind('ArnisLielturks\FayeServiceInterface', function ($app) {
            return new FayeService(config('faye'));
        });
    }

}
