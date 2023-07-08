<?php

/**
 * Determine the request come from admin or not.
 */

use App\Models\Admin;
use App\Models\Role;
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
        $role = Role::where('name', 'author')->first();

        $admins = Admin::where('role_id', $role->id)->get();

        return $admins;
    }
}