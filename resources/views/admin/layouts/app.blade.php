<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>
        @yield('title')
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
<body >
<script src="{{ asset('/') }}admin/dist/js/demo-theme.min.js?1684106062"></script>
<div class="page">
    <!-- Navbar -->
    @include('admin.layouts.includes.header')

    <div class="page-wrapper">
        @yield('content')
        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-lg-auto ms-lg-auto">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item"><a href="https://burncode.org/" target="_blank" class="link-secondary" rel="noopener">Documentation</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                Copyright &copy; {{ date('Y') }}
                                <a href="https://burncode.org" target="_blank" class="link-secondary">Burncode systems</a>.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Libs JS -->
<script src="{{ asset('/') }}admin/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>
<script src="{{ asset('/') }}admin/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062" defer></script>
<script src="{{ asset('/') }}admin/dist/libs/jsvectormap/dist/maps/world.js?1684106062" defer></script>
<script src="{{ asset('/') }}admin/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062" defer></script>
<!-- Tabler Core -->
<script src="{{ asset('/') }}admin/dist/js/tabler.min.js?1684106062" defer></script>
<script src="{{ asset('/') }}admin/dist/js/demo.min.js?1684106062" defer></script>
</body>
</html>
