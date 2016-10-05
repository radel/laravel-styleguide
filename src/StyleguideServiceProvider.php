<?php

namespace Radel\StyleGuide;

use Illuminate\Support\ServiceProvider;

class StyleguideServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        dd('Hey!');
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
