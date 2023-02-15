<?php

/**
 * Determine the request come from admin or not.
 */

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;

if (!function_exists('isAdminRoute')) {
    function isAdminRoute()
    {
        // wherether request came from admin route or not
        $isAdminRoute = strpos(Route::currentRouteName(), 'admin.') === 0;

        return $isAdminRoute;
    }
}
