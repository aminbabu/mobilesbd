<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * display new user adding form
     *
     */
    public function index(Request $request): View
    {
        return view('backend.pages.users.edit', ['user' => $request->user()]);
    }
}
