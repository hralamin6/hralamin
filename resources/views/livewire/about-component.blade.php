<div>
    <div class="container lg:rounded-2xl bg-white dark:bg-[#111111] px-4 sm:px-5 md:px-10 lg:px-20">
        <div data-aos="fade" class="aos-init aos-animate">
            <div class="py-12">
                <!-- about page title -->
                <h2 class="after-effect after:left-52 font-semibold mt-12 lg:mt-0 text-4xl dark:text-white">@lang('about me')</h2>
                <div class="grid grid-cols-12 md:gap-10 pt-4 md:pt-[40px] items-center">
                    <div class="col-span-12 md:col-span-4">
                        <!-- about me image -->
                        <img class="w-full md:w-[330px] md:h-[400px] object-cover overflow-hidden rounded-[35px] mb-3 md:mb-0"
                             src="{{$main->getFirstMediaUrl('about_image', 'thumb')}}" alt="about avatar" onerror="this.onerror=null;this.src='https://picsum.photos/id/10/600/300';" />
                    </div>
                    <div class="col-span-12 md:col-span-8 space-y-2.5">
                        <!-- who am i content  -->
                        <div class="md:mr-12 xl:mr-16">
                            <h3 class="text-4xl text-gray-900 font-medium dark:text-white mb-2.5 capitalize">@lang('who am i')?</h3>
                            <p class="text-gray-lite dark:text-color-910 leading-7 text-gray-600"> {{$main->about}} </p>
                        </div>

                        <!-- personal info -->
                        <div class="capitalize">
                            <h3 class="text-4xl font-medium my-5 dark:text-white">@lang('personal info')</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div class="flex">
                                    <span class="text-green-500 bg-white dark:bg-gray-800 shadow-md mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </span>
                                    <div class="space-y-1">
                                        <p class="text-xs text-gray-500 dark:text-color-910">@lang('phone')</p>
                                        <h6 class="font-medium dark:text-white">{{$main->phone}}</h6>
                                    </div>
                                </div>

                                <div class="flex">
                                                    <span
                                                        class="text-pink-500 bg-white dark:bg-gray-800 shadow-md mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                    <div class="space-y-1">
                                        <p class="text-xs text-gray-500 dark:text-color-910">@lang('address')</p>
                                        <h6 class="font-medium dark:text-white">{{$main->location}}</h6>
                                    </div>
                                </div>

                                <div class="flex">
                                                    <span
                                                        class="text-purple-500 bg-white dark:bg-gray-800 shadow-md mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-envelope-open-text"></i>
                                                    </span>
                                    <div class="space-y-1">
                                        <p class="text-xs text-gray-500 dark:text-color-910">@lang('email')</p>
                                        <h6 class="font-medium dark:text-white">{{$main->email}}</h6>
                                    </div>
                                </div>

                                <div class="flex">
                                                    <span
                                                        class="text-indigp-500 bg-white dark:bg-gray-800 shadow-md mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                    <div class="space-y-1">
                                        <p class="text-xs text-gray-500 dark:text-color-910">@lang('birthday')</p>
                                        <h6 class="font-medium dark:text-white">{{$main->date_of_birth}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- whai i do contain -->
            <div class="pb-12 capitalize">
                <h3 class="text-[35px] dark:text-white font-medium pb-5">@lang('what i do')! </h3>
                <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                    @foreach($abilities as $i=> $ability)
                    <div class="flex p-6 gap-4 dark:bg-transparent {{$i%2==0?'bg-green-50':'bg-purple-50'}}  dark:border-2 dark:border-gray-700 rounded-md">
               <span class="items-center justify-center rounded-md text-4xl {{$i%2==0?'text-indigo-400':'text-pink-400'}}">
               <i class="{{$ability->icon}}"></i></span>
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-2xl font-semibold">{{$ability->title}}</h3>
                            <p class="leading-8 text-gray-500 dark:text-[#A6A6A6]">{{$ability->body}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <footer class="overflow-hidden rounded-b-2xl capitalize">
                <p class="text-center py-6 text-gray-500 dark:text-color-910"> © {{date('Y')}} @lang('all rights reserved')
                    by <a class="text-pink-400 duration-300 transition"
                          href="{{$main->site_url}}" target="_blank">{{$main->name}}</a>. </p>
            </footer>
        </div>
    </div>
</div>
