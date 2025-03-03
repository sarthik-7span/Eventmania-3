<div class="bg-primaryDark">
    <div class="max-w-7xl mx-auto px-4">
        <header x-data="{ show: false, showDP: false, location: window.location.pathname }" class="lg:flex justify-between items-center z-50 relativ py-3 lg:py-4 ">
            <div class="flex justify-between items-center w-full lg:w-auto lg:gap-8">
                <a wire:navigate href="#">
                    <img src="{{ asset('img/logo-white-red.svg') }}" alt="Event Mania"
                        class="w-full object-contain h-[40px] max-w-[167px] ">
                </a>
                <ul class="hidden lg:flex lg:items-center lg:gap-6">
                    <li>
                        <a wire:navigate href="#"
                            class="relative cursor-pointer px-1 group font-roboto leading-6 text-base text-white border-transparent whitespace-nowrap hover:font-medium">@lang('events')
                            <span
                                class="absolute -bottom-1 left-0 h-0.5 bg-primary-500 transition-all duration-300 w-0 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li><a wire:navigate href="#"
                            class="relative cursor-pointer px-1 group font-roboto leading-6 text-base text-white border-transparent whitespace-nowrap hover:font-medium">@lang('contactUs')
                            <span
                                class="absolute -bottom-1 left-0 h-0.5 bg-primary-500 transition-all duration-300 w-0 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="#"
                            class="relative cursor-pointer px-1 group font-roboto leading-6 text-base text-white border-transparent whitespace-nowrap hover:font-medium">
                            @lang('aboutUs')
                            <span
                                class="absolute -bottom-1 left-0 h-0.5 bg-primary-500 transition-all duration-300 w-0 group-hover:w-full"></span>
                        </a>
                    </li>
                    <li class="relative">
                        <div x-data="{ open: false, deskOpen: false }" x-cloak>
                            <div class="relative">
                                <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                                    <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill="white" fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input wire:model.live.debounce.300ms="search" @input="deskOpen = true"
                                    autocomplete="off"
                                    @click="deskOpen = true; open = true; $nextTick(() => $refs.searchPopupFocus.focus())"
                                    x-bind:class="{ 'rounded-b-0 rounded-t-md': deskOpen, 'rounded-md': !deskOpen }"
                                    wire:keydown.enter="enterEventSearchData" id="search" name="search"
                                    class="bg-gray350 font-roboto placeholder:text-white text-zinc-50 leading-6 block w-auto xl:!w-96 p-2.5 pl-10 outline-none !rounded-3xl shadow border border-primary-800 focus:ring-0 focus:border-gray-500"
                                    placeholder="{{ __('eventSearchPlaceHolder') }}" type="search">
                            </div>
                            <div class="absolute top-full left-0 right-0 font-roboto overflow-hidden bg-black/90 backdrop-blur-lg rounded-xl hidden md:block z-50 shadow-2xl border border-gray-800 transition-all duration-300"
                                x-show="deskOpen" @click.away="deskOpen = false">
                                <h3
                                    class="text-lg bg-primary-600 px-4 py-2 font-semibold text-white border-b border-gray-900">
                                    {{ __('featuredNearYou') }}
                                </h3>
                                <ul class="divide-y divide-gray-800 max-h-60 overflow-y-auto">
                                    <li>
                                        <a wire:navigate href="#"
                                            class="group flex items-center gap-4 px-4 py-2 text-gray-800 hover:bg-gradient-to-r from-black/70  via-transparent to-transparent transition-all duration-300 ease-in-out">
                                            <div class="flex flex-col group-hover:translate-x-2 duration-300">
                                                <span class="text-sm text-gray-500">
                                                    Dummy Date
                                                </span>
                                                <span class="font-medium text-lg text-white transition-all">
                                                    Dummy Title
                                                </span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="flex justify-between items-center ">
                    <div class="flex sm:hidden">
                        @if (true)
                            <div
                                class="font-roboto leading-6 text-base  text-primary-700 font-semibold flex items-center justify-center bg-[#DFDEE0] rounded-full px-[6px] py-[6px] h-[42px] w-[42px] mr-4 sm:block hidden">
                                <div class="relative">
                                    <div>
                                        <button type="button" @click="showDP = !showDP"
                                            :aria-expanded="showDP ? 'true' : 'false'" :class="{ 'active': showDP }"
                                            class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary-500"
                                            id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <img class="inline-block h-9 w-9 rounded-full" src="dummy-avatar-url"
                                                alt="Dummy User">
                                        </button>
                                    </div>
                                    <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1" x-show="showDP" x-cloak @click.away="showDP = false">
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-500 font-medium hover:bg-gray-100"
                                            role="menuitem" tabindex="-1" id="user-menu-item-0">Admin Dashboard</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-500 font-medium hover:bg-gray-100"
                                            role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-gray-500 font-medium hover:bg-gray-100 border-t border-gray-200"
                                            role="menuitem" tabindex="-1" id="user-menu-item-2"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                                            Out</a>
                                        <form id="logout-form" action="#" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="flex items-center justify-end">
                        <div class="relative flex-shrink-0" @click.away="open = false" x-data="{ open: false }">
                            <div>
                                <button @click="open = !open" class="lg:hidden block">
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 12H18V10H0V12ZM0 7H18V5H0V7ZM0 0V2H18V0H0Z" fill="white" />
                                    </svg>
                                </button>
                            </div>
                            <div x-show="open" x-transition:enter="transition duration-300"
                                x-transition:enter="transform transition ease-in duration-1000"
                                x-transition:enter-start="opacity-0 translate-x-full"
                                x-transition:enter-end="opacity-100 translate-x-0"
                                x-transition:leave="transform transition ease-out duration-1000"
                                x-transition:leave-start="opacity-100 translate-x-0"
                                x-transition:leave-end="opacity-0 translate-x-full"
                                class="fixed right-0 origin-right overflow-y-auto top-0 z-50 w-80 h-screen py-1 bg-zinc-900 shadow-lg focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1" style="display: none;">
                                <div class="flex items-center p-[22px] justify-between">
                                    <a wire:navigate href="#" class="w-auto h-4">
                                        <img class="w-auto h-4" src="{{ asset('img/logo-white-red.svg') }}"
                                            alt="Event mania logo">
                                    </a>
                                    <button type="button" @click="open = false">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="white" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close menu</span>
                                    </button>
                                </div>
                                <div class="border-t border-gray-700">
                                    <div class="space-y-2 py-6">
                                        <a wire:navigate href="#"
                                            class="block px-[22px] py-4 text-base font-medium leading-5 text-white hover:bg-zinc-800">
                                            @lang('home')
                                        </a>
                                        <a wire:navigate href="#"
                                            class="block px-[22px] py-4 text-base font-medium leading-5 text-white hover:bg-zinc-800">
                                            @lang('events')
                                        </a>
                                        <a wire:navigate href="#"
                                            class="block px-[22px] py-4 text-base font-medium leading-5 text-white hover:bg-zinc-800">
                                            @lang('contactUs')
                                        </a>
                                        <a wire:navigate href="#"
                                            class="block px-[22px] py-4 text-base font-medium leading-5 text-white hover:bg-zinc-800">
                                            @lang('aboutUs')
                                        </a>
                                    </div>
                                    <div class="h-[1px] bg-gray-700 mx-4"></div>
                                    @if (true)
                                        <a href="#"
                                            class="block px-[22px] py-4 text-base font-medium leading-5 text-white hover:bg-zinc-800"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign
                                            Out</a>
                                        <form id="logout-form" action="#" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    @else
                                        <div class="space-y-2 py-6">
                                            <a href="#"
                                                class="block px-[22px] py-4 text-base font-medium leading-5 text-white hover:bg-zinc-800">
                                                {{ __('signIn') }}
                                            </a>
                                            <a href="#"
                                                class="block px-[22px] py-4 text-base font-medium leading-5 text-white hover:bg-zinc-800">
                                                {{ __('register') }}
                                            </a>
                                        </div>
                                    @endif
                                    <div class="h-[1px] bg-gray-700 mx-4"></div>
                                    @if (true)
                                        <div class="flex-shrink-0 flex p-4">
                                            <a href="#" class="flex-shrink-0 w-full group block">
                                                <div class="flex items-center">
                                                    <div>
                                                        <img class="inline-block h-9 w-9 rounded-full"
                                                            src="dummy-avatar-url" alt="Dummy User">
                                                    </div>
                                                    <div class="ml-3">
                                                        <p
                                                            class="text-sm font-medium text-white group-hover:opacity-85">
                                                            Dummy User
                                                        </p>
                                                        <p
                                                            class="text-xs font-medium text-gray-500 group-hover:opacity-85">
                                                            {{ __('yourProfile') }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden mob-nav  p-5 lg:p-0 lg:px-0 lg:block bg-black lg:bg-transparent ">
                <ul class="lg:hidden">
                    <li>
                        <a wire:navigate href="#"
                            class="font-roboto leading-6 text-base text-white font-semibold hover:underline">
                            @lang('events')
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="#"
                            class="font-roboto leading-6 text-base text-white font-semibold hover:underline">
                            @lang('contactUs')
                        </a>
                    </li>
                    <li>
                        <a wire:navigate href="#"
                            class="font-roboto leading-6 text-base text-white font-semibold hover:underline">
                            @lang('aboutUs')
                        </a>
                    </li>
                </ul>
            </div>
            <div class="lg:flex hidden lg:items-center lg:justify-between gap-6">
                <a wire:navigate href="#"
                    class="relative cursor-pointer px-1 group font-roboto leading-6 text-base text-white border-transparent whitespace-nowrap hover:font-medium">
                    @lang('support')
                    <span
                        class="absolute -bottom-1 left-0 h-0.5 bg-primary-500 transition-all duration-300 w-0 group-hover:w-full"></span>
                </a>
                @if (true)
                    <div
                        class="font-chivo hidden leading-6 text-base text-primary-700 font-semibold lg:flex items-center justify-center bg-[#DFDEE0] bg-transparent lg:rounded-full px-[6px] py-[6px] h-[42px] w-[42px] mr-4">
                        <div class="relative">
                            <div>
                                <button type="button" @click="showDP = !showDP"
                                    :aria-expanded="showDP ? 'true' : 'false'" :class="{ 'active': showDP }"
                                    class="bg-white rounded-full flex text-sm focus:outline-none focus:ring-2 focus:ring-offset-1 focus:ring-primary-500"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <img class="inline-block h-9 w-9 rounded-full" src="dummy-avatar-url"
                                        alt="Dummy User">
                                </button>
                            </div>
                            <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-primary-800 ring-1 ring-gray-800 ring-opacity-5 focus:outline-none z-10"
                                @click.away="showDP = false" role="menu" aria-orientation="vertical"
                                aria-labelledby="user-menu-button" tabindex="-1" x-show="showDP" x-cloak>
                                <a href="#"
                                    class="block px-4 py-2 text-base text-white font-normal font-roboto hover:bg-primary-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                    Admin Dashboard
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-base text-white font-normal font-roboto hover:bg-primary-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">
                                    Your Profile
                                </a>
                                <a href="#"
                                    class="block px-4 py-2 text-base text-white font-normal font-roboto hover:bg-primary-700 border-t border-gray-800"
                                    role="menuitem" tabindex="-1" id="user-menu-item-2"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Sign Out
                                </a>
                                <form id="logout-form-mobile" action="#" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="lg:flex justify-end lg:items-stretch lg:space-x-8">
                        <div class="lg:space-x-8 mt-2 lg:mt-0">
                            <div class="flex flex-shrink-0 w-full gap-8">
                                <a href="#"
                                    class="font-roboto leading-6 text-base text-primary-600 bg-white font-medium  whitespace-nowrap px-6 py-2.5 rounded-lg hover:bg-gray-100 duration-200">
                                    {{ __('login') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </header>
    </div>
</div>
