<?php

namespace App\Http\Controllers\Backend;

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
        return view('backend.index', ['user' => $request->user()]);
    }
}
