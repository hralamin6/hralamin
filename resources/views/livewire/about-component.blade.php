<div>
    <div class="container lg:rounded-2xl bg-white dark:bg-[#111111] px-4 sm:px-5 md:px-10 lg:px-20">
        <div data-aos="fade" class="aos-init aos-animate">
            <div class="py-12">
                <!-- about page title -->
                <h2 class="after-effect after:left-52 font-semibold mt-12 lg:mt-0 text-4xl dark:text-white">About Me</h2>
                <div class="grid grid-cols-12 md:gap-10 pt-4 md:pt-[40px] items-center">
                    <div class="col-span-12 md:col-span-4">
                        <!-- about me image -->
                        <img class="w-full md:w-[330px] md:h-[400px] object-cover overflow-hidden rounded-[35px] mb-3 md:mb-0"
                             src="{{$main->getFirstMediaUrl('about_image', 'thumb')}}" alt="about avatar" />
                    </div>
                    <div class="col-span-12 md:col-span-8 space-y-2.5">
                        <!-- who am i content  -->
                        <div class="md:mr-12 xl:mr-16">
                            <h3 class="text-4xl text-gray-900 font-medium dark:text-white mb-2.5">Who am i?</h3>
                            <p class="text-gray-lite dark:text-color-910 leading-7 text-gray-600"> {{$main->about}} </p>
                        </div>

                        <!-- personal info -->
                        <div>
                            <h3 class="text-4xl font-medium my-5 dark:text-white">Personal Info</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="flex">
                                    <span class="text-green-500 bg-white dark:bg-gray-800 shadow-md mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </span>
                                    <div class="space-y-1">
                                        <p class="text-xs text-gray-500 dark:text-color-910">Phone
                                        </p>
                                        <h6 class="font-medium dark:text-white">{{$main->phone}}</h6>
                                    </div>
                                </div>

                                <div class="flex">
                                                    <span
                                                        class="text-pink-500 bg-white dark:bg-gray-800 shadow-md mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                    <div class="space-y-1">
                                        <p class="text-xs text-gray-500 dark:text-color-910"> Location
                                        </p>
                                        <h6 class="font-medium dark:text-white">{{$main->location}}</h6>
                                    </div>
                                </div>

                                <div class="flex">
                                                    <span
                                                        class="text-purple-500 bg-white dark:bg-gray-800 shadow-md mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-envelope-open-text"></i>
                                                    </span>
                                    <div class="space-y-1">
                                        <p class="text-xs text-gray-500 dark:text-color-910"> Email
                                        </p>
                                        <h6 class="font-medium dark:text-white">{{$main->email}}</h6>
                                    </div>
                                </div>

                                <div class="flex">
                                                    <span
                                                        class="text-indigp-500 bg-white dark:bg-gray-800 shadow-md mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                    <div class="space-y-1">
                                        <p class="text-xs text-gray-500 dark:text-color-910"> Birthday
                                        </p>
                                        <h6 class="font-medium dark:text-white">{{$main->date_of_birth}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- whai i do contain -->
            <div class="pb-12">
                <h3 class="text-[35px] dark:text-white font-medium pb-5"> What I do! </h3>
                <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                    <div class="flex p-6 gap-4 dark:bg-transparent bg-[#fcf4ff]">
                        <img class="w-10 h-10 object-contain block" src="images/icons/icon.svg"
                             alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-2xl font-semibold"> Ui/Ux Design </h3>
                            <p class="leading-8 text-gray-500 dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                        </div>
                    </div>

                    <div class="flex p-6 gap-4 dark:bg-transparent bg-[#fefaf0]">
                        <img class="w-10 h-10 object-contain block" src="images/icons/icon1.svg"
                             alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-2xl font-semibold"> App Development </h3>
                            <p class="leading-8 text-gray-500 dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                        </div>
                    </div>

                    <div class="flex p-6 gap-4 dark:bg-transparent bg-[#fcf4ff]">
                        <img class="w-10 h-10 object-contain block" src="images/icons/icon2.svg"
                             alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-2xl font-semibold"> Photography </h3>
                            <p class="leading-8 text-gray-500 dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                        </div>
                    </div>

                    <div class="flex p-6 gap-4 dark:bg-transparent bg-[#fff4f4]">
                        <img class="w-10 h-10 object-contain block" src="images/icons/icon3.svg"
                             alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-2xl font-semibold"> Photography </h3>
                            <p class="leading-8 text-gray-500 dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                        </div>
                    </div>

                    <div class="flex p-6 gap-4 dark:bg-transparent bg-[#fff0f8]">
                        <img class="w-10 h-10 object-contain block" src="images/icons/icon4.svg"
                             alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-2xl font-semibold"> Managment </h3>
                            <p class="leading-8 text-gray-500 dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                        </div>
                    </div>

                    <div class="flex p-6 gap-4 dark:bg-transparent bg-[#f3faff]">
                        <img class="w-10 h-10 object-contain block" src="images/icons/icon5.svg"
                             alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-2xl font-semibold"> Web Development </h3>
                            <p class="leading-8 text-gray-500 dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- what i do contain end -->
            <div>
                <div class="bg-[#F8FBFB] dark:bg-[#0D0D0D] max-w-full h-auto py-10 rounded-xl">
                    <h3 class="text-center dark:text-white text-3xl mb-3 font-semibold">Clients</h3>
                    <!-- slider and slider items start -->
                    <div class="flex gap-20 px-2 pt-8">
                        <div>
                            <img class="overflow-hidden brand-img" src="images/slider/brand.png"
                                 alt="brand" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="images/slider/brand1.png"
                                 alt="brand" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="images/slider/brand2.png"
                                 alt="brand" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="images/slider/brand3.png"
                                 alt="brand" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="images/slider/brand4.png"
                                 alt="brand" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="images/slider/brand1.png"
                                 alt="brand" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="images/slider/brand1.png"
                                 alt="brand" />
                        </div>
                    </div>
                    <!-- slider and slider items end -->
                </div>
            </div>

            <!-- footer section start -->
            <footer class="overflow-hidden rounded-b-2xl">
                <p class="text-center py-6 text-gray-500 dark:text-color-910"> © {{date('Y')}} All Rights Reserved
                    by <a class="hover:text-[#FA5252] duration-300 transition"
                          href="{{$main->site_url}}" target="_blank"
                          rel="noopener noreferrer">{{$main->name}}</a>. </p>
            </footer>
            <!-- footer section end -->
        </div>
    </div>
</div>
