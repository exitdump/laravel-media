<?php

namespace Exitdump\LaravelMedia;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Exitdump\LaravelMedia\MediaHandler;

class LaravelMedia
{
    protected $handler;

    public function __construct(MediaHandler $handler)
    {
        $this->handler = $handler;
    }


    public function upload(UploadedFile $file)
    {
        $user = User::find(1);
        return $this->handler->upload($file, $user);
    }
    
    // public function associateWith($model)
    // {
    //     $this->model = $model;
    //     return $this;
    // }
    
    // public function toCollection($collection)
    // {
    //     // Your implementation
    // }
}
