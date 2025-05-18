# Laravel Media \:frame\_with\_picture:

A WordPress-style media management system for Laravel with modal library, image processing, and optimized frontend component support.

## Features ✨

* 🖼️ **WordPress-style Media Library Modal**
* ⚡ **Blade Component for Easy Integration**
* 📁 **Multiple Storage Disks** (Local, S3, etc.)
* ✨ **Image Processing** (Thumbnails, Cropping)
* 🔗 **Morphable Media Attachments** via Trait
* 🚀 **AJAX Uploads with Progress**
* 🔍 **Search & Filter Media**
* 🎨 **Frontend UI Fully Packaged**

## Installation 💻

```bash
composer require exitdump/laravel-media
```

### Publish Assets & Config (Optional)

```bash
php artisan vendor:publish --tag=laravel-media-config
```

## Usage ⚙️

### 1. Use the Blade Component

```blade
<x-media-picker name="thumbnail_id" />
```

This will open the modal with your media library and allow image selection.

### 2. Make Models Mediable

```php
use Exitdump\LaravelMedia\Traits\HasMedia;

class Post extends Model
{
    use HasMedia;
    // ...
}
```

### 3. Access Media

```php
$post = Post::find(1);
$media = $post->media;
```

### Configuration Options

```php
return [
    'default_disk' => 'public',
    'path_prefix' => 'media',
    'default_collection' => 'default',
    'preserve_original_name' => false,
];
```

## Versioning 📦

We follow [Semantic Versioning](https://semver.org/):

* `v1.0.0`: Initial release
* `v1.0.0`: First stable release
* `v1.1.1`: Component & UX improvements, no breaking changes

## License 📄

MIT © [Exitdump](https://github.com/exitdump)
