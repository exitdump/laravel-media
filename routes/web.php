<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Exitdump\LaravelMedia\Models\Media;
use Exitdump\LaravelMedia\MediaHandler;

Route::prefix('laravel-media')->name('laravel-media.')->group(function () {

    Route::get('/assets/styles.css', function () {
        return response()->file(__DIR__.'/../resources/css/laravel-media.css', [
            'Content-Type' => 'text/css',
        ]);
       
    })->name('assets.css');

    Route::get('/assets/scripts.js', function () {
        return response()->file(__DIR__.'/../resources/js/laravel-media.js', [
            'Content-Type' => 'application/javascript',
        ]);
    })->name('assets.js');

    Route::get('/browser', function () {
        $media = Media::latest()->get();
        return view('laravel-media::partials.media-grid', compact('media'));
    })->name('browser');

    Route::post('/upload', function (Request $request) {
        $request->validate(['file' => 'required|file|max:2048']);
        $handler = new MediaHandler();
        $handler->upload($request->file('file'));
        return response()->json(['success' => true]);
    })->name('upload');
});
