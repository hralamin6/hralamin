<div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
    <div data-aos="fade" class="aos-init aos-animate">

        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2">

                <form action="" class="mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl capitalize">
                    <p class="text-lg font-medium">@lang('general information')</p>
                        <div class="relative mt-1">
                            <input type="text" wire:model.lazy="name" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter name')"/>
                            @error('name')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="number" wire:model.lazy="phone" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter phone')"/>
                            @error('phone')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="number" wire:model.lazy="phone_two" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter phone two')"/>
                            @error('phone_two')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="date" wire:model.lazy="date_of_birth" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter date of birth')"/>
                            @error('date_of_birth')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="text" wire:model.lazy="designation" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter designation')"/>
                            @error('designation')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="text" wire:model.lazy="location" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter location')"/>
                            @error('location')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="text" wire:model.lazy="site_name" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter site name')"/>
                            @error('site_name')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="url" wire:model.lazy="site_url" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter site url')"/>
                            @error('site_url')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="url" wire:model.lazy="facebook" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter facebook')"/>
                            @error('facebook')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="url" wire:model.lazy="twitter" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter twitter')"/>
                            @error('twitter')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="url" wire:model.lazy="youtube" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter youtube')"/>
                            @error('youtube')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="url" wire:model.lazy="github" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter github')"/>
                            @error('github')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="email" wire:model.lazy="email" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter email')"/>
                            @error('email')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="email" wire:model.lazy="email_two" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter email two')"/>
                            @error('email_two')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div class="relative mt-1">
                            <input type="text" wire:model.lazy="about" class="w-full capitalize rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter about')"/>
                            @error('about')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>

                    <button wire:click.prevent="updateSetup" type="submit" class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">Sign in</button>
                    <p class="text-center text-sm text-gray-500">No account?<a class="underline" href="">Sign up</a></p>
                </form>
                <form action="" class="mt-6 mb-0 space-y-4 rounded-lg p-8 shadow-2xl capitalize">
                    <p class="text-lg font-medium">@lang('general information')</p>
                    <div class="grid grid-cols-2 gap-4 md:gap-8">
                        <div class="flex-col space-y-2 gap-4"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label class="cursor-pointer flex justify-between gap-2">
                                @lang('choose logo') <input type="file" class="hidden" wire:model.lazy="logo">
                                @if ($logo)<img class="w-16 h-16" src="{{ $logo->temporaryUrl() }}">
                                @else<img class="w-16 h-16" src="{{$setup->getFirstMediaUrl('default')}}" alt="logo">@endif
                                @error('logo')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>
                            <button wire:click.prevent="logoUpdate" type="button" class="menu-active w-24 capitalize h-8">@lang('update')</button>
                            <div x-cloak x-show="isUploading"><progress max="100" x-bind:value="progress"></progress></div>
                        </div>
                        <div class="flex-col space-y-2 gap-4"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label class="cursor-pointer flex justify-between gap-2">
                                @lang('choose main image') <input type="file" class="hidden" wire:model.lazy="main_image">
                                @if ($main_image)<img class="w-16 h-16" src="{{ $main_image->temporaryUrl() }}">@endif
                               <img class="w-16 h-16" src="{{$setup->getFirstMediaUrl('main_image', 'thumb')}}" alt="">
                                @error('main_image')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>
                            <div x-cloak x-show="isUploading"><progress max="100" x-bind:value="progress"></progress></div>
                            <button wire:click.prevent="mainImageUpdate" type="button" class="menu-active w-24 capitalize h-8">@lang('update')</button>
                        </div>
                        <div class="flex-col space-y-2 gap-4"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label class="cursor-pointer flex justify-between gap-2">
                                @lang('choose about image') <input type="file" class="hidden" wire:model.lazy="about_image">
                                @if ($about_image)<img class="w-16 h-16" src="{{ $about_image->temporaryUrl() }}">
                                @else <img class="w-16 h-16" src="{{$setup->getFirstMediaUrl('about_image', 'thumb')}}" alt="">@endif
                                @error('about_image')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>
                            <div x-cloak x-show="isUploading"><progress max="100" x-bind:value="progress"></progress></div>
                            <button wire:click.prevent="aboutImageUpdate" type="button" class="menu-active w-24 capitalize h-8">@lang('update')</button>
                        </div>
                        <div class="flex-col space-y-2 gap-4"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false" x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label class="cursor-pointer flex justify-between gap-2">
                                @lang('choose resume') <input type="file" class="hidden" wire:model.lazy="resume">
                                @if ($resume)<img class="w-16 h-16" src="{{ $resume->temporaryUrl() }}">
                                @else <img class="w-16 h-16" src="{{$setup->getFirstMediaUrl('resume', 'thumb')}}" alt="">@endif
                                @error('resume')<span class="text-sm text-red-600 dark:text-red-400">{{ $message }}</span>@enderror
                            </label>
                            <div x-cloak x-show="isUploading"><progress max="100" x-bind:value="progress"></progress></div>
                            <button wire:click.prevent="resumeUpdate" type="button" class="menu-active w-24 capitalize h-8">@lang('update')</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

