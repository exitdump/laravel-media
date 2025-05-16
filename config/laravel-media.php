<?php

return [
    'default_disk' => env('MEDIA_DISK', 'public'),

    // Optional path prefix (e.g., media/yyyy/mm/dd)
    'path_prefix' => env('MEDIA_PATH_PREFIX', 'media'),

    // Default collection name
    'default_collection' => 'default',

    // Whether to use original filename or hash it
    'preserve_original_name' => false,
];
