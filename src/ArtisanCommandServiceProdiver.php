<?php

namespace Halfpetal\Laravel\ArtisanCommands;

use Illuminate\Support\ServiceProvider;

class ArtisanCommandServiceProdiver extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if($this->app->runningInConsole()) {
            $this->commands([
                Commands\MakeObserver::class,
                Commands\SimpleRouteListCommand::class,
            ]);
        }
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