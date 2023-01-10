<div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
    <div data-aos="fade" class="aos-init aos-animate capitalize">
        <div class="container px-4 sm:px-5 md:px-10 lg:px-20">
            <div class="py-12">
                <h2 class="after-effect after:left-52 capitalize font-semibold mt-12 lg:mt-0 text-4xl dark:text-white mb-8">@lang('contact')</h2>
                <div class="lg:flex gap-x-20">
                    <!-- personal contact information -->
                    <div class="w-full lg:w-[40%] xl:w-[30%] space-y-6">
                        <div
                            class="flex flex-wrap bg-[#fcf4ff] dark:bg-transparent p-[30px] dark:border-[#212425] dark:border-2 gap-2 rounded-xl">
                                            <span class="w-8 mt-2">
                                                <img src="images/contact/phone-call.png" alt="icon"
                                                     class="text-4xl dark:text-white" />
                                            </span>
                            <div class="space-y-2">
                                <p class="text-xl font-semibold dark:text-white">@lang('phone') : </p>
                                <p class="text-gray-lite text-lg dark:text-[#A6A6A6]">{{$main->phone}}</p>
                                <p class="text-gray-lite text-lg dark:text-[#A6A6A6]">{{$main->phone_two}}</p>
                            </div>
                        </div>

                        <div
                            class="flex flex-wrap dark:bg-transparent bg-[#eefbff] p-[30px] dark:border-[#212425] dark:border-2 gap-2 rounded-xl">
                                            <span class="w-8 mt-2">
                                                <img src="images/contact/email.png" alt="icon"
                                                     class="text-4xl dark:text-white" />
                                            </span>
                            <div class="space-y-2">
                                <p class="text-xl font-semibold dark:text-white"> @lang('email') : </p>
                                <p class="text-gray-lite text-lg dark:text-[#A6A6A6]">{{$main->email}}</p>
                                <p class="text-gray-lite text-lg dark:text-[#A6A6A6]">{{$main->email_two}}</p>
                            </div>
                        </div>

                        <div
                            class="flex flex-wrap dark:bg-transparent bg-[#f2f4ff] p-[30px] dark:border-[#212425] dark:border-2 gap-2 rounded-xl">
                                            <span class="w-8 mt-2">
                                                <img src="images/contact/map.png" alt="icon"
                                                     class="text-4xl dark:text-white" />
                                            </span>
                            <div class="space-y-2">
                                <p class="text-xl font-semibold dark:text-white"> @lang('address') : </p>
                                <p class="text-gray-lite text-lg dark:text-[#A6A6A6]">{{$main->location}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mt-8 lg:mt-0 lg:w-[60%] xl:w-[70%]">
                        <div data-aos="fade"
                             class="dark:border-[#212425] dark:border-2 mb-16 md:p-[48px] p-4 bg-color-810 rounded-xl dark:bg-[#111111] mb-[30px] md:mb-[60px] aos-init aos-animate">
                            <h3 class="text-lg">
                                <span class="font-semibold dark:text-white">@lang('have you anything to say')</span>
                            </h3>

                            <form id="myForm" action="https://formspree.io/f/xoqrgaab" method="POST">
                                <!-- name input -->
                                <div class="relative z-0 w-full mt-[40px] mb-8 group">
                                    <input type="text" id="name" wire:model.lazy="name" name="name"
                                           class="block autofill:bg-transparent py-2.5 px-0 w-full text-sm text-gray-lite bg-transparent border-0 border-b-[2px] border-[#B5B5B5] appearance-none dark:text-white dark:border-[#333333] dark:focus:border-[#FF6464] focus:outline-none focus:ring-0 focus:border-[#FF6464] peer"
                                           placeholder=" " required="" />
                                    @error('name')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                                    <label for="name"
                                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-color-910 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#FF6464] peer-focus:dark:text-[#FF6464] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">@lang('name')
                                        *</label>
                                </div>

                                <!-- email input  -->
                                <div class="relative z-0 w-full mb-8 group">
                                    <input type="email" wire:model.lazy="email" name="user_email"
                                           class="block autofill:text-red-900 needed py-2.5 px-0 w-full text-sm text-gray-lite bg-transparent border-0 border-b-[2px] border-[#B5B5B5] appearance-none dark:text-white dark:border-[#333333] dark:focus:border-[#FF6464] focus:outline-none focus:ring-0 focus:border-[#5185D4] peer"
                                           placeholder=" " id="user_email" required="" />
                                    @error('email')<p class="text-sm text-red-600">{{ $message }}</p>@enderror

                                    <label for="user_email"
                                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-color-910 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#5185D4] peer-focus:dark:text-[#FF6464] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">@lang('email')
                                        *</label>
                                </div>

                                <!-- massage input -->
                                <div class="relative z-0 w-full mb-8 group">
                                    <input type="text" wire:model.lazy="message" name="message"
                                           class="block autofill:bg-yellow-200 py-2.5 px-0 w-full text-sm text-gray-lite bg-transparent border-0 border-b-[2px] border-[#B5B5B5] appearance-none dark:text-white dark:border-[#333333] dark:focus:border-[#FF6464] focus:outline-none focus:ring-0 focus:border-[#CA56F2] peer"
                                           placeholder=" " id="message" required="" />
                                    @error('message')<p class="text-sm text-red-600">{{ $message }}</p>@enderror

                                    <label for="message"
                                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-color-910 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#CA56F2] peer-focus:dark:text-[#FF6464] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">@lang('message')
                                        *</label>
                                </div>
                                <button class="menu bg-green-300 capitalize" wire:click.prevent="save">@lang('send')</button>
                            </form>
                        </div>
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
</div>
