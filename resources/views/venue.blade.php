@extends('layouts.app')

@section('title', 'Venue Page')

@section('content')
    <main class="bg-gray-100">
        @include('components.cover')
        <div class="max-w-7xl px-4 pb-8 lg:py-8 mx-auto lg:grid grid-cols-3 gap-16">
            <div class="space-y-8 col-span-2 pt-8 lg:pt-0 border-t border-gray-300 lg:border-0">
                <div>
                    <h2 class="text-xl text-primaryDark font-semibold uppercase">NEAR HOUSTON</h2>
                    <div class="my-4 divide-y divide-gray100 lg:divide-y-0">
                        <div class="flex justify-between items-center py-4">
                            <div class="flex items-center gap-4">
                                <div class="text-center text-primaryDark px-4 py-1.5 bg-white rounded lg:bg-transparent">
                                    <span class="block text-base">Sep</span>
                                    <span class="block text-2xl font-bold">11</span>
                                </div>
                                <div>
                                    <div class="text-base text-neutral">
                                        <span>Wed 8:00 PM</span> • <span>Toyota Center Long Name</span>
                                    </div>
                                    <address class="text-neutral text-xl mt-1 not-italic font-semibold">Houston, TX
                                    </address>
                                </div>
                            </div>
                            <span class="lg:hidden">
                                <svg width="10" height="13" viewBox="0 0 6 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 9.57599L5 5.57599L1 1.57599" stroke="#000000" stroke-width="1.6"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <button
                                class="bg-primaryLight whitespace-nowrap hidden lg:flex text-gray900 px-3 py-2 rounded-lg text-base font-bold items-center gap-3">
                                Find Tickets
                                <span>
                                    <svg width="10" height="13" viewBox="0 0 6 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9.57599L5 5.57599L1 1.57599" stroke="#F5F5F5" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-300 pt-8 lg:pt-0 lg:border-0">
                    <h2 class="text-xl font-semibold text-primaryDark uppercase">SEATING CHART</h2>
                    <div class="bg-gray100 relative text-primaryDark p-4 mt-4">
                        Seating Chart
                    </div>
                </div>
                <div class="flex gap-6 items-center justify-center lg:hidden">
                    <a href="#" class="text-white text-lg"><img src="{{ asset('img/instagram-color.svg') }}"
                            alt=""></a>
                    <a href="#" class="text-white text-lg"><img src="{{ asset('img/facebook-color.svg') }}"
                            alt=""></a>
                    <a href="#" class="text-white text-lg"><img src="{{ asset('img/tik-tok.svg') }}"
                            alt=""></a>
                    <a href="#" class="text-white text-lg"><img src="{{ asset('img/youtube-music.svg') }}"
                            alt=""></a>
                    <a href="#" class="text-white text-lg"><img src="{{ asset('img/spotify.svg') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="hidden lg:block">
                <div class="bg-gray100 relative text-primaryDark rounded-xl p-4 shadow-lg">
                    AD SPACE
                </div>
            </div>
        </div>
    </main>
@endsection
