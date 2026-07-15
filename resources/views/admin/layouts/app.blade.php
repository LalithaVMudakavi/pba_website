<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Panel')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-100">

<div class="flex h-screen overflow-hidden">

    {{-- Sidebar --}}
    @include('admin.components.sidebar')

    <div class="flex flex-col flex-1 overflow-hidden">

        {{-- Navbar --}}
        @include('admin.components.navbar')

        {{-- Content --}}
        <main class="flex-1 overflow-y-auto bg-gray-100">

            <div class="p-8">

                {{-- Breadcrumb --}}
                @yield('breadcrumb')

                {{-- Success Message --}}
                @if(session('success'))

                    <div
                        class="mb-6 rounded-xl border border-green-200 bg-green-50 px-5 py-4 text-green-700">

                        {{ session('success') }}

                    </div>

                @endif

                {{-- Validation Errors --}}
                @if($errors->any())

                    <div
                        class="mb-6 rounded-xl border border-red-200 bg-red-50 px-5 py-4">

                        <ul class="list-disc ml-5 text-red-600">

                            @foreach($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                {{-- Page Content --}}
                @yield('content')

            </div>

        </main>

    </div>

</div>

</body>

</html>