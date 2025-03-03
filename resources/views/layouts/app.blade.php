<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- Styles -->
    @vite(['resources/css/app.css'])
    @vite(['resources/js/app.js'])
</head>

<body class="bg-white text-primaryDark">
    <!-- Header -->
    @include('components.header')

    <!-- Main Content -->
    <div>
        @yield('content')
    </div>

    <!-- Footer -->
    @include('components.footer')
</body>

</html>
