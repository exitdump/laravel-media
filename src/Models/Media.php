<?php

namespace Exitdump\LaravelMedia\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $guarded = [];

    protected $casts = [];

    public function model()
    {
        return $this->morphTo();
    }
}