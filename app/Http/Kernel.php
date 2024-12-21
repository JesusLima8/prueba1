<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     */
    protected $middleware = [
        // Detects and handles changes in the trusted proxies list.
        \Illuminate\Http\Middleware\TrustProxies::class,

        // Identifies and handles CORS requests.
        \Fruitcake\Cors\HandleCors::class,

        // Solves issues with legacy software regarding HTTP/HTTPS traffic.
        \App\Http\Middleware\PreventRequestsDuringMaintenance::class,

        // Allows the application to substitute bindings in the service container.
        \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,

        // Transforms all input to utf8mb4 charset.
        \App\Http\Middleware\TrimStrings::class,

        // Sanitizes input by converting empty strings to null.
        \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,

        // Applies a middleware to handle basic token authentication.
        \Illuminate\Session\Middleware\StartSession::class,

        // Adds cookie support to the application.
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,

        // Ensures the application is protected from CSRF attacks.
        \App\Http\Middleware\VerifyCsrfToken::class,

        // Manages the session configuration.
        \Illuminate\Routing\Middleware\SubstituteBindings::class,
    ];

    /**
     * The application's route middleware groups.
     */
    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\AuthenticateSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \App\Http\Middleware\VerifyCsrfToken::class,
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     */
    protected $routeMiddleware = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
        'cache.headers' => \Illuminate\Http\Middleware\SetCacheHeaders::class,
        'can' => \Illuminate\Auth\Middleware\Authorize::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
        'password.confirm' => \Illuminate\Auth\Middleware\RequirePassword::class,
        'signed' => \Illuminate\Routing\Middleware\ValidateSignature::class,
        'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
        'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,
        'admin' => \App\Http\Middleware\AdminMiddleware::class, // Add your custom admin middleware here
    ];
}

