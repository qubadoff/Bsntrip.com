@extends('frontend.layouts.app')

@section('title', __("Sign up"))

@section('content')

    <div class="register-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-wrapper">
                        <div class="form-title">
                            <h3>{{__("Sign up")}}</h3>
                            <span></span>
                        </div>
                        <div class="register-tab">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">
                                            {{ Session::get('success') }}
                                            @php
                                                \Illuminate\Support\Facades\Session::forget('success');
                                            @endphp
                                        </div>
                                    @endif
                                    @if($errors->any())
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    @endif
                                    <form action="{{ route("auth.register.post", ['locale' => app()->getLocale()]) }}" method="POST">
                                        @csrf
                                        @method("POST")
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="firstname1">{{__("Name")}} *</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('/') }}assets/images/icon/user-2.svg" alt>
                                                        <input type="text" id="name" name="name" placeholder="{{__("Enter your name")}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="lastname1">{{__("Surname")}} *</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('/') }}assets/images/icon/user-2.svg" alt>
                                                        <input type="text" id="surname" name="surname" placeholder="{{__("Enter your surname")}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="email">{{__("Email")}} *</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('/') }}assets/images/icon/email-2.svg" alt>
                                                        <input type="email" id="email" name="email" placeholder="info@example.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="email">{{__("Phone")}} *</label>
                                                    <div class="input-area">
                                                        <img src="{{ asset('/') }}assets/images/icon/phone-2.svg" alt>
                                                        <input type="text" id="phone" name="phone" placeholder="+994505556677">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner mb-25">
                                                    <label for="password">{{__("Password")}} *</label>
                                                    <input type="password" name="password" id="password" placeholder="{{__("Password")}}" />
                                                    <i class="bi bi-eye-slash" id="togglePassword"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-inner">
                                                    <label for="password2">{{__("Confirm Password")}} *</label>
                                                    <input type="password" name="password_confirmation" id="confirm_password" placeholder="{{__("Confirm Password")}}" />
                                                    <i class="bi bi-eye-slash" id="togglePassword2"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-agreement form-inner d-flex justify-content-between flex-wrap">
                                                    <div class="form-group two">
                                                        <input type="checkbox" name="checkbox" id="html1">
                                                        <label for="html1">{{__("Here, I will agree company terms & conditions.")}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-inner">
                                                    <button class="primry-btn-2" type="submit">{{__("Sign up")}}</button>
                                                </div>
                                            </div>
                                            <h6>Already have an account? <a href="{{ route("auth.login", ['locale' => app()->getLocale()]) }}">{{__("Sign in")}}</a></h6>
                                            <div class="login-difarent-way">
                                                <div class="row g-4">
                                                    <div class="col-md-6">
                                                        <a href="#"><img src="{{ asset('/') }}assets/images/icon/google1.svg" alt>{{__("Log in with Google")}}</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="#"><img src="{{ asset('/') }}assets/images/icon/facebook1.svg" alt>{{__("Log in with Facebook")}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
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
