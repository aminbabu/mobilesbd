<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Dashboard checking
     *
     */
    public function index(Request $request): View
    {
        $role = Role::find($request->user()->role_id);

        return view('backend.index', ['user' => $request->user(), 'userRole' => $role->name]);
    }
}