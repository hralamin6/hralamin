<div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
    <div class="container px-4 sm:px-5 md:px-10 lg:px-[60px]">
        <div class="py-12">
            <h2 class="after-effect after:left-52 font-semibold mt-12 lg:mt-0 text-4xl dark:text-white">@lang('works')</h2>
            <div class="grid-cols-1 lg:grid-cols-2 mt-[30px] grid gap-x-10 gap-y-7 mb-6">
                <div>
                    <div class="rounded-lg mb-2 dark:bg-transparent border dark:border-[#212425] dark:border-2 capitalize">
                        <div class="overflow-hidden">
                            <img class="object-fill cursor-pointer transition duration-200 ease-in-out transform hover:scale-110"
                                 src="{{$work->getFirstMediaUrl('image', 'thumb')}}" alt="blog image"
                                 onerror="this.onerror=null;this.src='https://picsum.photos/id/100/600/300';"/>
                        </div>
                        <div class="p-2">
                            <p class="text-xl text-gray-800 dark:text-gray-100">{{$work->title}}</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">{{$work->body}}</p>
                        </div>
                        <div class="mt-4">
                            <a href="{{$work->preview}}" target="_blank
                            " class="menu capitalize border dark:border-gray-600 text-blue-500 justify-center">@lang('live preview')</a>
                        </div>
                    </div>
                    @foreach($work->getMedia('images') as $k => $media)
                        <div class="overflow-hidden my-4 border">
                            <img class="object-fill cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 my-2" src="{{$media->getAvailableUrl(['thumb'])}}" alt="asdf">
                        </div>
                    @endforeach
                </div>
                <div>
                    {!! $work->details !!}
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
