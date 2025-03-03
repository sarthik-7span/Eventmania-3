@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="bg-white overflow-hidden">
        <div class="bg-transparent md:bg-black">
            <div class="flex flex-col md:flex-row items-center max-w-7xl md:px-4 mx-auto pb-4 md:py-6 gap-4 md:gap-8">
                <!-- Event Poster -->
                <div class="w-full h-96 md:w-1/3 lg:w-480 md:h-full md:-mb-16">
                    <img src="{{ asset('https://picsum.photos/id/237/200/300') }}" alt="Event Banner"
                        class="md:rounded-3xl overflow-hidden shadow-lg w-full h-full lg:w-480 lg:h-480">
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
                    <h2 class="text-xl text-primaryDark md:text-white md:text-2xl lg:text-3xl font-semibold mt-2 mb-6">
                        Event Name No Maximum Height to Height of Name
                    </h2>
                    <div class="flex items-center justify-between gap-4">
                        <button
                            class="cursor-pointer border bg-danger border-dangerLight hover:bg-danger200 md:max-w-52 w-full p-2.5 rounded-lg font-bold text-xl text-danger300">
                            Find Tickets
                        </button>
                        <div class="hidden md:block">
                            <img src="{{ asset('img/share.svg') }}" alt="share icon" class="w-5 h-5 lg:w-8 lg:h-8">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container max-w-7xl px-4 mx-auto pt-20 pb-6 space-y-8">
            <div class="flex gap-4">
                <div class="flex-1 space-y-4 p-5">
                    <h3 class="text-xl font-semibold uppercase">Event Details</h3>
                    <div class="space-y-2">
                        <p class="text-base"><strong class="font-semibold">Venue:</strong> Venue Name</p>
                        <p class="text-base"><strong class="font-semibold">Date:</strong> Sat, Sep 29</p>
                        <p class="text-base"><strong class="font-semibold">Doors:</strong> 7:00 PM</p>
                        <p class="text-base"><strong class="font-semibold">City:</strong> Houston</p>
                        <p class="text-base"><strong class="font-semibold">Age:</strong> 18+</p>
                        <p class="text-base"><strong class="font-semibold">Presented By:</strong> Partner Name</p>
                        <p class="text-base"><strong class="font-semibold">For More Information:</strong> (123) 123-1234</p>
                        <p class="text-base"><strong class="font-semibold">Artists:</strong> Band Name, Band Name, Band Name
                            Band Name, Band Name Band N</p>
                    </div>
                </div>
                <div class="flex-1 space-y-4 p-5">
                    <h3 class="text-xl font-semibold uppercase">Location</h3>
                    <div class="space-y-2">
                        <p class="text-base font-semibold">Venue Name</p>
                        <div class="text-gray200">
                            <p>12322 John F Kennedy Blvd</p>
                            <p>Houston, TX 77039</p>
                        </div>
                        <a href="#" class="text-blue-link flex items-center gap-1">
                            <img src="{{ asset('img/location-blue.svg') }}" alt="location icon" class="w-4 h-4">
                            Get directions
                        </a>
                    </div>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-xl font-semibold uppercase">Description</h3>
                <div>
                    <p>
                        Sing, dance, and experience music from past to present. We're excited to bring XXXX a show you won't
                        forget!
                        Welcome to our upcoming event! Immerse yourself in a memorable experience.
                        LEGAL: Must be 18+ to attend. As a condition of your attendance at "EVENT NAME", you agree and
                        irrevocably consent to your image and/or likeness being captured on film and or video, the benefit
                        of which shall vest in PARTNER NAME, it's licensees, successors and assigns, and may be distributed
                        throughout the world in perpetuity, without limitation. All sales are final. With RSVP and/or ticket
                        purchase you agree to receive communications from COLORS WORLDWIDE INC.</p>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-xl font-semibold uppercase">Disclaimer</h3>
                <div>
                    <p>NO REFUNDS</p>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-xl font-semibold uppercase">Video</h3>
                <div class="relative w-full h-56">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/videoID" allowfullscreen></iframe>
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-xl font-semibold uppercase">Lineup</h3>
                <div class="flex space-x-4">
                    <img src="https://picsum.photos/200/300" class="w-28 h-28 rounded-full">
                    <img src="https://picsum.photos/200/300" class="w-28 h-28 rounded-full">
                </div>
            </div>
            <div class="space-y-4">
                <h3 class="text-xl font-semibold uppercase">FOR MORE INFORMATION</h3>
                <div class="flex gap-6 items-center">
                    <img src="https://picsum.photos/200/300" class="w-16 h-16 rounded-full">
                    <div>
                        <h4>Partner Name</h4>
                        <a href="tel:+11231231234">(123) 123-1234</a>
                    </div>
                    <div class="flex gap-4">
                        <img class="w-5 h-5" src="{{ asset('img/facebook.svg') }}" alt="facebook icon">
                        <img class="w-5 h-5" src="{{ asset('img/twitter.svg') }}" alt="twitter icon">
                        <img class="w-5 h-5" src="{{ asset('img/instagram.svg') }}" alt="instagram icon">
                    </div>
                </div>
            </div>
            <div class="text-base space-x-4 text-blue-link">
                <a class="hover:underline" href="#">Terms & Conditions</a>
                <a class="hover:underline" href="#">Privacy Policy</a>
            </div>
        </div>
    </div>
@endsection
