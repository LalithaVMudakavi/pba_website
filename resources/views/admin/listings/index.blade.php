@extends('admin.layouts.app')

@section('title', 'Businesses')

@section('page-title', 'Businesses')

@section('content')

<div class="bg-white rounded-xl shadow-sm border border-gray-200">

    <!-- Header -->
    <div class="flex items-center justify-between px-6 py-5 border-b">

        <div>

            <h2 class="text-xl font-semibold text-[#081628]">

                Businesses

            </h2>

            <p class="text-sm text-gray-500 mt-1">

                Manage all business listings.

            </p>

        </div>

        <a
            href="{{ route('admin.listings.create') }}"
            class="inline-flex items-center gap-2 bg-[#002868] hover:bg-[#001b4f]
                   text-white px-4 py-2 rounded-lg transition">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-5 h-5"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 4v16m8-8H4"/>

            </svg>

            Add Business

        </a>

    </div>

    <!-- Table -->

    <div class="overflow-x-auto">

        <table class="min-w-full divide-y divide-gray-200">

            <thead class="bg-gray-50">

                <tr>

                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider">

                        Title

                    </th>

                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider">

                        Category

                    </th>

                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider">

                        Location

                    </th>

                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider">

                        Price

                    </th>

                    <th class="px-6 py-4 text-left text-xs font-semibold uppercase tracking-wider">

                        Cash Flow

                    </th>

                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider">

                        Featured

                    </th>

                    <th class="px-6 py-4 text-center text-xs font-semibold uppercase tracking-wider">

                        Actions

                    </th>

                </tr>

            </thead>

            <tbody class="divide-y divide-gray-100">

                @forelse($listings as $listing)

                <tr class="hover:bg-gray-50">

                    <td class="px-6 py-5 font-medium">

                        {{ $listing->title }}

                    </td>

                    <td class="px-6 py-5">

                        {{ $listing->category->name }}

                    </td>

                    <td class="px-6 py-5">

                        {{ $listing->location }}

                    </td>

                    <td class="px-6 py-5">

                        ${{ number_format($listing->price,0) }}

                    </td>

                    <td class="px-6 py-5">

                        ${{ number_format($listing->cash_flow,0) }}

                    </td>

                    <td class="px-6 py-5 text-center">

                        @if($listing->featured)

                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">

                                Yes

                            </span>

                        @else

                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-600">

                                No

                            </span>

                        @endif

                    </td>

                    <td class="px-6 py-5">

                        <div class="flex justify-center gap-3">
                               <a
                 href="{{ route('admin.listings.show',$listing) }}"
                     class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-green-100 text-green-700 hover:bg-green-200 transition cursor-pointer"
                    title="View">

                    <svg xmlns="http://www.w3.org/2000/svg"
                         width="16"
                         height="16"
                         viewBox="0 0 24 24"
                         fill="none"
                         stroke="currentColor"
                         stroke-width="2"
                         stroke-linecap="round"
                         stroke-linejoin="round">

                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8S1 12 1 12z"/>
                        <circle cx="12" cy="12" r="3"/>

                    </svg>

                </a>

                          <a
    href="{{ route('admin.listings.edit',$listing) }}"
    class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-blue-100 text-blue-700 hover:bg-blue-200 transition cursor-pointer"
    title="Edit">

    <svg xmlns="http://www.w3.org/2000/svg"
         width="16"
         height="16"
         viewBox="0 0 24 24"
         fill="none"
         stroke="currentColor"
         stroke-width="2"
         stroke-linecap="round"
         stroke-linejoin="round">
        <path d="M12 20h9"/>
        <path d="M16.5 3.5a2.121 2.121 0 1 1 3 3L7 19l-4 1 1-4Z"/>
    </svg>

</a>

<form
    action="{{ route('admin.listings.destroy',$listing) }}"
    method="POST"
    onsubmit="return confirm('Delete this business?')">

    @csrf
    @method('DELETE')

    <button
        type="submit"
        class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-red-100 text-red-600 hover:bg-red-200 transition cursor-pointer"
        title="Delete">

        <svg xmlns="http://www.w3.org/2000/svg"
             width="16"
             height="16"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="2"
             stroke-linecap="round"
             stroke-linejoin="round">
            <path d="M3 6h18"/>
            <path d="M8 6V4h8v2"/>
            <path d="M19 6l-1 14H6L5 6"/>
            <path d="M10 11v6"/>
            <path d="M14 11v6"/>
        </svg>

    </button>

</form>
                        </div>

                    </td>

                </tr>

                @empty

                <tr>

                    <td
                        colspan="7"
                        class="px-6 py-10 text-center text-gray-500">

                        No businesses found.

                    </td>

                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection