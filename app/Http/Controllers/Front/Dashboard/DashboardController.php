<?php

namespace App\Http\Controllers\Front\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function main(): View
    {
        return view('frontend.dashboard.main');
    }

    public function logout(): RedirectResponse
    {
        \auth('web')->logout();

        return to_route('index');
    }
}
