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
        <link rel="stylesheet" href="{{asset('assets/fontaswesome/css/fontawesome.min.css')}}" />
        <link rel="preconnect" href="https://fonts.googleapis.com/" />
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&amp;family=Roboto+Slab:wght@300;400;500;600;700&amp;display=swap"
            rel="stylesheet" />
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

    <body x-data="{nav: false, dark: $persist(false)}" :class="{'dark': dark}" >
    <div class="bg-homeBgs bg-[url('../../public/images/background/bg.jpg')] min-h-screen dark:bg-[url('../../public/images/background/bg-dark.jpg')] bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full">
        <div class="z-50">
            <div class="mx-2 lg:mx-40">
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
