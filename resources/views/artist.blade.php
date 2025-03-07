@extends('layouts.app')

@section('title', 'Ticket View Page')

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
                <div class="bg-blue300 relative text-white rounded-xl p-4 shadow-lg">
                    <div class="flex items-start gap-4">
                        <img src="https://picsum.photos/id/237/200/200" alt="Podcast Image"
                            class="w-32 h-32 xl:w-40 xl:h-40 rounded-lg">
                        <div class="flex flex-col gap-7 flex-1">
                            <div class="rounded-sm">
                                <img class="ml-auto" src="{{ asset('img/spotify-label.svg') }}" alt="Spotify">
                            </div>
                            <div>
                                <h2 class="font-bold text-base text-white">Episode Title</h2>
                                <p class="text-white text-xs mt-1.5 mb-3.5">Podcast Name</p>
                                <button class="mt-2 px-4 py-1 border border-gray-500 rounded-sm text-sm hover:bg-gray-700">
                                    Follow
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-2 mt-2 xl:mt-0 xl:gap-4">
                        <div class="flex flex-1 gap-1.5 items-center justify-between text-gray-400 text-sm">
                            <button class="flex items-center justify-center w-8 h-8 rounded-full">
                                <svg width="23" height="18" viewBox="0 0 23 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.463 9.542C1.08 9.837 0.592 9.992 0 10.01V10.92H2.051V17.749H3.306V8.402H2.182C2.09264 8.85827 1.83625 9.26478 1.463 9.542ZM11.153 12.509C10.8787 12.2356 10.5489 12.0242 10.186 11.889C9.61256 11.676 8.99332 11.6171 8.39 11.718C8.02326 11.7784 7.67215 11.911 7.357 12.108C7.201 12.203 7.066 12.318 6.952 12.45L7.553 9.59H11.565V8.402H6.677L5.671 13.187L6.834 13.622C7.05196 13.3428 7.33156 13.1178 7.65094 12.9646C7.97032 12.8114 8.32082 12.7342 8.675 12.739C8.972 12.739 9.244 12.785 9.491 12.877C9.74 12.969 9.955 13.104 10.139 13.278C10.322 13.455 10.465 13.668 10.569 13.918C10.674 14.168 10.727 14.457 10.727 14.782C10.727 15.072 10.677 15.34 10.577 15.586C10.477 15.833 10.337 16.046 10.159 16.226C9.979 16.406 9.765 16.544 9.512 16.641C9.24448 16.7397 8.96112 16.7885 8.676 16.785C8.372 16.785 8.097 16.735 7.853 16.634C7.61647 16.5379 7.39955 16.3993 7.213 16.225C7.02845 16.0515 6.87965 15.8436 6.775 15.613C6.66556 15.3755 6.59694 15.1213 6.572 14.861L5.41 15.151C5.47669 15.9018 5.83018 16.5981 6.397 17.095C6.68 17.345 7.016 17.545 7.403 17.695C7.791 17.845 8.215 17.92 8.677 17.92C9.191 17.92 9.653 17.836 10.062 17.67C10.472 17.503 10.82 17.276 11.108 16.991C11.395 16.705 11.615 16.371 11.768 15.989C11.92 15.607 11.997 15.2 11.997 14.769C11.997 14.295 11.923 13.866 11.775 13.483C11.6371 13.1186 11.4254 12.7866 11.153 12.508V12.509ZM14.959 2.282H7.923V0L3.136 2.789L7.923 5.579V3.295H14.959C18.839 3.295 21.995 6.365 21.995 10.14C21.995 13.914 18.839 16.985 14.959 16.985V18C19.393 18 23 14.474 23 10.14C23 5.808 19.393 2.282 14.96 2.282H14.959Z"
                                        fill="white" fill-opacity="0.5" />
                                </svg>
                            </button>
                            <div class="relative w-full h-1 bg-gray-600 rounded mt-2">
                                <div class="absolute top-0 left-0 w-0 h-full bg-white rounded"></div>
                            </div>
                            <button class="flex items-center justify-center w-8 h-8 rounded-full">
                                <svg width="21" height="18" viewBox="0 0 21 18" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.897 3.264H14.807V5.524L19.507 2.763L14.808 0V2.26H7.898C3.543 2.26 0 5.752 0 10.043C0 14.334 3.543 17.826 7.897 17.826V16.822C4.087 16.822 0.987 13.781 0.987 10.043C0.987 6.305 4.087 3.264 7.897 3.264ZM10.654 9.702C10.278 9.992 9.799 10.147 9.217 10.164V11.065H11.232V17.828H12.464V8.572H11.36C11.266 9.034 11.03 9.41 10.654 9.702ZM20.779 13.605C20.6445 13.2443 20.4368 12.9154 20.169 12.639C19.9002 12.3683 19.5762 12.1589 19.219 12.025C18.8235 11.8778 18.404 11.8052 17.982 11.811C17.811 11.811 17.635 11.826 17.455 11.856C17.0958 11.9177 16.7519 12.0481 16.442 12.24C16.2925 12.332 16.1582 12.4467 16.044 12.58L16.634 9.747H20.574V8.572H15.774L14.786 13.311L15.928 13.741C16.131 13.4747 16.3924 13.2585 16.692 13.109C17.004 12.947 17.352 12.867 17.738 12.867C18.028 12.867 18.296 12.913 18.539 13.005C18.7782 13.0927 18.9963 13.2298 19.179 13.4075C19.3616 13.5851 19.5047 13.7993 19.599 14.036C19.701 14.284 19.752 14.569 19.752 14.892C19.752 15.179 19.703 15.444 19.605 15.688C19.512 15.9243 19.3725 16.1395 19.195 16.321C19.0153 16.5022 18.7987 16.6427 18.56 16.733C18.2975 16.8309 18.0191 16.8794 17.739 16.876C17.439 16.876 17.169 16.826 16.93 16.726C16.69 16.626 16.481 16.492 16.302 16.322C16.1206 16.1495 15.9746 15.9433 15.872 15.715C15.7646 15.4798 15.697 15.2284 15.672 14.971L14.531 15.258C14.5962 16.0005 14.9429 16.6899 15.5 17.185C15.778 17.433 16.107 17.63 16.488 17.778C16.869 17.926 17.286 18 17.74 18C18.2052 18.007 18.6672 17.9227 19.1 17.752C19.502 17.586 19.844 17.362 20.126 17.079C20.409 16.797 20.625 16.466 20.775 16.087C20.9257 15.7022 21.002 15.2923 21 14.879C21.0038 14.4445 20.9289 14.0129 20.779 13.605Z"
                                        fill="white" fill-opacity="0.5" />
                                </svg>
                            </button>
                        </div>
                        <span class="text-white text-xs">00:00</span>
                        <div x-data="{ open: false }" class="relative">
                            <!-- SVG Icon (Trigger) -->
                            <button class="p-2 hover:bg-zinc-800 rounded-md" @click="open = !open">
                                <img src="{{ asset('img/option-dot.svg') }}" alt="option icon">
                            </button>
                            <div x-show="open" style="display: none" @click.away="open = false"
                                class="absolute right-0 mt-2 w-40 shadow-2xl bg-blue300 border border-primaryDark rounded-lg">
                                <ul class="text-white">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:ml-1 duration-300 text-gray-300 hover:text-white">Option
                                            1</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div x-data="{ playing: false }" class="flex items-center justify-center">
                            <button @click="playing = !playing"
                                class="bg-white text-black w-14 h-14 flex items-center justify-center rounded-full shadow-lg hover:bg-gray-300">

                                <!-- Play Icon -->
                                <svg x-show="!playing" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8"
                                    viewBox="0 0 24 24" fill="black">
                                    <polygon points="5,3 19,12 5,21"></polygon>
                                </svg>

                                <!-- Pause Icon -->
                                <svg x-show="playing" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8"
                                    viewBox="0 0 24 24" fill="black">
                                    <rect x="6" y="4" width="4" height="16"></rect>
                                    <rect x="14" y="4" width="4" height="16"></rect>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
