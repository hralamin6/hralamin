<header x-data="{nav: false}" class="flex justify-between items-center fixed top-0 left-0 w-full lg:static z-[1111111111]">
    <div class="flex justify-between w-full lg:px-0 bg-[#F3F6F6] lg:bg-transparent dark:bg-black">
        <div class="flex justify-between w-full items-center space-x-4 lg:my-8 my-3">
            <!-- website logo -->
            <a class="text-5xl font-semibold" href="index.html">
                <img class="h-[26px] lg:h-[32px]" src="{{$main->getFirstMediaUrl('default')}}" alt="logo" />
{{--                <img class="h-[26px] lg:h-[32px]" src="images/logo/logo.png" alt="logo" />--}}
            </a>
            <div class="flex items-center">
                <!-- light and dark mode button -->
                <button x-cloak @click="dark=!dark" type="button" class="menu py-1 px-2 rounded-full lg:hidden">
                    <i x-show="!dark" class="fa-solid text-xl fa-moon"></i>
                    <i x-show="dark" class="fa-solid fa-sun text-xl"></i>
                </button>
                <!-- mobile toggle button -->
                <button x-cloak @click.prevent="nav=!nav" x-on:click.stop type="button" class="menu py-1 px-2 rounded-full lg:hidden">
                    <i x-show="!nav" class="fa-solid fa-bars text-xl"></i>
                    <i x-show="nav" class="fa-solid fa-xmark text-xl"></i>
                </button>

            </div>
        </div>
    </div>

    <!-- header items two for large screens -->
    <nav class="hidden lg:block">
        <ul class="flex my-12 capitalize">
            <li>
                <a class="{{Route::is('home')?'menu-active':'menu'}}" href="{{route('home')}}"><span class="mr-2 text-base"><i class="fa-solid fa-house"></i></span>@lang('home')</a>
            </li>
            <li>
                <a class="{{Route::is('about')?'menu-active':'menu'}}" href="{{route('about')}}"><span class="mr-2 text-base"><i class="fa-regular fa-user"></i></span>@lang('about')</a>
            </li>
            <li>
                <a class="{{Route::is('resume')?'menu-active':'menu'}}" href="{{route('resume')}}"><span class="mr-2 text-base"><i class="fa-regular fa-file-lines"></i></span>@lang('resume')</a>
            </li>
            <li>
                <a class="{{Route::is('work')?'menu-active':'menu'}}" href="{{route('work')}}"><span class="mr-2 text-base"><i class="fas fa-briefcase"></i></span>@lang('work')</a>
            </li>
            <li>
                <a class="{{Route::is('blog')?'menu-active':'menu'}}" href="{{route('blog')}}"><span class="mr-2 text-base"><i class="fa-brands fa-blogger"></i></span>@lang('blog')</a>
            </li>
            <li>
                <a class="{{Route::is('contact')?'menu-active':'menu'}}" href="{{route('contact')}}"><span class="mr-2 text-base"><i class="fa-solid fa-address-book"></i></span>@lang('contact')</a>
            </li>
            @can('isAdmin')
                <li>
                    <a class="{{Route::is('setting')?'menu-active':'menu'}}" href="{{route('setting')}}"><span class="mr-2 text-base"><i class="fa-solid fa-cog"></i></span>@lang('setting')</a>
                </li>
            @endcan
            <li>
                <a class="{{Route::is('login')?'menu-active':'menu'}}" href="{{route('login')}}"><span class="mr-2 text-base"><i class="fas fa-sign-in"></i></span>@lang('login')</a>
            </li>

            <li>
                <!-- light and dark mode button -->
                <button x-cloak @click="dark=!dark" type="button" class="rounded-full">
                    <i x-show="!dark" class="menu rounded-full py-2 px-3 fa-solid text-xl fa-moon"></i>
                    <i x-show="dark" class="menu rounded-full py-2 px-3 fa-solid fa-sun text-xl"></i>
                </button>
            </li>
        </ul>
    </nav>

    <nav x-cloak @click.outside="nav = false"
         class="lg:hidden shadow-2xl bg-white dark:bg-gray-600 z-10 fixed w-full z-50"
         x-show="nav">
        <ul class="block shadow-md absolute dark:bg-gray-700 left-0 top-7 w-full bg-white capitalize py-2">
            <li>
                <a class="{{Route::is('home')?'menu-active':'menu'}}" href="{{route('home')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-house"></i></span>@lang('home')</a>
            </li>
            <li>
                <a class="{{Route::is('about')?'menu-active':'menu'}}" href="{{route('about')}}"><span class="mr-2 text-xl"><i class="fa-regular fa-user"></i></span>@lang('about')</a>
            </li>
            <li>
                <a class="{{Route::is('resume')?'menu-active':'menu'}}" href="{{route('resume')}}"><span class="mr-2 text-xl"><i class="fa-regular fa-file-lines"></i></span>@lang('resume')</a>
            </li>
            <li>
                <a class="{{Route::is('work')?'menu-active':'menu'}}" href="{{route('work')}}"><span class="mr-2 text-xl"><i class="fas fa-briefcase"></i></span>@lang('work')</a>
            </li>
            <li>
                <a class="{{Route::is('blog')?'menu-active':'menu'}}" href="{{route('blog')}}"><span class="mr-2 text-xl"><i class="fa-brands fa-blogger"></i></span>@lang('blog')</a>
            </li>
            <li>
                <a class="{{Route::is('contact')?'menu-active':'menu'}}" href="{{route('contact')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-address-book"></i></span>@lang('contact')</a>
            </li>
            @can('isAdmin')
                <li>
                    <a class="{{Route::is('setting')?'menu-active':'menu'}}" href="{{route('setting')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-cog"></i></span>@lang('setting')</a>
                </li>
            @endcan
            <li>
                <a class="{{Route::is('login')?'menu-active':'menu'}}" href="{{route('login')}}"><span class="mr-2 text-xl"><i class="fas fa-sign-in"></i></span>@lang('login')</a>
            </li>


        </ul>
    </nav>
    <!-- mobile menu end -->
</header>
