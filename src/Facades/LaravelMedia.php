<?php

namespace Exitdump\LaravelMedia\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelMedia extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-media';
    }
}