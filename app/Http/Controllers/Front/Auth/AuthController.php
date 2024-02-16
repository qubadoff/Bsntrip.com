<?php

namespace App\Http\Controllers\Front\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginPostRequest;
use App\Http\Requests\Auth\RegisterPostRequest;
use App\Http\Requests\Auth\ResetPasswordPostRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use PHPUnit\Exception;

class AuthController extends Controller
{
    public function login(): View
    {
        return \view('frontend.auth.login');
    }

    public function loginPost(LoginPostRequest $request): RedirectResponse
    {
        if (! Auth::guard('web')->attempt($request->validated()))
        {
            return back()->with('error', __("Email or Password are incorrect !"));
        }

        return to_route('dashboard.main');
    }

    public function register(): View
    {
        return \view('frontend.auth.register');
    }

    public function registerPost(RegisterPostRequest $request): RedirectResponse
    {
        DB::beginTransaction();

        try {
            User::create($request->validated());

            DB::commit();

            return back()->with('success', 'Registration Completed ! Check your Email !');


        } catch (Exception $exception) {
            DB::rollBack();
            return back()->with('error', $exception);
        }
    }

    public function reset_password(): View
    {
        return \view('frontend.auth.reset_password');
    }

    public function reset_password_post(ResetPasswordPostRequest $request): RedirectResponse
    {
        return back()->with('error', 'Email not found !');
    }
}
