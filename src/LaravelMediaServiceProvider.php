<?php

namespace Exitdump\LaravelMedia;

use Illuminate\Support\ServiceProvider;

class LaravelMediaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('laravel-media', function ($app) {
            return new LaravelMedia($app->make(MediaHandler::class));
        });

        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-media.php', 'laravel-media'
        );

        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/laravel-media.php' => config_path('laravel-media.php'),
        ], 'config');

        // if ($this->app->runningInConsole()) {
        //     $this->commands([
        //         Console\InstallCommand::class,
        //     ]);
        // }
        // dd('working');
    }
}