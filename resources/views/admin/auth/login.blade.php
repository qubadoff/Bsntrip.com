<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>
        Admin Sign in
    </title>
    <!-- CSS files -->
    <link href="{{ asset('/') }}admin/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="{{ asset('/') }}admin/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="{{ asset('/') }}admin/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="{{ asset('/') }}admin/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="{{ asset('/') }}admin/dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <style>
        @import url('https://rsms.me/inter/inter.css');
        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }
        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body  class=" d-flex flex-column">
<script src="{{ asset('/') }}admin/dist/js/demo-theme.min.js?1684106062"></script>
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Burncode systems</h2>
                @if(Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                        @php
                            \Illuminate\Support\Facades\Session::forget('success');
                        @endphp
                    </div>
                @endif
                <form action="{{ route("admin.login.post") }}" method="POST" autocomplete="off" novalidate>
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="your@email.com" autocomplete="off">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">
                            Password
                        </label>
                        <div class="input-group input-group-flat">
                            <input type="password" name="password" class="form-control"  placeholder="Your password"  autocomplete="off">
                        </div>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="{{ asset('/') }}admin/dist/js/tabler.min.js?1684106062" defer></script>
<script src="{{ asset('/') }}admin/dist/js/demo.min.js?1684106062" defer></script>
</body>
</html>
