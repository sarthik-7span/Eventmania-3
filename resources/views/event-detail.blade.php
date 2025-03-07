@extends('layouts.app')

@section('title', 'Event Detail')

@section('content')
    <div class="bg-gray550 lg:bg-white overflow-hidden" x-data="{ showMoreInfo: false }">
        <div class="relative bg-cover bg-center bg-no-repeat md:bg-primaryDark">
            <div class="flex items-start relative z-10 flex-col md:flex-row max-w-7xl md:px-4 mx-auto md:py-6 gap-4">
                <div
                    class="xs:h-96 relative w-full md:w-44 md:rounded-lg overflow-hidden md:h-full md:bg-primaryDark bg-cover bg-no-repeat bg-[url('https://picsum.photos/id/237/200/200')]">
                    <div class="md:hidden absolute bg-blur inset-0 z-0">
                    </div>
                    <img src="https://picsum.photos/id/237/200/200" alt="Event Banner"
                        class="xs:object-contain relative z-10 md:object-fill shadow-lg w-full h-full md:w-44 md:h-44">
                </div>
                <div class="flex-1 text-white px-6 md:px-0 lg:pr-36">
                    <span class="font-semibold text-base lg:text-xl text-primaryDark md:text-white">Partner Name</span>
                    <h2
                        class="text-xl leading-6 font-bold text-primaryDark md:text-white md:text-2xl lg:text-3xl md:font-semibold md:leading-9 my-1">
                        Event Name No Maximum Height to Height of Name
                    </h2>
                    <div class="text-gray-600 space-y-1">
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 md:w-5 md:h-5" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-gray200 md:stroke-gray400"
                                    d="M12.3333 1.66669V5.00002M5.66667 1.66669V5.00002M1.5 8.33335H16.5M3.16667 3.33335H14.8333C15.7538 3.33335 16.5 4.07955 16.5 5.00002V16.6667C16.5 17.5872 15.7538 18.3334 14.8333 18.3334H3.16667C2.24619 18.3334 1.5 17.5872 1.5 16.6667V5.00002C1.5 4.07955 2.24619 3.33335 3.16667 3.33335Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="text-sm text-gray200 md:text-2xl md:text-gray400">Fri, Aug 28 • 7:00 PM</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 md:w-5 md:h-5" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-gray200 md:stroke-gray400"
                                    d="M16.5 8.33331C16.5 14.1666 9 19.1666 9 19.1666C9 19.1666 1.5 14.1666 1.5 8.33331C1.5 6.34419 2.29018 4.43653 3.6967 3.03001C5.10322 1.62349 7.01088 0.833313 9 0.833313C10.9891 0.833313 12.8968 1.62349 14.3033 3.03001C15.7098 4.43653 16.5 6.34419 16.5 8.33331Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path class="stroke-gray200 md:stroke-gray400"
                                    d="M9 10.8333C10.3807 10.8333 11.5 9.71402 11.5 8.33331C11.5 6.9526 10.3807 5.83331 9 5.83331C7.61929 5.83331 6.5 6.9526 6.5 8.33331C6.5 9.71402 7.61929 10.8333 9 10.8333Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="text-sm text-gray200 md:text-2xl md:text-gray400">Toyota Center, Houston, TX</p>
                        </div>
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 md:w-5 md:h-5" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path class="stroke-blue-link md:stroke-blue-bright"
                                    d="M10 13.3334V10M10 6.66669H10.0083M18.3333 10C18.3333 14.6024 14.6024 18.3334 10 18.3334C5.39762 18.3334 1.66666 14.6024 1.66666 10C1.66666 5.39765 5.39762 1.66669 10 1.66669C14.6024 1.66669 18.3333 5.39765 18.3333 10Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <a href="/" :href="window.innerWidth >= 1024 ? '/' : '#'"
                                @click="if(window.innerWidth < 1024) { showMoreInfo = true; $event.preventDefault(); }"
                                class="text-sm text-blue-link md:text-2xl font-semibold md:text-blue-bright hover:underline">
                                More Information
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container max-w-7xl px-6 mx-auto pb-6 lg:py-6 space-y-8 ">
            <div class="lg:flex gap-16 pt-8 border-t border-gray100 mt-8 md:mt-0 md:border-0">
                <div class="w-full">
                    <!-- Desktop Table -->
                    <div class="hidden md:block">
                        <table class="w-full border-collapse">
                            <!-- Table Header -->
                            <thead>
                                <tr class="border-b border-black p-4 text-base text-neutral">
                                    <th class="text-left p-4 font-normal w-1/2">Ticket Name</th>
                                    <th class="text-right p-4 font-normal w-1/4">Price</th>
                                    <th class="text-right p-4 font-normal w-1/4">Quantity</th>
                                </tr>
                            </thead>
                            <!-- Table Body -->
                            <tbody class="divide-y divide-gray100">
                                <tr class="py-4">
                                    <td class="p-4">
                                        <div class="font-semibold text-base text-primaryDark">General Admission</div>
                                        <p class="text-neutral text-base">Ticket description 1 line show, overflow use</p>
                                        <a href="#" class="text-blue-link text-base hover:underline">More Info</a>
                                    </td>
                                    <td class="p-4 text-right text-primaryDark">$69.99</td>
                                    <td class="p-4 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            <button
                                                class="bg-gray-200 w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 2H16" stroke="#B2B2B2" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <span class="w-10 font-semibold text-center text-sm">0</span>
                                            <button
                                                class="bg-primaryDark text-white w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 2V16M2 9H16" stroke="#F3F3F3" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="md:hidden space-y-4">
                        <div class="bg-white rounded-lg shadow border border-gray100">
                            <div class="flex justify-between items-center p-2.5 py-4 border-b border-gray100">
                                <div class="font-semibold text-base text-primaryDark">General Admission</div>
                                <div class="flex items-center justify-end space-x-2">
                                    <button
                                        class="bg-gray-200 w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                        <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 2H16" stroke="#B2B2B2" stroke-width="2.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                    <span class="w-10 font-semibold text-center text-sm">0</span>
                                    <button
                                        class="bg-primaryDark text-white w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9 2V16M2 9H16" stroke="#F3F3F3" stroke-width="2.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="p-2.5 pb-4 pt-2 space-y-1">
                                <div class="text-primaryDark text-base font-semibold">$69.99</div>
                                <p class="text-gray200 text-base">Ticket description 1 line show, overflow use</p>
                                <a href="#" class="text-blue-link text-base block">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="w-full">
                    <!-- Desktop Table -->
                    <div class="hidden md:block space-y-2">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="text-base text-neutral">
                                    <th class="text-left p-4 font-normal w-1/2">Ticket Name</th>
                                    <th class="text-right p-4 font-normal w-1/4">Price</th>
                                    <th class="text-right p-4 font-normal w-1/4">Quantity</th>
                                </tr>
                            </thead>
                            <tbody x-data="{ open: true }">
                                <tr @click="open = !open" class="cursor-pointer">
                                    <td colspan="3"
                                        class="bg-gray350 rounded text-white font-bold p-3 uppercase text-sm">
                                        <div class="flex justify-between items-center text-base font-semibold w-full cursor-pointer"
                                            x-data="{ open: false }" @click="open = !open">
                                            General Admission
                                            <svg style="display: none" x-show="open" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr x-show="open">
                                    <td class="p-4">
                                        <div class="font-semibold text-base text-black">Ticket Name</div>
                                        <p class="text-gray-500 text-base">Ticket description 1 line show, overflow
                                            use</p>
                                        <a href="#" class="text-blue-link text-base hover:underline">More Info</a>
                                    </td>
                                    <td class="p-4 text-right text-black text-base">$69.99</td>
                                    <td class="p-4 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            <button
                                                class="bg-gray-200 w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 2H16" stroke="#B2B2B2" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <span class="w-10 font-semibold text-center text-sm">0</span>
                                            <button
                                                class="bg-primaryDark text-white w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 2V16M2 9H16" stroke="#F3F3F3" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="w-full border-collapse">
                            <tbody x-data="{ open: true }">
                                <tr @click="open = !open" class="cursor-pointer">
                                    <td colspan="3"
                                        class="bg-gray350 rounded text-white font-bold p-3 uppercase text-sm">
                                        <div class="flex justify-between items-center text-base font-semibold w-full cursor-pointer"
                                            x-data="{ open: false }" @click="open = !open">
                                            Silver
                                            <svg style="display: none" x-show="open" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7" />
                                            </svg>
                                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7" />
                                            </svg>
                                        </div>
                                    </td>
                                </tr>
                                <tr x-show="open">
                                    <td class="p-4 text-base">
                                        <div class="font-semibold text-base text-black">Ticket Name</div>
                                        <p class="text-gray-500 text-base">Ticket description 1 line show, overflow use</p>
                                        <a href="#" class="text-blue-link text-base hover:underline">More Info</a>
                                    </td>
                                    <td class="p-4 text-right text-base text-black">$69.99</td>
                                    <td class="p-4 text-right">
                                        <div class="flex items-center justify-end space-x-2">
                                            <button
                                                class="bg-gray-200 w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 2H16" stroke="#B2B2B2" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <span class="w-10 font-semibold text-center text-sm">0</span>
                                            <button
                                                class="bg-primaryDark text-white w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 2V16M2 9H16" stroke="#F3F3F3" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Mobile View -->
                    <div class="md:hidden space-y-4">
                        <div x-data="{ open: true }" class="space-y-2">
                            <div @click="open = !open"
                                class="bg-gray350 rounded text-white font-bold p-3 uppercase text-sm flex justify-between cursor-pointer">
                                General Admission
                                <svg style="display: none" x-show="!open" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open" class="space-y-2">
                                <div class="bg-white rounded-lg shadow border border-gray100">
                                    <div class="flex justify-between items-center p-2.5 py-4 border-b border-gray100">
                                        <div class="font-semibold text-base text-primaryDark">General Admission</div>
                                        <div class="flex items-center justify-end space-x-2">
                                            <button
                                                class="bg-gray-200 w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 2H16" stroke="#B2B2B2" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <span class="w-10 font-semibold text-center text-sm">0</span>
                                            <button
                                                class="bg-primaryDark text-white w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 2V16M2 9H16" stroke="#F3F3F3" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-2.5 pb-4 pt-2 space-y-1">
                                        <div class="text-primaryDark text-base font-semibold">$69.99</div>
                                        <p class="text-gray200 text-base">Ticket description 1 line show, overflow use
                                        </p>
                                        <a href="#" class="text-blue-link text-base block">More Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Silver Category -->
                        <div x-data="{ open: true }" class="space-y-2">
                            <div @click="open = !open"
                                class="bg-gray350 rounded text-white font-bold p-3 uppercase text-sm flex justify-between cursor-pointer">
                                Silver
                                <svg style="display: none" x-show="!open" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                            <div x-show="open" class="space-y-2">
                                <div class="bg-white rounded-lg shadow border border-gray100">
                                    <div class="flex justify-between items-center p-2.5 py-4 border-b border-gray100">
                                        <div class="font-semibold text-base text-primaryDark">General Admission</div>
                                        <div class="flex items-center justify-end space-x-2">
                                            <button
                                                class="bg-gray-200 w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="4" viewBox="0 0 18 4" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 2H16" stroke="#B2B2B2" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <span class="w-10 font-semibold text-center text-sm">0</span>
                                            <button
                                                class="bg-primaryDark text-white w-6 h-6 flex items-center justify-center rounded cursor-pointer">
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 2V16M2 9H16" stroke="#F3F3F3" stroke-width="2.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="p-2.5 pb-4 pt-2 space-y-1">
                                        <div class="text-primaryDark text-base font-semibold">$69.99</div>
                                        <p class="text-gray200 text-base">Ticket description 1 line show, overflow use
                                        </p>
                                        <a href="#" class="text-blue-link text-base block">More Info</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- Sidebar (Selected Tickets) -->
                <div class="max-w-[384px] w-full hidden lg:block">
                    <h2 class="text-xl font-semibold mb-4">Selected Tickets</h2>
                    <div class="space-y-4 border-b border-gray100 pb-4">
                        <div class="flex justify-between text-base text-neutral">
                            <span>Table 1</span>
                            <div><span>1</span> x <span> $69.99</span></div>
                        </div>
                    </div>
                    <div class="flex justify-between text-base font-semibold py-4 border-b border-gray100">
                        <span>SUBTOTAL</span>
                        <span>$69.99</span>
                    </div>
                    <div class="text-base text-neutral100 border-b border-gray100 py-4">
                        <div class="flex justify-between">
                            <span>Internet Handling</span>
                            <span>$2.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Payment Gateway</span>
                            <span>$2.00</span>
                        </div>
                        <div class="flex justify-between">
                            <div>Tax Amount <span>(8.25%)</span></div>
                            <span>$5.00</span>
                        </div>
                    </div>
                    <div class="flex justify-between font-bold text-xl py-4">
                        <span>TOTAL</span>
                        <span>$78.99</span>
                    </div>
                    <button
                        class="w-full bg-primaryDark text-danger300 text-xl font-semibold gap-2 flex justify-center items-center p-2.5 rounded-md">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.666992 1.14783H3.33366L5.12033 10.0745C5.18129 10.3814 5.34826 10.6571 5.59202 10.8534C5.83578 11.0496 6.14079 11.1538 6.45366 11.1478H12.9337C13.2465 11.1538 13.5515 11.0496 13.7953 10.8534C14.0391 10.6571 14.206 10.3814 14.267 10.0745L15.3337 4.48116H4.00033M6.66699 14.4812C6.66699 14.8494 6.36852 15.1478 6.00033 15.1478C5.63214 15.1478 5.33366 14.8494 5.33366 14.4812C5.33366 14.113 5.63214 13.8145 6.00033 13.8145C6.36852 13.8145 6.66699 14.113 6.66699 14.4812ZM14.0003 14.4812C14.0003 14.8494 13.7018 15.1478 13.3337 15.1478C12.9655 15.1478 12.667 14.8494 12.667 14.4812C12.667 14.113 12.9655 13.8145 13.3337 13.8145C13.7018 13.8145 14.0003 14.113 14.0003 14.4812Z"
                                stroke="#FEE9E7" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        {{ __('checkout') }}
                    </button>
                </div>
                <div x-data="{ open: false }"
                    class="fixed rounded-t-2xl border-t overflow-hidden border-gray100 z-20 bottom-0 left-0 w-full lg:hidden">
                    <div x-show="open" class="fixed z-0 inset-0 bg-gray650/50"></div>
                    <div class="relative z-30 bg-white">
                        <div @click="open = !open" class="flex justify-between items-center p-6 cursor-pointer">
                            <p class="text-base text-primaryDark">6 Selected</p>
                            <div class="flex gap-1 items-center">
                                <p class="text-base text-primaryDark">Subtotal: $419.94</p>
                                <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="#1e1e1e" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                                <svg x-show="open" style="display: none" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="#1e1e1e" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 15l7-7 7 7" />
                                </svg>
                            </div>
                        </div>
                        <!-- Selected Seats List -->
                        <div x-show="open" style="display: none"
                            class="max-h-480 bg-gray550 overflow-y-auto p-4 space-y-2">
                            <div class="flex justify-between items-start bg-white p-3 rounded-lg">
                                <div>
                                    <p class="text-base font-semibold">Seat Name 1</p>
                                    <p class="text-gray200 text-sm">Standard</p>
                                </div>
                                <div class="flex items-center gap-1">
                                    <p class="font-semibold text-base text-primaryDark">1 x $69.99</p>
                                    <button class="cursor-pointer p-1 hover:animate-bounce">
                                        <img src="{{ asset('/img/dustbin.svg') }}" alt="dustbin icon">
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray100">
                            <button
                                class="w-full cursor-pointer bg-primaryDark text-gray900 text-base md:text-xl font-semibold gap-2 flex justify-center items-center p-3 rounded-md">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.666992 1.14783H3.33366L5.12033 10.0745C5.18129 10.3814 5.34826 10.6571 5.59202 10.8534C5.83578 11.0496 6.14079 11.1538 6.45366 11.1478H12.9337C13.2465 11.1538 13.5515 11.0496 13.7953 10.8534C14.0391 10.6571 14.206 10.3814 14.267 10.0745L15.3337 4.48116H4.00033M6.66699 14.4812C6.66699 14.8494 6.36852 15.1478 6.00033 15.1478C5.63214 15.1478 5.33366 14.8494 5.33366 14.4812C5.33366 14.113 5.63214 13.8145 6.00033 13.8145C6.36852 13.8145 6.66699 14.113 6.66699 14.4812ZM14.0003 14.4812C14.0003 14.8494 13.7018 15.1478 13.3337 15.1478C12.9655 15.1478 12.667 14.8494 12.667 14.4812C12.667 14.113 12.9655 13.8145 13.3337 13.8145C13.7018 13.8145 14.0003 14.113 14.0003 14.4812Z"
                                        stroke="#F5F5F5" stroke-width="1.6" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                {{ __('checkout') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="showMoreInfo" x-cloak
            class="fixed z-50 px-6 py-14 inset-0 bg-black/20 bg-opacity-50 flex items-center justify-center lg:hidden"
            style="display: none;">
            <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/2 py-8 relative h-full my-16 overflow-y-scroll">
                <button @click="showMoreInfo = false"
                    class="absolute text-3xl font-normal top-3 right-4 text-primaryDark hover:text-black">
                    &times;
                </button>
                <div class="container max-w-7xl px-6 mx-auto">
                    <div class="mb-4">
                        <div class="flex items-center gap-3">
                            <div
                                class="bg-primaryDark text-white border-2 border-primaryDark rounded-xl overflow-hidden w-16 h-16 text-sm text-center">
                                <span class="block font-bold text-xl">Aug</span>
                                <span class="block text-black bg-white text-2xl font-bold">28</span>
                            </div>
                            <div>
                                <h3 class="text-2xl font-semibold">Houston TX</h3>
                                <div class="flex items-center space-x-1 text-gray200">
                                    <svg class="w-4 h-4" viewBox="0 0 18 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path class="stroke-gray200"
                                            d="M16.5 8.33331C16.5 14.1666 9 19.1666 9 19.1666C9 19.1666 1.5 14.1666 1.5 8.33331C1.5 6.34419 2.29018 4.43653 3.6967 3.03001C5.10322 1.62349 7.01088 0.833313 9 0.833313C10.9891 0.833313 12.8968 1.62349 14.3033 3.03001C15.7098 4.43653 16.5 6.34419 16.5 8.33331Z"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path class="stroke-gray200"
                                            d="M9 10.8333C10.3807 10.8333 11.5 9.71402 11.5 8.33331C11.5 6.9526 10.3807 5.83331 9 5.83331C7.61929 5.83331 6.5 6.9526 6.5 8.33331C6.5 9.71402 7.61929 10.8333 9 10.8333Z"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <a href="#" class="text-sm">Club Celestial</a>
                                </div>
                            </div>
                        </div>
                        <h2 class="text-xl leading-6 lg:leading-normal font-bold text-primaryDark mt-2">
                            Event Name No Maximum Height to Height of Name
                        </h2>
                    </div>
                    <div class="space-y-8">
                        <div class="flex flex-col gap-8 lg:gap-4 border-t border-gray-300 pt-8 ">
                            <div class="flex-1 space-y-2">
                                <h3 class="text-base font-semibold uppercase">Event Details</h3>
                                <div class="space-y-1 lg:space-y-2">
                                    <p class="text-base"><strong class="font-semibold">Venue:</strong> Venue Name</p>
                                    <p class="text-base"><strong class="font-semibold">Date:</strong> Sat, Sep 29</p>
                                    <p class="text-base"><strong class="font-semibold">Doors:</strong> 7:00 PM</p>
                                    <p class="text-base"><strong class="font-semibold">City:</strong> Houston</p>
                                    <p class="text-base"><strong class="font-semibold">Age:</strong> 18+</p>
                                    <p class="text-base"><strong class="font-semibold">Presented By:</strong>
                                        <a href="#">Partner Name</a>
                                    </p>
                                    <p class="text-base"><strong class="font-semibold">For More Information:</strong>
                                        (123)
                                        123-1234</p>
                                    <p @click="showLineup = true" class="text-base line-clamp-2 cursor-pointer"><strong
                                            class="font-semibold">Lineup:</strong> Band
                                        Name, Band Name, Band Name
                                    </p>
                                </div>
                            </div>
                            <div class="flex-1 space-y-2 border-t border-gray-300 pt-8 ">
                                <h3 class="text-base  font-semibold uppercase">Location</h3>
                                <div class="space-y-1 lg:space-y-2">
                                    <p class="text-base font-semibold">Venue Name</p>
                                    <div class="text-gray-400">
                                        <p>12322 John F Kennedy Blvd</p>
                                        <p>Houston, TX 77039</p>
                                    </div>
                                    <a href="#" class="text-blue-600 flex items-center gap-1">
                                        <img src="{{ asset('img/location-blue.svg') }}" alt="location icon"
                                            class="w-4 h-4">
                                        Get directions
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="space-y-2 border-t border-gray-300 pt-8 ">
                            <h3 class="text-base  font-semibold uppercase">Description</h3>
                            <p>Sing, dance, and experience music from past to present. We're excited to bring XXXX a show
                                you
                                won't
                                forget!...</p>
                        </div>
                        <!-- Disclaimer -->
                        <div class="space-y-2 border-t border-gray-300 pt-8 ">
                            <h3 class="text-base  font-semibold uppercase">Disclaimer</h3>
                            <p>NO REFUNDS</p>
                        </div>
                        <!-- Video -->
                        <div class="space-y-4">
                            <!-- Left Section (Event Poster) -->
                            <div class="flex justify-center rounded-lg">
                                <img src="https://picsum.photos/200/300" alt="Event Poster"
                                    class="w-full lg:w-40 h-auto rounded-lg shadow-md">
                            </div>

                            <!-- Middle Section (YouTube Video) -->
                            <div class="relative w-full lg:col-span-3 rounded-lg overflow-hidden">
                                <iframe class="w-full h-full"
                                    src="https://www.youtube.com/embed/eUNWzJUvkCA?si=-BwjT5OvKTwqCAOV"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>

                            <!-- Right Section (Streaming Links) -->
                            <div class="flex flex-col gap-2.5 rounded-lg">
                                <div class="bg-gray-300 text-black font-semibold py-2 px-4 rounded-lg flex-1 shadow-md">
                                    SPOTIFY
                                </div>
                                <div class="bg-gray-300 text-black font-semibold py-2 px-4 rounded-lg flex-1 shadow-md">
                                    PANDORA
                                    /
                                    spotify
                                    2</div>
                            </div>
                        </div>
                        <!-- Lineup -->
                        <div class="space-y-2 border-t border-gray-300 pt-8 ">
                            <h3 class="text-base  font-semibold uppercase">Lineup</h3>
                            <div class="flex gap-4 overflow-auto">
                                <img src="https://picsum.photos/200/300" class="w-28 h-28 rounded-full shrink-0">
                                <img src="https://picsum.photos/200/300" class="w-28 h-28 rounded-full shrink-0">
                            </div>
                        </div>
                        <!-- For More Information -->
                        <div class="space-y-2 border-t border-gray-300 pt-6">
                            <h3 class="text-base  font-semibold uppercase">For More Information</h3>
                            <div class="flex flex-wrap gap-2 lg:gap-6 items-center">
                                <img src="https://picsum.photos/200/300" class="w-16 h-16 rounded-full">
                                <div>
                                    <h4>Partner Name</h4>
                                    <a href="tel:+11231231234">(123) 123-1234</a>
                                </div>
                                <div class="flex gap-4 w-full">
                                    <img class="w-5 h-5" src="{{ asset('img/facebook.svg') }}" alt="facebook icon">
                                    <img class="w-5 h-5" src="{{ asset('img/twitter.svg') }}" alt="twitter icon">
                                    <img class="w-5 h-5" src="{{ asset('img/instagram.svg') }}" alt="instagram icon">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
