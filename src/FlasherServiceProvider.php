<?php

namespace Serendipitynl\Flasher;

use Serendipitynl\Flasher\Flash;

class FlasherServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register() {

        $this->app->alias(Flash::class, 'flasher');

        $this->app->bind('flasher', function($app) {
            return new Flash();
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'flasher');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/flasher'),
        ]);
    }
}
