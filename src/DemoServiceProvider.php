<?php

namespace Smylmrz\Demo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'demo');

        $this->publishes([
            __DIR__.'/public' => public_path('smylmrz'),
        ], 'public');

        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/smylmrz'),
        ], 'views');
    }

    public function register()
    {
        
    }

}