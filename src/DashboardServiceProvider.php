<?php

namespace Smylmrz\Dashboard;

use Illuminate\Support\ServiceProvider;
use Smylmrz\Dashboard\Commands\Admin as CommandsAdmin;
use Smylmrz\Dashboard\Commands\CreateRoles;
use Smylmrz\Dashboard\Http\Middleware\Admin;

class DashboardServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        // Commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateRoles::class,
                CommandsAdmin::class,
            ]);
        }

        // Configuration
        $this->publishes([
            __DIR__.'/../config/smyl.php' => config_path('smyl.php'),
        ], 'config');

        // Publishing assets
        $this->publishes([
            __DIR__.'/../public' => public_path('smylmrz'),
        ], 'public');

        // Publishing views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/smylmrz'),
        ], 'views');

        // Add a cutstom admin middleware to the routes
        $this->app['router']->aliasMiddleware('admin' , Admin::class);
    }

    public function register()
    {
        
    }

}