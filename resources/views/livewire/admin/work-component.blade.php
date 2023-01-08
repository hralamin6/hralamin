<div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
    <div data-aos="fade" class="aos-init aos-animate">

        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                <form action="" class="mt-6 mb-0 space-y-4 rounded-lg p-8 border capitalize">
                    <p class="text-lg font-medium">@lang('general information')</p>
                    <div class="relative mt-1">
                        <input type="text" wire:model.lazy="title" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter title')"/>
                        @error('title')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div class="relative mt-1">
                        <input type="text" wire:model.lazy="body" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter body')"/>
                        @error('body')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div class="relative mt-1">
                        <input type="url" wire:model.lazy="preview" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter preview')"/>
                        @error('preview')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div  class="relative mt-1">
                        <div wire:ignore>
                            <textarea id="open-source-plugins"  wire:model.defer="details">{!! @$details !!}</textarea>
                        </div>
                        @error('details')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <button wire:click.prevent="save" type="submit" class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">@lang('save')</button>
                </form>
                @if($editmode)
                <form action="" class="mt-6 mb-0 space-y-4 rounded-lg p-8 border capitalize">
                    <p class="text-lg font-medium">@lang('general information')</p>
                    <div class="grid grid-cols-2 gap-4 md:gap-8">
                        <div class="flex-col space-y-2 gap-4"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label for="image" class="flex justify-between gap-2">@lang('choose main image')</label>
                            <input id="image" type="file" class="hidden" wire:model.lazy="main_image">
                        @if ($main_image)<img class="w-16 h-16" src="{{ $main_image->temporaryUrl() }}">@endif
                            <div x-cloak x-show="isUploading"><progress max="100" x-bind:value="progress"></progress></div>
                            @error('main_image')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            <button wire:click.prevent="mainImageUpdate" type="button" class="menu-active w-24 capitalize h-8">@lang('update')</button>
                            <img class="w-16 h-16" src="{{$work->getFirstMediaUrl('image', 'thumb')}}" alt="">
                        </div>
                        <div class="flex-col space-y-2 gap-4"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label for="images" class="cursor-pointer flex justify-between gap-2">@lang('choose images') </label>
                                <input id="images" multiple type="file" class="hidden" wire:model.lazy="images">
                                @if ($images)
                                    @foreach($images as $img)
                                        <img class="w-16 h-16" src="{{ $img->temporaryUrl() }}">
                                    @endforeach
                                @endif
                                @error('images')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            <div x-cloak x-show="isUploading"><progress value="0" :value="progress" class="h-full rounded-full"></progress></div>
                            <button wire:click.prevent="aboutImageUpdate" type="button" class="menu-active w-24 capitalize h-8">@lang('update')</button>
                            @foreach($work->getMedia('images') as $k => $media)
                                <img style="height: 66px; width: 66px;" src="{{$media->getAvailableUrl(['thumb'])}}" alt="asdf">
                                <button class="text-sm font-bold" wire:click.prevent="deleteMedia({{$work}}, {{$k}})">Delete</button>
                            @endforeach
                        </div>
                    </div>
                </form>
                @endif


            </div>
            <div class="mt-6 mb-0 space-y-4 rounded-lg p-8 border capitalize w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                        <th class="px-4 py-3">Sl</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Actions</th>
                    </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >
                    @forelse($works as $i=> $work)
                        <tr wire:key="row-{{ $work->id }}" class="text-gray-700 dark:text-gray-400">
                            <td>{{$i+1}}</td>
                            <td>{{$work->title}}</td>
                            <td class="px-4 py-3 text-xs">
                                <button class="uppercase px-2 py-1 font-semibold leading-tight {{$work->status==='active'?'text-green-700 bg-green-100':'text-red-700 bg-red-100'}}  rounded-full " wire:click.prevent="updateStatus({{ $work->id }})">{{ $work->status }}
                                    <span wire:loading wire:target="updateStatus({{ $work->id }})" class="animate-spin rounded-full h-4 w-4 border-2 border-black"></span></button>
                            </td>
                            <td>{{\Carbon\Carbon::parse($work->created_at)->diffForHumans()}}</td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a data-turbolinks="false" href="{{route('admin.work', $work->id)}}"
                                       class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                       aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                                    </a>
                                    <a wire:click.prevent="confirmDeletion({{ $work->id }})"
                                       class="cursor-pointer flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <center> <h2 class="text-red-600">No cv found</h2> </center>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div>

                {{ $works->links() }}
            </div>


        </div>
    </div>
</div>

@include('components.tinymce')

