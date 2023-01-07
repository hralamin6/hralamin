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

    </head>
    @php
        $main = \App\Models\Setup::first();

    @endphp
    <body x-data="{nav: false, dark: $persist(false)}" :class="{'dark': dark}" >
    <div class="bg-homeBgs bg-[url('../../public/images/background/bg.jpg')] min-h-screen dark:bg-[url('../../public/images/background/bg-dark.jpg')] bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full">
        <div class="z-50">
            <div class="lg:mx-40">
                @include('layouts.header')
                @yield('body')
            </div>
        </div>
    </div>
        <script src="{{ asset('js/sa.js') }}"></script>
        <x-livewire-alert::scripts />
        <script src="{{ asset('js/spa.js') }}" data-turbolinks-eval="false"></script>

    </body>
</html>
