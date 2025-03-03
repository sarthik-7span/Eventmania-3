@props([
    'placeholder' => __('search'),
    'options' => null,
    'title' => __('searchResults'),
    'isShowSearchTitle' => false,
    'enterEventKey' => 'enterEventSearchData',
    'isEventpageOption' => false,
])

<div class="fixed z-50 inset-0 flex-col bg-black/90 flex md:!hidden" style="display: none" x-show="open">
    <div class="flex items-center gap-2 border-b-2 p-5 bg-primary-600 border-b-gray-800">
        <div class="flex-1">
            <label for="default-search-2" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-primary-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input wire:model.live.debounce.300ms="search" x-ref="searchPopupFocus" id="default-search-2"
                    type="search"
                    class="block w-full px-4 py-2 ps-10 text-sm text-white border font-normal border-primary-800 rounded-lg bg-zinc-800 focus:ring-0 focus:border-primary-600"
                    wire:keydown.enter="{{ $enterEventKey }}" placeholder="{{ $placeholder }}" required>
            </div>
        </div>
        <button @click="open = false"
            class=" h-full px-4 py-2 border border-transparent text-sm font-medium rounded-md text-primary-600 bg-white shadow-sm hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 ">Close</button>
    </div>
    <div class="overflow-y-auto flex-1">
        @if (!$isShowSearchTitle)
            <h3 class="text-xl px-5 py-3 leading-5 font-semibold text-white">{{ $title }}</h3>
        @endif
        <ul>
            @forelse ($options ?? [['title' => 'Dummy Title', 'slug' => 'dummy-slug']] as $option)
                @if ($isEventpageOption)
                    <li class="text-md leading-5 font-medium text-black hover:bg-primary-700">
                        <a class="text-white block px-5 py-3" wire:navigate
                            href="{{ route('event.seat.index', [$option['slug']]) }}">
                            {!! $option['title'] !!}
                        </a>
                    </li>
                @else
                    <li @click="open = false, showDP = false"
                        class="text-md leading-5 font-medium text-white px-5 py-3 hover:bg-primary-700"
                        wire:click="selectedOption('{{ $option['id'] ?? 'dummy-id' }}')">{!! $option['title'] !!}</li>
                @endif
            @empty
                <li class="text-md leading-5 font-medium text-white px-5 py-3">
                    {{ __('noAttributeFound', ['attribute' => __('results')]) }}.
                </li>
            @endforelse
        </ul>
    </div>
</div>
