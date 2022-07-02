<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{App\Models\Setting::first()->name}} - @yield('page_name')</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="{{asset("libs/fontawesome-free/css/all.min.css")}}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- Other Styles --}}
        @yield('styles')
    </head>
    <body>
        <div id="app">

            @section('navbar')
                {{-- Navbar --}}
                @include('include.navbar')
            @show

            @section('header')
                {{-- header --}}
                @include('include.header')
            @show

            {{-- Main --}}
            <main class="py-4">
                @yield('content')
            </main>
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- Other scripts --}}
        @yield('scripts')

    </body>
</html>
