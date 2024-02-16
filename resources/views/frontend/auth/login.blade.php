@extends('frontend.layouts.app')

@section('title', __("Sign in"))

@section('content')
    <div class="login-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-wrapper">
                        <div class="form-title">
                            <h3>{{__("Sign in")}}</h3>
                            <span></span>
                        </div>
                        @if(Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                                @php
                                    \Illuminate\Support\Facades\Session::forget('success');
                                @endphp
                            </div>
                        @endif
                        <form action="{{ route("auth.login.post", ['locale' => app()->getLocale()]) }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-inner mb-25">
                                        <label for="email">{{__("Email")}}*</label>
                                        <div class="input-area">
                                            <img src="{{ asset('/') }}assets/images/icon/email-2.svg" alt>
                                            <input type="email" id="email" name="email" placeholder="info@example.com" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <label for="email">{{__("Password")}}*</label>
                                        <input type="password" name="password" id="password" placeholder="{{__("Password")}}" required>
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                        <div class="form-group">
                                            <input type="checkbox" id="html">
                                            <label for="html">{{__("Remember Me")}}</label>
                                        </div>
                                        <a href="{{ route("auth.reset_password", ['locale' => app()->getLocale()]) }}" class="forgot-pass">{{__("Forget Password ?")}}</a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-inner">
                                        <button class="primry-btn-2" type="submit">{{__("Sign in")}}</button>
                                    </div>
                                </div>
                                <h6>Don’t have an account? <a href="{{ route("auth.register", ['locale' => app()->getLocale()]) }}">{{__("Sign up")}}</a></h6>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer2">
        <div class="container">
        </div>
    </footer>

@endsection
