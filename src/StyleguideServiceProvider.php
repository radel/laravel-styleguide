<?php

namespace Radel\StyleGuide;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class StyleguideServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         // use this if your package has views
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'StyleGuide');
        // use this if your package has routes
        $this->setupRoutes($this->app->router);
        $this->publishes([
        __DIR__.'/resources/views/components/' => resource_path('/views/components/')
    ], 'components');

        $this->publishes([
        __DIR__.'/resources/assets/' => public_path('/assets/styleguide/')
    ], 'assets');

    }

    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Radel\StyleGuide\Http\Controllers'], function($router)
        {
            require __DIR__.'/routes.php';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
