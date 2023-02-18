<?php

// config for ECDoc/Ecdocs
return [

    /**
     * If you want to cache the API Documentation. Is always false in local.
     */
    'cache' => env('ECDOCS_CACHE', true),

    /**
     * The path that your API resides in. By default, all the routes in the api/ path will be added.
     */
    'api_path' => 'api',

    'info' => [
        /**
         * The current version of your API
         */
        'version' => env('API_VERSION', '0.0.1'),

        /**
         * A description of your api. This is displayed at the homepage of the documentation ('/docs/api').
         */
        'description' => 'This is my awesome api I created.',
    ],

    /**
     * This allows you to change which middlewares you want to have on the documentation. We recommend to leave 'web'.
     *
     * If you remove the RestrictDocumentation middleware, then anyone (even unauthenticated users) can access the documentation.
     */
    'middleware' => [
        'web',
        \ECDoc\Ecdocs\Http\Middleware\RestrictDocumentation::class,
    ],
];
