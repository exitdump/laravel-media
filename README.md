# Laravel Media \:frame\_with\_picture:

[![Latest Version](https://img.shields.io/packagist/v/exitdump/laravel-media.svg?style=flat-square)](https://packagist.org/packages/exitdump/laravel-media)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.md)

A WordPress-like media management system for Laravel with modal library, image processing, and cloud storage support.

![Media Library Modal Demo](https://user-images.githubusercontent.com/.../media-library-preview.gif)

## Features ✨

* 🖼️ **WordPress-style Media Library Modal**
* 📁 **Multiple Storage Disks** (Local, S3, etc.)
* ✨ **Image Processing** (Thumbnails, Cropping)
* 🔗 **Morphable Media Attachments**
* ✨ **Frontend Media Picker Component**
* 🚀 **AJAX Uploads with Progress**
* 🔍 **Search & Filter Media**
* 🎨 **Easy Blade Component Integration**

## Installation 💻

```bash
composer require exitdump/laravel-media
```

Then publish the assets:

```bash
php artisan vendor:publish --tag=laravel-media-assets
```

## Usage ✨

Add the media picker component in your Blade view:

```blade
<x-media-picker name="media_id" />
```

This will render a button. Clicking it opens a modal with existing media and an upload form.

## Configuration Options

In `config/laravel-media.php`:

* `default_disk` — Filesystem disk to store uploaded files. Default: `public`
* `path_prefix` — Path prefix in storage. Default: `media`
* `default_collection` — Used if no collection specified
* `preserve_original_name` — Whether to keep original filename

## Advanced

* Auto-generates responsive UI
* Built-in routes, views, and JS/CSS assets
* Easily extendable via Livewire or AlpineJS

## License

MIT
