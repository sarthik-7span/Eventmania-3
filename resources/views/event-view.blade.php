@extends('layouts.app')

@section('title', 'Ticket View Page')

@section('content')
    <div class="bg-white overflow-hidden" x-data="{ showLineup: false }">
        <div class="relative bg-cover bg-center bg-no-repeat md:!bg-[url('https://picsum.photos/id/237/200/300')]">
            <div class="hidden md:block absolute bg-blur inset-0 z-0">
            </div>
            <div
                class="flex relative z-10 flex-col md:flex-row items-center max-w-7xl md:px-4 mx-auto md:py-6 gap-4 md:gap-8">
                <div
                    class="xs:h-96 relative md:w-1/3 w-full md:rounded-lg overflow-hidden md:bg-primaryDark bg-cover bg-no-repeat bg-[url('https://picsum.photos/id/237/200/200')] lg:w-480 md:h-full md:-mb-16">
                    <div class="md:hidden absolute bg-blur inset-0 z-0">
                    </div>
                    <img src="{{ asset('https://picsum.photos/id/237/200/200') }}" alt="Event Banner"
                        class="xs:object-contain relative z-10 md:object-fill shadow-lg w-full h-full lg:w-480 lg:h-480">
                </div>
                <!-- Event Info -->
                <div class="flex-1 text-white px-6 md:px-0">
                    <div class="items-center space-x-4 hidden md:flex">
                        <div
                            class="bg-white text-primary-600 border-2 border-white rounded-xl overflow-hidden w-16 h-16 text-sm text-center">
                            <span class="block font-bold text-xl">Aug</span>
                            <span class="block text-white bg-primary-600 text-2xl font-bold">28</span>
                        </div>
                        <div>
                            <h3 class="text-2xl font-semibold">Houston TX</h3>
                            <div class="flex items-center space-x-2 text-gray450">
                                <img src="{{ asset('img/location.svg') }}" alt="location icon" class="w-5 h-5">
                                <a href="#" class="text-xl font-semibold">Club Celestial</a>
                            </div>
                        </div>
                    </div>
                    <h2
                        class="text-xl leading-6 md:leading-normal font-bold text-primaryDark md:text-white md:text-2xl lg:text-3xl md:font-semibold md:mt-2 md:mb-6">
                        Event Name No Maximum Height to Height of Name
                    </h2>
                    <div class="text-gray-600 mt-1 space-y-1 md:hidden">
                        <div class="flex items-center space-x-1">
                            <svg width="16" height="16" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.3333 1.66669V5.00002M5.66667 1.66669V5.00002M1.5 8.33335H16.5M3.16667 3.33335H14.8333C15.7538 3.33335 16.5 4.07955 16.5 5.00002V16.6667C16.5 17.5872 15.7538 18.3334 14.8333 18.3334H3.16667C2.24619 18.3334 1.5 17.5872 1.5 16.6667V5.00002C1.5 4.07955 2.24619 3.33335 3.16667 3.33335Z"
                                    stroke="#757575" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="text-sm text-gray200">Fri, Aug 28 • 7:00 PM</p>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg width="16" height="16" viewBox="0 0 18 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.5 8.33331C16.5 14.1666 9 19.1666 9 19.1666C9 19.1666 1.5 14.1666 1.5 8.33331C1.5 6.34419 2.29018 4.43653 3.6967 3.03001C5.10322 1.62349 7.01088 0.833313 9 0.833313C10.9891 0.833313 12.8968 1.62349 14.3033 3.03001C15.7098 4.43653 16.5 6.34419 16.5 8.33331Z"
                                    stroke="#757575" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M9 10.8333C10.3807 10.8333 11.5 9.71402 11.5 8.33331C11.5 6.9526 10.3807 5.83331 9 5.83331C7.61929 5.83331 6.5 6.9526 6.5 8.33331C6.5 9.71402 7.61929 10.8333 9 10.8333Z"
                                    stroke="#757575" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <p class="text-sm text-gray200">Toyota Center, Houston, TX</p>
                        </div>
                        <div class="flex items-center space-x-1">
                            <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 13.3334V10M10 6.66669H10.0083M18.3333 10C18.3333 14.6024 14.6024 18.3334 10 18.3334C5.39762 18.3334 1.66666 14.6024 1.66666 10C1.66666 5.39765 5.39762 1.66669 10 1.66669C14.6024 1.66669 18.3333 5.39765 18.3333 10Z"
                                    stroke="#1D4ED8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <a href="#" class="text-sm text-blue-link hover:underline">More Info</a>
                        </div>
                    </div>
                    <div class="flex items-center justify-between gap-4 mt-8 md:mt-0">
                        <button
                            class="cursor-pointer border text-gray900 bg-danger border-dangerLight hover:bg-danger200 md:max-w-52 w-full p-2 md:p-2.5 rounded-lg font-bold text-base lg:text-xl md:text-danger300">
                            Find Tickets
                        </button>
                        <div class="hidden cursor-pointer md:block">
                            <img src="{{ asset('img/share.svg') }}" alt="share icon" class="w-5 h-5 lg:w-8 lg:h-8">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container max-w-7xl px-6 mx-auto pt-8 md:pt-20 pb-6 space-y-8">
            <!-- Event Details -->
            <div class="flex flex-col md:flex-row gap-8 md:gap-4 border-t border-gray-300 pt-8 md:pt-0 md:border-t-0">
                <div class="flex-1 space-y-4 md:p-5">
                    <h3 class="text-base md:text-xl font-semibold uppercase">Event Details</h3>
                    <div class="space-y-1 md:space-y-2">
                        <p class="text-base"><strong class="font-semibold">Venue:</strong> Venue Name</p>
                        <p class="text-base"><strong class="font-semibold">Date:</strong> Sat, Sep 29</p>
                        <p class="text-base"><strong class="font-semibold">Doors:</strong> 7:00 PM</p>
                        <p class="text-base"><strong class="font-semibold">City:</strong> Houston</p>
                        <p class="text-base"><strong class="font-semibold">Age:</strong> 18+</p>
                        <p class="text-base"><strong class="font-semibold">Presented By:</strong>
                            <a href="#">Partner Name</a>
                        </p>
                        <p class="text-base"><strong class="font-semibold">For More Information:</strong> (123) 123-1234</p>
                        <p @click="showLineup = true" class="text-base line-clamp-2 cursor-pointer"><strong
                                class="font-semibold">Lineup:</strong> Band
                            Name, Band Name, Band Name
                        </p>
                    </div>
                </div>
                <div class="flex-1 space-y-4 md:p-5 border-t border-gray-300 pt-8 md:border-t-0">
                    <h3 class="text-base md:text-xl font-semibold uppercase">Location</h3>
                    <div class="space-y-1 md:space-y-2">
                        <p class="text-base font-semibold">Venue Name</p>
                        <div class="text-gray-400">
                            <p>12322 John F Kennedy Blvd</p>
                            <p>Houston, TX 77039</p>
                        </div>
                        <a href="#" class="text-blue-600 flex items-center gap-1">
                            <img src="{{ asset('img/location-blue.svg') }}" alt="location icon" class="w-4 h-4">
                            Get directions
                        </a>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="space-y-2 md:space-y-4 border-t border-gray-300 pt-8 md:pt-0 md:border-t-0">
                <h3 class="text-base md:text-xl font-semibold uppercase">Description</h3>
                <p>Sing, dance, and experience music from past to present. We're excited to bring XXXX a show you won't
                    forget!...</p>
            </div>

            <!-- Disclaimer -->
            <div class="space-y-2 md:space-y-4 border-t border-gray-300 pt-8 md:pt-0 md:border-t-0">
                <h3 class="text-base md:text-xl font-semibold uppercase">Disclaimer</h3>
                <p>NO REFUNDS</p>
            </div>

            <!-- Video -->
            <div class="grid grid-cols-1 md:grid-cols-7 md:h-80 gap-4">
                <!-- Left Section (Event Poster) -->
                <div class="flex justify-center rounded-lg">
                    <img src="https://picsum.photos/200/300" alt="Event Poster"
                        class="w-full md:w-40 h-auto rounded-lg shadow-md">
                </div>

                <!-- Middle Section (YouTube Video) -->
                <div class="relative w-full md:col-span-3 rounded-lg overflow-hidden">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/eUNWzJUvkCA?si=-BwjT5OvKTwqCAOV"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>

                <!-- Right Section (Streaming Links) -->
                <div class="flex flex-col gap-2.5 md:col-span-2 rounded-lg">
                    <div class="bg-gray-300 text-black font-semibold py-2 px-4 rounded-lg flex-1 shadow-md">SPOTIFY</div>
                    <div class="bg-gray-300 text-black font-semibold py-2 px-4 rounded-lg flex-1 shadow-md">PANDORA /
                        spotify
                        2</div>
                </div>
            </div>


            <!-- Lineup -->
            <div class="space-y-2 md:space-y-4 border-t border-gray-300 pt-8 md:pt-0 md:border-t-0">
                <h3 class="text-base md:text-xl font-semibold uppercase">Lineup</h3>
                <div class="flex gap-4 overflow-auto">
                    <img src="https://picsum.photos/200/300" class="w-28 h-28 rounded-full shrink-0">
                    <img src="https://picsum.photos/200/300" class="w-28 h-28 rounded-full shrink-0">
                </div>
            </div>

            <!-- For More Information -->
            <div class="space-y-2 md:space-y-4 border-t border-gray-300 pt-6">
                <h3 class="text-base md:text-xl font-semibold uppercase">For More Information</h3>
                <div class="flex flex-wrap gap-2 md:gap-6 items-center">
                    <img src="https://picsum.photos/200/300" class="w-16 h-16 rounded-full">
                    <div>
                        <h4>Partner Name</h4>
                        <a href="tel:+11231231234">(123) 123-1234</a>
                    </div>
                    <div class="flex gap-4 w-full">
                        <a href="https://www.facebook.com" target="_blank">
                            <img class="w-5 h-5" src="{{ asset('img/facebook.svg') }}" alt="facebook icon">
                        </a>
                        <a href="https://www.twitter.com" target="_blank">
                            <img class="w-5 h-5" src="{{ asset('img/twitter.svg') }}" alt="twitter icon">
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                            <img class="w-5 h-5" src="{{ asset('img/instagram.svg') }}" alt="instagram icon">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Footer Links -->
            <div class="text-base space-x-4 text-blue-600 border-t border-gray-300 pt-6">
                <a class="hover:underline" href="#">Terms & Conditions</a>
                <a class="hover:underline" href="#">Privacy Policy</a>
            </div>
        </div>
        <div x-show="showLineup" x-cloak
            class="fixed z-50  inset-0 bg-black/20 bg-opacity-50 flex items-center justify-center" style="display: none;">
            <div class="bg-white rounded-lg shadow-lg w-11/12 md:w-1/2 pt-8 relative">
                <button @click="showLineup = false"
                    class="absolute text-3xl font-normal top-3 right-4 text-primaryDark hover:text-black">
                    &times;
                </button>
                <h2 class="text-xl px-6 text-primaryDark font-semibold mb-4">Lineup</h2>
                <div class="space-y-4 p-6 max-h-480 overflow-y-auto">
                    <template x-for="i in 5">
                        <a href="#" class="flex items-center space-x-8">
                            <img src="https://picsum.photos/50" class="w-24 h-24 rounded-full" alt="Band">
                            <div class="text-sm">
                                <p class="font-semibold text-primaryDark">Band Name 3 Lines Maximum Shown Band Name 3 Lines
                                    Maximum</p>
                            </div>
                        </a>
                    </template>
                </div>
            </div>
        </div>
    </div>
@endsection
