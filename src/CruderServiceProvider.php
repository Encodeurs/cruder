<?php

namespace Akcauser\Cruder;

use Illuminate\Support\ServiceProvider;

class CruderServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'cruder');

        $this->publishes([
            __DIR__. '/config/cruder.php' => config_path('cruder.php'),
        ]);
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/cruder'),
                   
        ],'cruder-assets');
    }

    public function register()
    {

    }
}
