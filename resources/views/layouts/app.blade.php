<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
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
