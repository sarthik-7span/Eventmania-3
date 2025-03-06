@extends('layouts.app')

@section('title', 'Ticket View Page')

@section('content')
    <main class="bg-gray-100">
        <div
            class="relative bg-top md:bg-primaryDark bg-cover bg-no-repeat bg-[url('https://picsum.photos/id/237/200/200')]">
            <div class="hidden md:block absolute bg-blur inset-0 z-0">
            </div>
            <div class="flex items-center relative max-w-7xl px-4 py-8 mx-auto gap-4">
                <div class="">
                    <img src="https://picsum.photos/id/237/200/200" alt="Event Banner"
                        class="xs:object-contain rounded-full overflow-hidden relative z-10 md:object-fill shadow-lg w-full h-full md:w-52 md:h-52">
                </div>
                <div>
                    <span class="text-white text-xl font-semibold">Regional Mexican</span>
                    <h1 class="text-white text-3xl font-semibold mt-1">Los Tucanes de Tijuana</h1>
                    <div class="flex gap-4 items-center mt-11">
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
            </div>
        </div>
        <div class="max-w-7xl px-4 py-8 mx-auto grid grid-cols-3 gap-16">
            <div class="space-y-8 col-span-2">
                <div>
                    <h2 class="text-xl text-primaryDark font-semibold">NEAR HOUSTON</h2>
                    <div class="space-y-3 my-4">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-4">
                                <div class="text-center text-primaryDark px-4 py-1.5">
                                    <span class="block text-base">Sep</span>
                                    <span class="block text-2xl font-bold">11</span>
                                </div>
                                <div>
                                    <div class="text-base text-neutral"><span>Wed 8:00 PM</span> • <span>Toyota Center Long
                                            Name</span></div>
                                    <address class="text-neutral text-xl mt-1 not-italic font-semibold">Houston, TX
                                    </address>
                                </div>
                            </div>
                            <button
                                class="bg-primaryLight text-gray900 px-3 py-2 rounded-lg text-base font-bold flex items-center gap-3">
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
                <div>
                    <h2 class="text-xl font-semibold text-primaryDark">About</h2>
                    <p class="text-neutral text-base mt-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Excepturi minima animi blanditiis? Nesciunt atque debitis voluptatem cupiditate harum, maxime, nam
                        reiciendis amet sequi ipsum eaque possimus quam sunt ad laboriosam beatae molestiae tenetur earum
                        in. Officia deserunt quibusdam, enim similique numquam minima? Laudantium dignissimos quos hic
                        distinctio debitis repudiandae fugit quas, expedita delectus deleniti obcaecati qui eius, inventore
                        officiis ea blanditiis labore minima vel! Dicta delectus laudantium asperiores facilis magnam,
                        beatae quasi tempore cupiditate laboriosam accusantium harum fugiat, consequuntur ducimus, tempora
                        vel! Dolor, eius? Quo aliquam explicabo ex commodi aliquid architecto veniam eos, sed vel, obcaecati
                        fugiat, ipsa rem quidem.</p>
                </div>
            </div>
            <div>
                <div class="bg-blue300 relative text-white rounded-xl p-4 shadow-lg">
                    <div class="flex items-center justify-between rounded-sm absolute top-4 right-4">
                        <img src="{{ asset('img/spotify-label.svg') }}" alt="Spotify">
                    </div>
                    <div class="flex items-center gap-4">
                        <img src="https://picsum.photos/id/237/200/200" alt="Podcast Image" class="w-40 h-40 rounded-lg">
                        <div>
                            <h2 class="font-bold text-base text-white">Episode Title</h2>
                            <p class="text-white text-xs mt-1.5 mb-3.5">Podcast Name</p>
                            <button class="mt-2 px-4 py-1 border border-gray-500 rounded-sm text-sm hover:bg-gray-700">
                                Follow
                            </button>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="flex items-center justify-between text-gray-400 text-sm">
                            <span>15</span>
                            <span class="text-white text-xs">00:00</span>
                            <span>15</span>
                        </div>
                        <div class="relative w-full h-1 bg-gray-600 rounded mt-2">
                            <div class="absolute top-0 left-0 w-0 h-full bg-green-500 rounded"></div>
                        </div>

                        <div class="flex items-center justify-between mt-2">
                            <button class="text-gray-400 hover:text-white">
                                ⏪
                            </button>
                            <button class="bg-white text-black p-2 rounded-full hover:bg-gray-300">
                                ▶
                            </button>
                            <button class="text-gray-400 hover:text-white">
                                ⏩
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
