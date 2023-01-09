@extends('layouts.base')

@section('body')
    <div class="bg-[url('../../public/images/background/bg.jpg')] min-h-screen dark:bg-[url('../../public/images/background/bg-dark.jpg')]
    bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full font-serif">
        <div class="z-50">
            <div class="lg:mx-40">
    @livewire('header-component')
    @yield('content')
    @isset($slot)
        {{ $slot }}
    @endisset
            </div>
        </div>
    </div>

@endsection
