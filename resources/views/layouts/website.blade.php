<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('photos/logo.png') }}">

    <title>@yield('title', 'ApusFly')</title>

    <meta name="description"
        content="@yield('description', 'ApusFly connects customers with professional drone service providers.')">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-charcoal antialiased">

    <x-website.navbar />

    <main>
        @yield('content')
    </main>

    <x-website.footer />

</body>

</html>