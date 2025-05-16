<?php

namespace Exitdump\LaravelMedia;

use Exitdump\LaravelMedia\Models\Media;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class MediaHandler
{
    public function upload(UploadedFile $file, $model = null, $collection = 'default')
    {
        $disk = config('laravel-media.default_disk', 'public');
        $pathPrefix = config('laravel-media.path_prefix', 'media');
        $preserveOriginalName = config('laravel-media.preserve_original_name', false);

        $fileName = $preserveOriginalName
            ? $this->generateOriginalFileName($file)
            : $file->hashName();

        $storagePath = $pathPrefix . '/' . date('Y/m/d');
        $fullPath = $file->storeAs($storagePath, $fileName, $disk);

        $media = new Media([
            'name'       => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
            'file_name'  => $fullPath,
            'mime_type'  => $file->getClientMimeType(),
            'disk'       => $disk,
            'size'       => $file->getSize(),
            'collection' => $collection,
        ]);

        if ($model) {
            $model->media()->save($media);
        } else {
            $media->save();
        }

        return $media;
    }

    protected function generateOriginalFileName(UploadedFile $file)
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $timestamp = now()->timestamp;

        return $originalName . '-' . $timestamp . '.' . $extension;
    }
}
