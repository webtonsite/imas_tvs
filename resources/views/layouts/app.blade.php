<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('admin.includes.navbar')

        <main class="py-4">
            <div class="container">
                <div class="row justify-content-center">
                    @if(Auth::user())
                        <div class="col-md-3">
                            @include('admin.includes.admin_menu') 
                        </div>
                    @endif
                    <div class="col-md-9">

                        @yield('content')

                    </div>
                </div>
            </div>
        </main>

    </div>
</body>
</html>
