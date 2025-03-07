@extends('layouts.app')

@section('title', 'Vendor Page')

@section('content')
    <main class="bg-gray-100">
        @include('components.cover')
        <div class="max-w-7xl px-4 pb-8 lg:py-8 mx-auto lg:grid grid-cols-3 gap-16">
            <div class="space-y-8 col-span-2 pt-8 lg:pt-0 border-t border-gray-300 lg:border-0">
                <div>
                    <h2 class="text-xl text-primaryDark font-semibold uppercase">NEAR HOUSTON</h2>
                    <div class="my-4 divide-y divide-gray-200">
                        <div
                            class="flex justify-between items-center py-2.5 px-4 bg-white -mx-4 my-1.5 lg:bg-transparent lg:mx-0 lg:my-0 lg:px-0">
                            <div class="flex items-center gap-4">
                                <div class="w-28 h-28 shrink-0">
                                    <img src="https://picsum.photos/id/237/200/200" alt="Event Banner"
                                        class="rounded overflow-hidden w-full h-full">
                                </div>
                                <div class="space-y-0.5">
                                    <h2 class="text-xl font-semibold text-neutral">
                                        Event Name Max 1 Line Event Name Max 1 Line
                                    </h2>
                                    <p class="text-base text-neutral">
                                        Fri, Sep 29 • 7:00 PM
                                    </p>
                                    <p class="text-base text-neutral">
                                        Venue Name, City, TX Max 1 Line
                                    </p>
                                </div>

                            </div>
                            <button
                                class="hidden whitespace-nowrap bg-primaryLight lg:flex text-gray900 px-3 py-2 rounded-lg text-base font-bold items-center gap-3">
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
                <div class="border-t border-gray-300 pt-8 lg:pt-0 lg:border-0">
                    <h2 class="text-xl font-semibold text-primaryDark uppercase">TRENDING PERFORMERS</h2>
                    <div class="flex gap-4 mt-4">
                        <div class="w-24 h-24">
                            <img src="https://picsum.photos/id/237/200/200" alt="Event Banner"
                                class="rounded-full overflow-hidden w-full h-full">
                        </div>
                        <div class="w-24 h-24">
                            <img src="https://picsum.photos/id/237/200/200" alt="Event Banner"
                                class="rounded-full overflow-hidden w-full h-full">
                        </div>
                    </div>
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
