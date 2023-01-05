<header class="flex justify-between items-center fixed top-0 left-0 w-full lg:static z-[1111111111]">
    <div class="flex justify-between w-full px-4 lg:px-0 bg-[#F3F6F6] lg:bg-transparent dark:bg-black">
        <div class="flex justify-between w-full items-center space-x-4 lg:my-8 my-5">
            <!-- website logo -->
            <a class="text-5xl font-semibold" href="index.html">
                <img class="h-[26px] lg:h-[32px]" src="images/logo/logo.png" alt="logo" />
            </a>
            <div class="flex items-center">
                <!-- light and dark mode button -->
                <button id="theme-toggle-mobile" type="button"
                        class="dark-light-btn lg:hidden w-[44px] h-[44px] ml-2">
                    <i id="theme-toggle-dark-icon-mobile" class="fa-solid text-xl fa-moon hidden"></i>
                    <i id="theme-toggle-light-icon-mobile" class="fa-solid fa-sun text-xl hidden"></i>
                </button>
                <!-- mobile toggle button -->
                <button type="button" class="menu-toggle-btn hidden">
                    <i class="fa-solid fa-bars text-xl "></i>
                    <i class="fa-solid fa-xmark text-xl hidden  "></i>
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
            <li>
                <!-- light and dark mode button -->
                <button x-cloak @click="dark=!dark" type="button" class="rounded-full">
                    <i x-show="!dark" class="menu rounded-full py-2 px-3 fa-solid text-xl fa-moon"></i>
                    <i x-show="dark" class="menu rounded-full py-2 px-3 fa-solid fa-sun text-xl"></i>
                </button>
            </li>
        </ul>
    </nav>

    <!-- mobile menu start -->
    <nav id="navbar" class="hidden lg:hidden">
        <ul
            class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
            <li>
                <a class="mobile-menu-items-active" href="homePage.html">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-solid fa-house"></i>
                                    </span> Home </a>
            </li>
            <li>
                <a class="mobile-menu-items" href="aboutTwo.html">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-regular fa-user"></i>
                                    </span> About </a>
            </li>
            <li>
                <a class="mobile-menu-items" href="resumeTwo.html">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span> Resume </a>
            </li>
            <li>
                <a class="mobile-menu-items" href="portfiloTwo.html">
                                    <span class="mr-2 text-xl">
                                        <i class="fas fa-briefcase"></i>
                                    </span> Works </a>
            </li>
            <li>
                <a class="mobile-menu-items" href="blogTwo.html">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-brands fa-blogger"></i>
                                    </span> Blogs </a>
            </li>
            <li>
                <a class="mobile-menu-items" href="contactTwo.html">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-solid fa-address-book"></i>
                                    </span> Contact </a>
            </li>
            <li>
                <button @click="dark=!dark" type="button" class="dark-light-btn w-[44px] h-[44px] ml-2">
                    <i x-show="!dark" class="fa-solid text-xl fa-moon"></i>
                    <i x-show="dark" class="fa-solid fa-sun text-xl"></i>
                </button>
            </li>
        </ul>
    </nav>
    <!-- mobile menu end -->
</header>
