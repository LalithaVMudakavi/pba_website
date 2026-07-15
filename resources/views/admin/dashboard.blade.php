@extends('admin.layouts.app')

@section('page-title', 'Dashboard')

@section('content')

<div class="space-y-8">

    <!-- Welcome Banner -->
    <div class="bg-gradient-to-r from-[#002868] to-[#001845] rounded-3xl p-8 text-white shadow-xl">

        <div class="flex items-center justify-between">

            <div>

                <h1 class="text-3xl font-bold">
                    Welcome back, {{ Auth::user()->name }} 👋
                </h1>

                <p class="mt-3 text-blue-100">
                    Manage businesses, categories and testimonials from one dashboard.
                </p>

            </div>

            <div class="hidden lg:flex items-center justify-center w-24 h-24 rounded-2xl bg-white/10">

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-12 h-12"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M3 13h8V3H3v10zm10 8h8V3h-8v18z"/>

                </svg>

            </div>

        </div>

    </div>

    <!-- Stats Cards -->

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

        <!-- Businesses -->
        <div class="bg-white rounded-2xl p-6 border shadow-sm hover:shadow-lg transition">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-gray-500 text-sm">
                        Total Businesses
                    </p>

                    <h2 class="text-4xl font-bold text-[#081628] mt-2">
                        {{ $listingsCount }}
                    </h2>

                </div>

                <div class="w-14 h-14 rounded-2xl bg-blue-100 flex items-center justify-center text-2xl">
                    💼
                </div>

            </div>

        </div>

        <!-- Categories -->
        <div class="bg-white rounded-2xl p-6 border shadow-sm hover:shadow-lg transition">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-gray-500 text-sm">
                        Categories
                    </p>

                    <h2 class="text-4xl font-bold text-[#081628] mt-2">
                        {{ $categoriesCount }}
                    </h2>

                </div>

                <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">
                    📂
                </div>

            </div>

        </div>

        <!-- Testimonials -->
        <div class="bg-white rounded-2xl p-6 border shadow-sm hover:shadow-lg transition">

            <div class="flex items-center justify-between">

                <div>

                    <p class="text-gray-500 text-sm">
                        Testimonials
                    </p>

                    <h2 class="text-4xl font-bold text-[#081628] mt-2">
                        {{ $testimonialsCount }}
                    </h2>

                </div>

                <div class="w-14 h-14 rounded-2xl bg-yellow-100 flex items-center justify-center text-2xl">
                    ⭐
                </div>

            </div>

        </div>

    </div>

    <!-- Quick Actions -->

    <!-- <div class="grid md:grid-cols-3 gap-6">

        <a href="{{ route('admin.listings.create') }}"
           class="bg-white border rounded-2xl p-6 hover:shadow-lg transition">

            <div class="text-3xl mb-3">➕</div>

            <h3 class="font-semibold text-lg">
                Add Business
            </h3>

            <p class="text-sm text-gray-500 mt-1">
                Create a new business listing.
            </p>

        </a>

        <a href="{{ route('admin.listings.index') }}"
           class="bg-white border rounded-2xl p-6 hover:shadow-lg transition">

            <div class="text-3xl mb-3">📋</div>

            <h3 class="font-semibold text-lg">
                Manage Businesses
            </h3>

            <p class="text-sm text-gray-500 mt-1">
                View and manage all listings.
            </p>

        </a>

        <a href="{{ route('home') }}"
           class="bg-white border rounded-2xl p-6 hover:shadow-lg transition">

            <div class="text-3xl mb-3">🌐</div>

            <h3 class="font-semibold text-lg">
                View Website
            </h3>

            <p class="text-sm text-gray-500 mt-1">
                Open the public website.
            </p>

        </a>

    </div> -->

    <!-- Recent Businesses -->

    <div class="bg-white rounded-2xl border shadow-sm overflow-hidden">

        <div class="px-6 py-5 border-b flex items-center justify-between">

            <h3 class="text-xl font-semibold">
                Recent Businesses
            </h3>

            <span class="text-sm text-gray-500">
                Latest {{ $recentListings->count() }} records
            </span>

        </div>

        <div class="overflow-x-auto">

            <table class="w-full">

                <thead class="bg-slate-50">

                    <tr>

                        <th class="text-left px-6 py-4 font-semibold">
                            Business
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Category
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Price
                        </th>

                        <th class="text-left px-6 py-4 font-semibold">
                            Status
                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($recentListings as $listing)

                    <tr class="border-t hover:bg-slate-50 transition">

                        <td class="px-6 py-4 font-medium">
                            {{ $listing->title }}
                        </td>

                        <td class="px-6 py-4">
                            {{ $listing->category->name }}
                        </td>

                        <td class="px-6 py-4 font-semibold text-[#002868]">
                            ${{ number_format($listing->price) }}
                        </td>

                        <td class="px-6 py-4">

                            @if($listing->featured)

                                <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-medium">
                                    Featured
                                </span>

                            @else

                                <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-600 text-xs font-medium">
                                    Standard
                                </span>

                            @endif

                        </td>

                    </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection