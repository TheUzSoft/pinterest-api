<?php

namespace TheUzSoft\\Pinterest;

use Illuminate\Support\ServiceProvider;

class PinterestServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/pinterest.php', 'pinterest');

        $this->app->singleton('pinterest-client', function ($app) {
            $apiKey = config('pinterest.api_key');
            return new PinterestClient($apiKey);
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/config/pinterest.php' => config_path('pinterest.php'),
            ], 'config');
        }
    }
}
