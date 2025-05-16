<?php

namespace Exitdump\LaravelMedia\Traits;

use Exitdump\LaravelMedia\Models\Media;

trait HasMedia
{
    public function media()
    {
        return $this->morphMany(Media::class, 'model');
    }
}