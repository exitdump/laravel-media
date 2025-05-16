<?php

namespace Exitdump\LaravelMedia;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Exitdump\LaravelMedia\MediaHandler;

class LaravelMedia
{
    protected $handler;
    protected $collection = 'default';
    protected $model = null;

    public function __construct(MediaHandler $handler)
    {
        $this->handler = $handler;
    }


    public function upload(UploadedFile $file)
    {
        return $this->handler->upload($file, $this->model, $this->collection);
    }
    
    public function associateWith($model)
    {
        $this->model = $model;
        return $this;
    }
    
    public function toCollection($collection)
    {
        $this->collection = $collection;
        return $this;
    }

    public function test(){
        dd('test pass from pkg entry point');
    }
}
