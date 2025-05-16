# Laravel Media :frame_with_picture:

[![Latest Version](https://img.shields.io/packagist/v/exitdump/laravel-media.svg?style=flat-square)](https://packagist.org/packages/exitdump/laravel-media)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE.md)

A WordPress-like media management system for Laravel with modal library, image processing, and cloud storage support.

![Media Library Modal Demo](https://user-images.githubusercontent.com/.../media-library-preview.gif)

## Features ✨

- 🖼️ **WordPress-style Media Library Modal**
- 📁 **Multiple Storage Disks** (Local, S3, etc.)
- ✨ **Image Processing** (Thumbnails, Cropping)
- 🔗 **Morphable Media Attachments**
- 🚀 **AJAX Uploads with Progress**
- 🔍 **Search & Filter Media**
- 🎨 **Frontend Components Included**

## Installation 💻

```bash
composer require exitdump/laravel-media



### Config options

- `default_disk` — The Laravel filesystem disk to store uploaded files. Default: `public`
- `path_prefix` — Path prefix for storage. Default: `media`
- `default_collection` — Used when no collection is specified
- `preserve_original_name` — If true, uploaded file will keep its original name
