<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        return \view('admin.dashboard.index');
    }

    public function logout(): RedirectResponse
    {
        \auth('admin')->logout();

        return to_route('admin.login');
    }
}
