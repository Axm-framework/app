<?php

return
    [
        /**
         * --------------------------------------------------------------------------
         * Maintenance App
         * --------------------------------------------------------------------------
         *
         * Indica si el sitio esta en mantenimiento, muestra una vista
         * para informarlo.
         * @var bool 
         */
        'maintenance' => false,      // true || false

        /**
         * --------------------------------------------------------------------------
         * User Class
         * --------------------------------------------------------------------------
         *
         * Esta variable guarda la (models class) que gestiona los usuarios, esto facilita
         * la authencicaión y el acceso al control de rutas.
         * @var string
         */
        'userClass' => 'App\Models\User',

        /**
         * --------------------------------------------------------------------------
         * User ID
         * --------------------------------------------------------------------------
         *
         * Identifica el nombre(key) que tendrá la sección de usuario, ej:$_SESSION['userid'].
         * la cual sirve para la authencicaión y el acceso al control de rutas
         * @var string
         */
        'userId' => 'uid',

        /**
         * --------------------------------------------------------------------------
         * Info Web Site
         * --------------------------------------------------------------------------
         *
         * Esta variable guarda la información de la aplicacion, nos srvie para 
         * llenar las (meta content) de nuestri sitio web
         * @var array
         */
        'info' => [

            'title'       => 'My app',
            'image'       => 'https://www.midominio.com/public/assets/img/logo.png',
            'description' => 'my description',
            'author'      => 'myname',
            'url'         => 'https://www.midominio.com/',
            'version'     => '1.0',
            'name'        => 'my name pp'
        ],

        /**
         * --------------------------------------------------------------------------
         * Paginas de error
         * --------------------------------------------------------------------------
         * Usted puede personalizar las vistas de errores que vienen por defecto en Axm
         * o crear las suyas propia modificando las rutas donde se encuentran sus 
         * vista personalizadas.
         * 
         * @var array
         */
        'errorPages' => [

            '403' => 'Axm/Views/error403',
            '404' => 'Axm/Views/error404',
            '500' => 'Axm/Views/error500',
            '503' => 'Axm/Views/error503',
        ],

        /**
         * --------------------------------------------------------------------------
         * Iniciador de Archivo Log
         * --------------------------------------------------------------------------
         * Si esta propiedad esta en true, se creará en la carpeta raiz de la app un archivo log.log 
         * con el registro de los errores graves.
         * 
         * @var bool
         */
        'iniLogReportings' => true,  //  true | false        

        /** --------------------------------------------------------------------------
         * Default Language
         * --------------------------------------------------------------------------
         *
         * The Locale roughly represents the language and location that your visitor
         * is viewing the site from. It affects the language strings and other
         * strings (like currency markers, numbers, etc), that your program
         * should run under for this request.
         * @var string   */
        'defaultLanguage' => 'Spanish',

        /**
         * --------------------------------------------------------------------------
         * Default Locale
         * --------------------------------------------------------------------------
         *
         * The Locale roughly represents the language and location that your visitor
         * is viewing the site from. It affects the language strings and other
         * strings (like currency markers, numbers, etc), that your program
         * should run under for this request.
         * @var string     */
        'defaultLocale' => 'es',

        /**
         * --------------------------------------------------------------------------
         * Application Timezone
         * --------------------------------------------------------------------------
         *
         * The default timezone that will be used in your application to display
         * dates with the date helper, and can be retrieved through app_timezone()
         * @var string  */
        'appTimezone' => 'America/Chicago',


        /**
         * --------------------------------------------------------------------------
         * Default Character Set
         * --------------------------------------------------------------------------
         *
         * This determines which character set is used by default in various methods
         * that require a character set to be provided.
         * @see http://php.net/htmlspecialchars for a list of supported charsets.
         * @var string   */
        'charset' => 'UTF-8',

        /**
         * --------------------------------------------------------------------------
         * Session Expiration
         * --------------------------------------------------------------------------
         *
         * The number of SECONDS you want the session to last.
         * Setting to 0 (zero) means expire when the browser is closed.
         * 60 = 1min | 120 = 2min | 300 = 5min | 600 = 10min | 1200 = 20 min|etc
         * @var int  */
        'sessionExpiration' => 60000000000000000,

        /**
         * --------------------------------------------------------------------------
         * CSRF Regenerate
         * --------------------------------------------------------------------------
         *
         * Regenerate token on every submission?
         * @var bool  */
        'CSRFRegenerate' => true,

        /**
         * --------------------------------------------------------------------------
         * CSRF Redirect
         * --------------------------------------------------------------------------
         *
         * Redirect to previous page with error on failure?
         * @var bool
         */
        'CSRFRedirect' => true,

        /**
         * --------------------------------------------------------------------------
         * forceGlobalSecureRequests
         * --------------------------------------------------------------------------
         *
         * Forzar sheme a https.
         * if is false then http:// else https://
         *
         * @var bool
         */
        'forceGlobalSecureRequests' => false,  //  true | false

        /**
         * --------------------------------------------------------------------------
         * DebugBar
         * --------------------------------------------------------------------------
         * Si esta propiedad esta en true, muestra la barra de depuracion
         * @var bool
         */
        'openDebugBar' => true   //  true | false 
    ];
