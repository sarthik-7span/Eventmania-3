@extends('layouts.app')

@section('title', 'About Page')

@section('content')
    <main>
        <section class="bg-primaryDark pt-24 pb-8 md:py-20">
            <div
                class="max-w-7xl px-4 flex flex-col-reverse md:flex-row items-center md:gap-16 lg:gap-36 mx-auto text-center">
                <div class="text-center md:text-left -mt-40 md:mt-0">
                    <h1
                        class="text-4xl xs:text-5xl lg:text-7xl py-4 sm:py-3 md:py-0 font-bold text-white bg-primaryDark md:bg-transparent">
                        Unleash The
                        Excitement!</h1>
                    <p class="text-xl xs:text-2xl font-semibold md:text-3xl mt-16 md:mt-2 text-white/70">Experience the
                        Extraordinary. Ticketing
                        Tailored to
                        You.</p>
                </div>
                <div class="max-w-32 shrink-0">
                    <img class="mx-auto" src="{{ asset('img/eventmania-logo.svg') }}" alt="eventmania logo">
                </div>
            </div>
        </section>

        <!-- About Us & Features -->
        <section class="max-w-7xl px-4 mx-auto py-6">
            <div class="pb-15 border-b border-gray100">
                <h2 class="text-xl font-semibold text-primaryDark">WHO WE ARE</h2>
                <p class="mt-4 text-2xl md:text-3xl font-semibold text-primaryDark">Eventmania is the ticketing platform
                    built for fans,
                    making it easier than ever to
                    attend live concerts. We’re creating a better way to connect fans with their favorite events while
                    helping
                    artists and venues reach their audiences effortlessly.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 lg:gap-12 mt-16">
                <div>
                    <div class="max-w-28 max-h-28 lg:max-w-52 lg:max-h-52 mx-auto mb-5 lg:mb-10">
                        <img src="{{ asset('img/trust.svg') }}" alt="trust" class="mx-auto">
                    </div>
                    <div>
                        <h3 class="text-3xl font-semibold">Marketplace you can trust</h3>
                        <p class="text-base font-medium mt-2">Buying tickets should be simple and stress-free. EventMania
                            makes
                            it easy to find and purchase authentic tickets, so you can focus on enjoying the music.</p>
                    </div>
                </div>
                <div>
                    <div class="max-w-28 max-h-28 lg:max-w-52 lg:max-h-52 mx-auto mb-5 lg:mb-10">
                        <img src="{{ asset('img/ios-app-icon.svg') }}" alt="app icon" class="mx-auto">
                    </div>
                    <div>
                        <h3 class="text-3xl font-semibold">Everything in your hands</h3>
                        <p class="text-base font-medium mt-2">Get your tickets, transfer them, and enter events - with ease.
                            Event Mania puts everything at your fingertips, making the process fast, simple, and
                            stress-free.
                        </p>
                    </div>
                </div>
                <div>
                    <div class="max-w-28 max-h-28 lg:max-w-52 lg:max-h-52 mx-auto mb-5 lg:mb-10">
                        <img src="{{ asset('img/technical-support.svg') }}" alt="technical support" class="mx-auto">
                    </div>
                    <div>
                        <h3 class="text-3xl font-semibold">Help when you need it</h3>
                        <p class="text-base font-medium mt-2">Have questions or need help? Event Mania offers reliable
                            customer
                            support to make sure your experience is smooth from start to finish. </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Partners Section -->
        <section class="bg-primaryDark">
            <div class="max-w-7xl px-4 mx-auto text-white py-6 lg:pt-12 lg:pb-24">
                <h2 class="text-xl md:text-2xl font-semibold">A FEW OF OUR AWESOME PARTNERS</h2>
                <div class="flex justify-between gap-12 mt-4 lg:mt-12 partners-slider">
                    <img src="{{ asset('img/vmg.svg') }}" alt="vmg icon" class="h-32">
                    <img src="{{ asset('img/viva.svg') }}" alt="viva icon" class="h-32">
                    <img src="{{ asset('img/frias.svg') }}" alt="frias icon" class="h-32">
                    <img src="{{ asset('img/zamora.svg') }}" alt="zamora icon" class="h-32">
                    <img src="{{ asset('img/vmg.svg') }}" alt="vmg icon" class="h-32">
                    <img src="{{ asset('img/viva.svg') }}" alt="viva icon" class="h-32">
                    <img src="{{ asset('img/frias.svg') }}" alt="frias icon" class="h-32">
                    <img src="{{ asset('img/zamora.svg') }}" alt="zamora icon" class="h-32">
                </div>
            </div>
        </section>

        <!-- Fun Facts Section -->
        <section class="max-w-7xl px-4 mx-auto py-6 lg:pt-12 lg:pb-16">
            <div class="mb-12 lg:mb-28">
                <h4 class="text-3xl font-semibold mb-4 text-primaryDark">“We're offering a chance to unleash the excitement
                    that comes from
                    being part of a live audience.”</h4>
                <p class="text-xl font-semibold text-gray200">Tito Villarreal - Co-founder, Chief Executive</p>
            </div>
            <h2 class="text-xl font-bold">FUN FACTS</h2>
            <div class="grid md:grid-cols-3 gap-6 lg:gap-12 mt-4 lg:mt-12">
                <div class="p-6 bg-white border-gray100 border rounded-lg">
                    <p class="text-xl font-semibold">Event Counter</p>
                    <h3 class="text-5xl font-bold mt-6 mb-2">20,000</h3>
                    <span class="text-base font-normal text-gray500">As of January 1, 2025</span>
                </div>
                <div class="p-6 bg-white border-gray100 border rounded-lg">
                    <p class="text-xl font-semibold">Ticket sold</p>
                    <h3 class="text-5xl font-bold mt-6 mb-2">1.5M+</h3>
                    <span class="text-base font-normal text-gray500">Description</span>
                </div>
                <div class="p-6 bg-white border-gray100 border rounded-lg">
                    <p class="text-xl font-semibold">Active Users</p>
                    <h3 class="text-5xl font-bold mt-6 mb-2">2M+</h3>
                    <span class="text-base font-normal text-gray500">Description</span>
                </div>
            </div>
        </section>
    </main>
@endsection
