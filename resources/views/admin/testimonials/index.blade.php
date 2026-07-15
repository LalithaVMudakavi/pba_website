@extends('admin.layouts.app')

@section('title','Testimonials')
@section('page-title','Testimonials')

@section('content')

<div class="bg-white rounded-xl shadow-sm border border-gray-200">

    <div class="flex items-center justify-between px-6 py-5 border-b">

        <div>
            <h2 class="text-xl font-semibold text-[#081628]">
                Testimonials
            </h2>

            <p class="text-sm text-gray-500 mt-1">
                Manage testimonials.
            </p>
        </div>

        <a
            href="{{ route('admin.testimonials.create') }}"
            class="bg-[#002868] hover:bg-[#00184d] text-white px-5 py-2 rounded-lg">

            Add Testimonial

        </a>

    </div>

    <table class="w-full">

        <thead class="bg-gray-50">

            <tr>
                <th class="px-6 py-4 text-left">Name</th>
                <th class="px-6 py-4 text-left">Designation</th>
                <th class="px-6 py-4 text-left">testimonial</th>
                <th class="px-6 py-4 text-center">Actions</th>
            </tr>

        </thead>

        <tbody>

        @forelse($testimonials as $testimonial)

            <tr class="border-t">

                <td class="px-6 py-4">
                    {{ $testimonial->name }}
                </td>

                <td class="px-6 py-4">
                    {{ $testimonial->designation }}
                </td>

                <td class="px-6 py-4">
                    {{ Str::limit($testimonial->testimonial,80) }}
                </td>

                <td class="px-6 py-4">

                    <div class="flex justify-center gap-3">

                    <a
    href="{{ route('admin.testimonials.show',$testimonial) }}"
    class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-green-100 text-green-700 hover:bg-green-200 transition"
    title="View">

    <svg xmlns="http://www.w3.org/2000/svg"
         width="16"
         height="16"
         fill="none"
         stroke="currentColor"
         stroke-width="2"
         viewBox="0 0 24 24">

        <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z"/>
        <circle cx="12" cy="12" r="3"/>

    </svg>

</a>

                           <a
    href="{{ route('admin.testimonials.edit',$testimonial) }}"
    class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-blue-100 text-blue-700 hover:bg-blue-200 transition"
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
                            action="{{ route('admin.testimonials.destroy',$testimonial) }}"
                            method="POST"
                            onsubmit="return confirm('Delete testimonial?')">

                            @csrf
                            @method('DELETE')

                             <button
        type="submit"
        class="inline-flex items-center justify-center w-8 h-8 rounded-lg bg-red-100 text-red-600 hover:bg-red-200 transition"
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
                <td colspan="4" class="text-center py-8">
                    No testimonials found.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection