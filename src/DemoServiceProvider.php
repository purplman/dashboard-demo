<?php

namespace Smylmrz\Demo;

use Illuminate\Support\ServiceProvider;
use Smylmrz\Demo\Http\Middleware\Admin;

class DemoServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'demo');

        // Publishing assets
        $this->publishes([
            __DIR__.'/public' => public_path('smylmrz'),
        ], 'public');

        // Publishing views
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/smylmrz'),
        ], 'views');

        // Add a cutstom admin middleware to the routes
        $this->app['router']->aliasMiddleware('admin' , Admin::class);
    }

    public function register()
    {
        
    }

}