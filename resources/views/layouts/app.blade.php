<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PBA Website</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-white">

    @include('layouts.navigation')

    <main class="pt-[60px] min-h-screen">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>
</html>