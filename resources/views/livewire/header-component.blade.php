<header x-data="{nav: false}" class="flex justify-between items-center fixed top-0 left-0 w-full lg:static z-10">
    <div class="flex justify-between w-full lg:px-0 bg-[#F3F6F6] lg:bg-transparent dark:bg-black">
        <div class="flex justify-between w-full items-center space-x-4 lg:my-8 my-3">
            <!-- website logo -->
            <a class="mx-2 max-h-10 overflow-hidden object-contain w-24" href="{{route('home')}}">
                <img class="" src="{{$main->getFirstMediaUrl('default')}}" alt="logo"
                     onerror="this.onerror=null;this.src='https://picsum.photos/id/10/600/300';"/>
            </a>
            @auth()
                <div class="lg:hidden">
                    <a wire:click.prevent="logout" class="{{Route::is('logout')?'menu-active':'menu'}} cursor-pointer"><span class="mr-2"><i class="fas fa-sign-out"></i></span>@lang('logout')</a>
                </div>
            @else
                <div class="lg:hidden">
                    <a class="{{Route::is('login')?'menu-active':'menu'}}" href="{{route('login')}}"><span class="mr-2"><i class="fas fa-sign-in"></i></span>@lang('login')</a>
                </div>
            @endauth
            <div class="flex items-center">
                <div class="relative inline-block text-left lg:hidden" x-data="{lang:false}">
                    <div>
                    <span class="rounded-full shadow-sm">
                        <button @click="lang=!lang" @click.stop type="button" class="menu capitalize"><span class="mr-2"><i class="fas fa-language"></i></span> {{session()->get('locale')}}</button>
                    </span>
                    </div>
                    <div x-cloak x-show="lang" @click.outside="lang=false" @click="lang=false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                        <div class="rounded-md bg-white dark:bg-gray-800 shadow-xs">
                            <div class="py-1">
                                <a wire:click.prevent="$set('locale', 'bn')" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('bangla')</a>
                                <a wire:click.prevent="$set('locale', 'en')" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('english')</a>
                                <a wire:click.prevent="$set('locale', 'ar')" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('arabic')</a>
                            </div>
                        </div>
                    </div>
                </div>
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
{{--            <li>--}}
{{--                <a class="{{Route::is('blog')?'menu-active':'menu'}}" href="{{route('blog')}}"><span class="mr-2 text-base"><i class="fa-brands fa-blogger"></i></span>@lang('blog')</a>--}}
{{--            </li>--}}
            <li>
                <a class="{{Route::is('contact')?'menu-active':'menu'}}" href="{{route('contact')}}"><span class="mr-2 text-base"><i class="fa-solid fa-address-book"></i></span>@lang('contact')</a>
            </li>
            @can('isAdmin')
                @auth()
                    <div class="relative inline-block text-left" x-data="{admin:false}">
                        <div>
                    <span class="rounded-md shadow-sm">
                        <button @click="admin=!admin" @click.stop type="button" class="menu capitalize"><span class="mr-2 text-base"><i class="fas fa-dashboard"></i></span> @lang('admin')</button>
                    </span>
                        </div>
                        <div x-cloak x-show="admin" @click.outside="admin=false" @click="admin=false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                            <div class="rounded-md bg-white dark:bg-gray-800 shadow-xs">
                                <div class="py-1">
                                    <a href="{{route('admin.about')}}" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('about')</a>
                                    <a href="{{route('admin.resume')}}" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('resume')</a>
                                    <a href="{{route('admin.skill')}}" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('skill')</a>
                                    <a href="{{route('admin.contact')}}" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('contact')</a>
                                    <a href="{{route('admin.work')}}" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('work')</a>
                                    <a href="{{route('admin.setting')}}" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('setting')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endauth
            @endcan
            <div class="relative inline-block text-left" x-data="{lang:false}">
                <div>
                    <span class="rounded-md shadow-sm">
                        <button @click="lang=!lang" @click.stop type="button" class="menu capitalize"><span class="mr-2 text-base"><i class="fas fa-language"></i></span> {{session()->get('locale')}}</button>
                    </span>
                </div>
                <div x-cloak x-show="lang" @click.outside="lang=false" @click="lang=false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                    <div class="rounded-md bg-white dark:bg-gray-800 shadow-xs">
                        <div class="py-1">
                            <a wire:click.prevent="$set('locale', 'bn')" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('bangla')</a>
                            <a wire:click.prevent="$set('locale', 'en')" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('english')</a>
                            <a wire:click.prevent="$set('locale', 'ar')" class="block px-4 py-2 text-sm leading-5 text-gray-700 dark:text-gray-300 hover:dark:bg-gray-500 hover:bg-gray-300 focus:outline-none focus:bg-gray-300 transition duration-150 ease-in-out">@lang('arabic')</a>
                        </div>
                    </div>
                </div>
            </div>
            @auth()
                <div>
                    <a wire:click.prevent="logout" class="{{Route::is('logout')?'menu-active':'menu'}} cursor-pointer"><span class="mr-2 text-xl"><i class="fas fa-sign-out"></i></span>@lang('logout')</a>
                </div>
            @else
                <div>
                    <a class="{{Route::is('login')?'menu-active':'menu'}}" href="{{route('login')}}"><span class="mr-2 text-xl"><i class="fas fa-sign-in"></i></span>@lang('login')</a>
                </div>
            @endauth
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
{{--            <li>--}}
{{--                <a class="{{Route::is('blog')?'menu-active':'menu'}}" href="{{route('blog')}}"><span class="mr-2 text-xl"><i class="fa-brands fa-blogger"></i></span>@lang('blog')</a>--}}
{{--            </li>--}}
            <li>
                <a class="{{Route::is('contact')?'menu-active':'menu'}}" href="{{route('contact')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-address-book"></i></span>@lang('contact')</a>
            </li>
            @can('isAdmin')
                @auth()
                    <li>
                        <a class="{{Route::is('admin.about')?'menu-active':'menu'}}" href="{{route('admin.about')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-cog"></i></span>@lang('about')</a>
                    </li>
                    <li>
                        <a class="{{Route::is('admin.resume')?'menu-active':'menu'}}" href="{{route('admin.resume')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-cog"></i></span>@lang('resume')</a>
                    </li>
                    <li>
                        <a class="{{Route::is('admin.skill')?'menu-active':'menu'}}" href="{{route('admin.skill')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-cog"></i></span>@lang('skill')</a>
                    </li>
                    <li>
                        <a class="{{Route::is('admin.contact')?'menu-active':'menu'}}" href="{{route('admin.contact')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-cog"></i></span>@lang('contact')</a>
                    </li>
                    <li>
                        <a class="{{Route::is('admin.setting')?'menu-active':'menu'}}" href="{{route('admin.setting')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-cog"></i></span>@lang('setting')</a>
                    </li>
                    <li>
                        <a data-turbolinks="false" class="{{Route::is('admin.work')?'menu-active':'menu'}}" href="{{route('admin.work')}}"><span class="mr-2 text-xl"><i class="fa-solid fa-cog"></i></span>@lang('work')</a>
                    </li>

                @endauth

            @endcan


        </ul>
    </nav>
    <!-- mobile menu end -->
</header>
