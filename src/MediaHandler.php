<?php
namespace Exitdump\LaravelMedia;

use Exitdump\LaravelMedia\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class MediaHandler
{
    public function upload(UploadedFile $file, $model = null, $collection = 'default')
    { 
        $disk = config('laravel-media.default_disk');
        
        $media = new Media([
            'name' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
            'file_name' => $file->store('', ['disk' => $disk]),
            'mime_type' => $file->getClientMimeType(),
            'disk' => $disk,
            'size' => $file->getSize(),
        ]);

        if ($model) {
            $model->media()->save($media);
        }
        
        return $media;
    }
}