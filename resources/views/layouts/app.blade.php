<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.1.0/classic/ckeditor.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/open-iconic-bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/icomoon.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('inc.nav')

        <section class="probootstrap-cover">
            <div class="container">
                <div class="row {{ Request::is('/') ? 'probootstrap-vh-100 text-center' : 'probootstrap-vh-60 text-left' }} align-items-center">
                    @yield('title')
                </div>
            </div>
        </section>

        <section class="probootstrap-section">
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
        </section>
        
        @include('inc.footer')
    </div>

</body>
</html>
