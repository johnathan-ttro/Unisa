<?php

namespace UNISAStoryLine\PHPStencilComponent;

use October\Rain\Support\ServiceProvider;

class PHPStencilServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Register routes to the Application Service Provider
        include __DIR__.'/routes.php';
        $this->app->bind('UNISAStoryLine\PHPStencilComponent\Controllers\TimeZonesController@index');
    }
}
