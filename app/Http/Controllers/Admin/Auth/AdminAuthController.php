<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginPostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AdminAuthController extends Controller
{
    public function login(): View
    {
        return \view('admin.auth.login');
    }

    public function loginPost(LoginPostRequest $request): RedirectResponse
    {
        if (Auth::guard('admin')->attempt($request->validated()))
        {
            return to_route('admin.dashboard');
        }
        return back()->with('error', 'Invalid Data !');
    }
}
