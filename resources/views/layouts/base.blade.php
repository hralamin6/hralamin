<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif
        <link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">
        <link rel="stylesheet" href="{{asset('assets/fontaswesome/css/all.min.css')}}" />
{{--        <link rel="stylesheet" href="{{asset('assets/fontaswesome/css/fontawesome.min.css')}}" />--}}
        @vite(['resources/sass/app.scss'])
{{--        <link rel="stylesheet" href="{{asset('css/tailwind.css')}}"/>--}}
{{--        <link rel="stylesheet" href="{{asset('css/custom.css')}}" />--}}
        @vite(['resources/js/app.js'])
        @livewireStyles
        @livewireScripts
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            [x-cloak] {
                display: none;
            }
        </style>
        @laravelPWA
        @stack('js')
    </head>
    @php
        $main = \App\Models\Setup::first();
    @endphp
    <body x-data="{nav: false, dark: $persist(false)}" :class="{'dark': dark}" >
                @yield('body')
        <script src="{{ asset('js/sa.js') }}"></script>
        <x-livewire-alert::scripts />
        <script src="{{ asset('js/spa.js') }}" data-turbolinks-eval="false"></script>

    </body>
</html>
