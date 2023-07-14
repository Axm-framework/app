<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Class Namespace
    |--------------------------------------------------------------------------
    |
    | This value sets the root namespace for raxm component classes in
    | your application. This value affects component auto-discovery and
    | any raxm file helper commands, like `artisan make:raxm`.
    |
    | After changing this item, run: `php artisan raxm:discover`.
    |
    */

    'class_namespace' => 'App\\Http\\Raxm',

    /*
    |--------------------------------------------------------------------------
    | View Path
    |--------------------------------------------------------------------------
    |
    | This value sets the path for raxm component views. This affects
    | file manipulation helper commands like `artisan make:raxm`.
    |
    */

    'view_path' => APP_PATH . '/views/raxm/',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    | The default layout view that will be used when rendering a component via
    | Route::get('/some-endpoint', SomeComponent::class);. In this case the
    | the view returned by SomeComponent will be wrapped in "layouts.app"
    |
    */

    'layout' => 'layouts.app',

    /*
    |--------------------------------------------------------------------------
    | raxm Assets URL
    |--------------------------------------------------------------------------
    |
    | This value sets the path to raxm JavaScript assets, for cases where
    | your app's domain root is not the correct path. By default, raxm
    | will load its JavaScript assets from the app's "relative root".
    |
    | Examples: "/assets", "myurl.com/app".
    |
    */

    'asset_url' =>  generateUrl(PATH_CLEAR_URI . 'vendor/axm/raxm/dist') . '/',

    /*
    |--------------------------------------------------------------------------
    | raxm File Name
    |--------------------------------------------------------------------------
    |
    | This value sets the filename to raxm JavaScript assets, for cases where
    | your app's domain root is not the correct path. By default, raxm
    | will load its JavaScript assets from the app's "file name".
    |
    | Examples: "cdn.js".
    |
    */

    'fileName' => 'cdn.js',


    /*
    |--------------------------------------------------------------------------
    | raxm App URL
    |--------------------------------------------------------------------------
    |
    | This value should be used if raxm assets are served from CDN.
    | raxm will communicate with an app through this url.
    |
    | Examples: "https://my-app.com", "myurl.com/app".
    |
    */

    'app_url' => null,

    /*
    |--------------------------------------------------------------------------
    | raxm Endpoint Middleware Group
    |--------------------------------------------------------------------------
    |
    | This value sets the middleware group that will be applied to the main
    | raxm "message" endpoint (the endpoint that gets hit everytime
    | a raxm component updates). It is set to "web" by default.
    |
    */

    'middleware_group' => 'web',

    /*
    |--------------------------------------------------------------------------
    | raxm Temporary File Uploads Endpoint Configuration
    |--------------------------------------------------------------------------
    |
    | raxm handles file uploads by storing uploads in a temporary directory
    | before the file is validated and stored permanently. All file uploads
    | are directed to a global endpoint for temporary storage. The config
    | items below are used for customizing the way the endpoint works.
    |
    */

    'temporary_file_upload' => [
        'disk'  => null,       # Example: 'local', 's3'              Default: 'default'
        'rules' => null,       # Example: ['file', 'mimes:png,jpg']  Default: ['required', 'file', 'max:12288'] (12MB)
        'directory'  => null,  # Example: 'tmp'                      Default  'raxm-tmp'
        'middleware' => null,  # Example: 'throttle:5,1'             Default: 'throttle:60,1'
        'preview_mimes' => [   # Supported file types for temporary pre-signed file URLs.
            'png', 'gif',
            'bmp', 'svg',
            'wav', 'mp4',
            'mov', 'avi',
            'wmv', 'mp3',
            'm4a', 'wma',
            'jpg', 'jpeg',
            'mpga', 'webp',
        ],
        'max_upload_time' => 5, # Max duration (in minutes) before an upload gets invalidated.
    ],

    /*
    |--------------------------------------------------------------------------
    | Manifest File Path
    |--------------------------------------------------------------------------
    |
    | This value sets the path to the raxm manifest file.
    | The default should work for most cases (which is
    | "<app_root>/bootstrap/cache/raxm-components.php"), but for specific
    | cases like when hosting on Laravel Vapor, it could be set to a different value.
    |
    | Example: for Laravel Vapor, it would be "/tmp/storage/bootstrap/cache/raxm-components.php".
    |
    */

    'manifest_path' => null,

    /*
    |--------------------------------------------------------------------------
    | Back Button Cache
    |--------------------------------------------------------------------------
    |
    | This value determines whether the back button cache will be used on pages
    | that contain raxm. By disabling back button cache, it ensures that
    | the back button shows the correct state of components, instead of
    | potentially stale, cached data.
    |
    | Setting it to "false" (default) will disable back button cache.
    |
    */

    'back_button_cache' => false,

    /*
    |--------------------------------------------------------------------------
    | Render On Redirect
    |--------------------------------------------------------------------------
    |
    | This value determines whether raxm will render before it's redirected
    | or not. Setting it to "false" (default) will mean the render method is
    | skipped when redirecting. And "true" will mean the render method is
    | run before redirecting. Browsers bfcache can store a potentially
    | stale view if render is skipped on redirect.
    |
    */

    'render_on_redirect' => false,

];
