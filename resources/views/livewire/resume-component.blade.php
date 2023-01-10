<section class="bg-white lg:rounded-2xl dark:bg-[#111111]">
    <div data-aos="fade" class="aos-init aos-animate">
        <div class="container sm:px-5 md:px-10 lg:px-20">
            <div class="py-12 px-4 capitalize">
                <h2 class="after-effect after:left-52 font-semibold mt-12 lg:mt-0 text-4xl dark:text-white mb-8">@lang('resume')</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-6">
                    <!-- eductation contain -->
                    <div>
                        <div class="flex items-center space-x-2 mb-4">
                            <i class="fa-solid text-2xl text-[#F95054] fa-graduation-cap"></i>
                            <h4 class="text-2xl dark:text-white font-medium">@lang('education')</h4>
                        </div>

                        @foreach($educations as $i=> $education)
                            <div
                                class="py-4 dark:bg-transparent {{$i%2==0?'bg-green-50':'bg-purple-50'}} pl-5 pr-3 space-y-2 mb-6 rounded-lg dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-500 dark:text-[#b7b7b7]">{{$education->date}}</span>
                                <h3 class="text-xl dark:text-white">{{$education->title}}</h3>
                                <p class="dark:text-[#b7b7b7]">{{$education->institute}}</p>
                            </div>
                        @endforeach


                    </div>

                    <div>
                        <!-- Experience contain -->
                        <div class="flex items-center space-x-2 mb-4">
                            <i class="fa-solid text-2xl text-[#F95054] fa-briefcase"></i>
                            <h4 class="text-2xl dark:text-white font-medium">@lang('experience')</h4>
                        </div>

                        @foreach($experiences as $i=> $experience)
                            <div
                                class="py-4 dark:bg-transparent {{$i%2==0?'bg-green-50':'bg-purple-50'}} pl-5 pr-3 space-y-2 mb-6 rounded-lg dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-500 dark:text-[#b7b7b7]">{{$experience->date}}</span>
                                <h3 class="text-xl dark:text-white">{{$experience->title}}</h3>
                                <p class="dark:text-[#b7b7b7]">{{$experience->institute}}</p>
                            </div>
                        @endforeach

                    </div>

                    <div>
                        <!-- award content -->
                        <div class="flex items-center space-x-2 mb-4">
                            <i class="fa-solid fa-award text-2xl text-[#F95054]"></i>
                            <h4 class="text-2xl dark:text-white font-medium">@lang('reward')</h4>
                        </div>

                        @foreach($rewards as $i=> $reward)
                            <div
                                class="py-4 dark:bg-transparent {{$i%2==0?'bg-green-50':'bg-purple-50'}} pl-5 pr-3 space-y-2 mb-6 rounded-lg dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-500 dark:text-[#b7b7b7]">{{$reward->date}}</span>
                                <h3 class="text-xl dark:text-white">{{$reward->title}}</h3>
                                <p class="dark:text-[#b7b7b7]">{{$reward->institute}}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- working skills -->
        <div class="container bg-[#f8fbfb] dark:bg-[#0D0D0D] py-12 px-4 sm:px-5 md:px-10 lg:px-20">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="col-span-1">
                    <h4 class="text-2xl dark:text-white font-medium mb-6">@lang('working skills')</h4>
                    @foreach($skills as $i=> $skill)
                        <div class="mb-5">
                            <div class="flex justify-between mb-1 capitalize">
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">{{$skill->name}}</span>
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">{{$skill->progress}}%</span>
                            </div>
                            <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                <div class="{{$i%2==0?'bg-[#5185d4]':'bg-[#9272d4]'}} h-1 rounded-full" style="width: {{$skill->progress}}%"></div>
                            </div>
                        </div>
                    @endforeach

                </div>
                </div>
            </div>
        </div>

    <footer class="overflow-hidden rounded-b-2xl capitalize">
        <p class="text-center py-6 text-gray-500 dark:text-color-910"> © {{date('Y')}} @lang('all rights reserved')
            by <a class="text-pink-400 duration-300 transition"
                  href="{{$main->site_url}}" target="_blank">{{$main->name}}</a>. </p>
    </footer>
    </div>
</section>
