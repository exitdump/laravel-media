<?php

namespace Exitdump\LaravelMedia;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;


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

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-media');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/exitdump/laravel-media'),
        ], 'laravel-media-views');
    
        $this->publishes([
            __DIR__.'/../resources/js/laravel-media.js' => public_path('vendor/laravel-media/laravel-media.js'),
            __DIR__.'/../resources/css/laravel-media.css' => public_path('vendor/laravel-media/media.css'),
        ], 'laravel-media-assets');
    
        Blade::component('media-picker', \Exitdump\LaravelMedia\View\Components\LaravelMediaPicker::class);
    }
}