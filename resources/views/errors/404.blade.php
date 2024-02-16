@extends('frontend.layouts.app')

@section('title', "Not Found !")

@section('content')
    <div class="error-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-wrapper">
                        <div class="error-img">
                            <img class="img-fluid" src="assets/images/bg/404.svg" alt>
                        </div>
                        <div class="error-content-area text-center">
                            <h2>Page not found !</h2>
                            <p>
                                This page deleted or moved !
                            </p>
                            <div class="error-btn">
                                <a class="primry-btn-2 lg-btn " href="{{ route("index", ['locale' => app()->getLocale()]) }}">{{__("Back Homepage")}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
