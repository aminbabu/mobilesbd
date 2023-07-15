<?php

/**
 * Determine the request come from admin or not.
 */

use App\Models\Admin;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use PragmaRX\Countries\Package\Countries;

if (!function_exists('isAdminRoute')) {
    function isAdminRoute()
    {
        // wherether request came from admin route or not
        $isAdminRoute = strpos(Route::currentRouteName(), 'dashboard.') === 0;

        return $isAdminRoute;
    }
}

if (!function_exists('isDashboardRoute')) {
    function isDashboardRoute()
    {
        // wherether request came from admin route or not
        $isDashboardRoute = strpos(Route::currentRouteName(), 'dashboard.') === 0;

        return $isDashboardRoute;
    }
}

if (!function_exists('getUserRole')) {
    function getUserRole($role_id)
    {
        $role = Role::find($role_id);

        return $role;
    }
}

if (!function_exists('getAdmins')) {
    function getAdmins()
    {
        $roles = Role::where('name', 'admin')->first();

        return $roles->admins;
    }
}

if (!function_exists('getCountries')) {
    function getCountries()
    {
        $countries = Countries::all()->pluck('name.common', 'cca2')->toArray();

        return $countries;
    }
}