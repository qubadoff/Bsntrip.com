@extends('frontend.layouts.app')

@section('title', "Many requests!")

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
                            <h2>Opps... Many requests!</h2>
                            <p>
                                Please try again later !
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
