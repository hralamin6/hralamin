<div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
    <div data-aos="fade" class="aos-init aos-animate">

        <div class="mx-auto max-w-screen-xl px-4 py-16 sm:px-6 lg:px-8">
                <form action="" class="mt-6 mb-0 space-y-4 dark:text-gray-200 rounded-lg p-8 border dark:border-gray-600 capitalize">
                    <p class="text-lg font-medium">@lang('general information')</p>
                    <div class="relative mt-1">
                        <input type="text" wire:model.lazy="title" class="w-full dark:text-gray-100 dark:bg-gray-800 dark:border-gray-600 rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter title')"/>
                        @error('title')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div class="relative mt-1">
                        <input type="text" wire:model.lazy="body" class="w-full dark:text-gray-100 dark:bg-gray-800 dark:border-gray-600 rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter body')"/>
                        @error('body')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                    <div class="relative mt-1">
                        <input type="text" wire:model.lazy="icon" class="w-full dark:text-gray-100 dark:bg-gray-800 dark:border-gray-600 rounded-lg border-gray-200 p-4 pr-12 text-sm shadow-sm" placeholder="@lang('enter icon')"/>
                        @error('icon')<p class="text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>

                    <button wire:click.prevent="save" type="submit" class="block w-full rounded-lg bg-indigo-600 px-5 py-3 text-sm font-medium text-white">@lang('save')</button>
                </form>

            <div class="mt-6 mb-0 space-y-4 rounded-lg p-8 border capitalize w-full overflow-x-auto text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <table class="w-full whitespace-no-wrap ">
                    <thead>
                    <tr
                        class="text-xs font-semibold tracking-wide text-left"
                    >
                        <th class="px-4 py-3">@lang('serial')</th>
                        <th class="px-4 py-3">@lang('title')</th>
                        <th class="px-4 py-3">@lang('icon')</th>
                        <th class="px-4 py-3">@lang('status')</th>
                        <th class="px-4 py-3">@lang('date')</th>
                        <th class="px-4 py-3">@lang('action')</th>
                    </tr>
                    </thead>
                    <tbody
                        class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                    >
                    @forelse($items as $i=> $item)
                        <tr wire:key="row-{{ $item->id }}" class="text-gray-700 dark:text-gray-400">
                            <td>{{$i+1}}</td>
                            <td>{{$item->title}}</td>
                            <td><i class="{{$item->icon}}"></i>{{$item->icon}}</a></td>
                            <td class="px-4 py-3 text-xs">
                                <button class="uppercase px-2 py-1 font-semibold leading-tight {{$item->status==='active'?'text-green-700 bg-green-100':'text-red-700 bg-red-100'}}  rounded-full " wire:click.prevent="updateStatus({{ $item->id }})">{{ $item->status }}
                                    <span wire:loading wire:target="updateStatus({{ $item->id }})" class="animate-spin rounded-full h-4 w-4 border-2 border-black"></span></button>
                            </td>
                            <td>{{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a wire:click.prevent="loadData({{ $item->id }})"
                                       class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                       aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                                    </a>
                                    <a wire:click.prevent="confirmDeletion({{ $item->id }})"
                                       class="cursor-pointer flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <center> <h2 class="text-red-600">@lang('the table is empty')</h2> </center>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <div>
                {{ $items->links() }}
            </div>
        </div>
    </div>
</div>


