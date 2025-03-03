<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="resources/css/app.css"> --}}
    @vite(['resources/css/app.css'])
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script> <!-- Optional for TailwindCSS -->
</head>

<body class="bg-gray-100 text-gray-900">
    <!-- Header -->
    @include('components.header')

    <!-- Main Content -->
    <div class="container mx-auto mt-5 px-4">
        @yield('content')
    </div>

    <!-- Footer -->
    @include('components.footer')
</body>

</html>
