@extends('admin.layouts.app')

@section('title','Testimonial Details')

@section('page-title','Testimonial Details')

@section('content')

<div class="max-w-5xl mx-auto space-y-8">

    <!-- Header -->

    <div class="bg-white rounded-2xl shadow-sm border p-8 flex items-center justify-between">

        <div>
<!-- 
            <span class="text-sm font-semibold uppercase text-[#002868]">

                Testimonial

            </span> -->

            <h1 class="text-2xl font-bold text-[#081628]">

                {{ $testimonial->name }}

            </h1>

            <p class="text-gray-500 mt-2">

                View complete testimonial information.

            </p>

        </div>

        <div class="flex gap-3">

            <a
                href="{{ route('admin.testimonials.index') }}"
                class="px-4 py-2 rounded-xl border hover:bg-gray-50">

                ← Back

            </a>

            <a
                href="{{ route('admin.testimonials.edit',$testimonial) }}"
                class="px-4 py-2 rounded-xl bg-[#002868] text-white hover:bg-[#00184d]">

                Edit

            </a>

        </div>

    </div>

    <!-- Customer Information -->

    <div class="bg-white rounded-2xl border shadow-sm">

        <div class="px-6 py-5 border-b">

            <h2 class="text-lg font-semibold">

                Customer Information

            </h2>

        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-8 p-6">

            <div>

                <p class="text-xs uppercase text-gray-400">

                    Customer Name

                </p>

                <h3 class="text-lg font-semibold">

                    {{ $testimonial->name }}

                </h3>

            </div>

            <div>

                <p class="text-xs uppercase text-gray-400">

                    Company

                </p>

                <h3 class="text-lg font-semibold">

                    {{ $testimonial->company ?: '-' }}

                </h3>

            </div>

            <div>

                <p class="text-xs uppercase text-gray-400">

                    Designation

                </p>

                <h3 class="text-lg font-semibold">

                    {{ $testimonial->designation ?: '-' }}

                </h3>

            </div>


        </div>

    </div>

    <!-- Customer Photo -->

    @if($testimonial->image)

    <div class="bg-white rounded-2xl border shadow-sm">

        <div class="px-5 py-4 border-b">

            <h2 class="text-lg font-semibold">

                Customer Photo

            </h2>

        </div>

        <div class="p-8 flex justify-center">

            <img
                src="{{ asset('storage/'.$testimonial->image) }}"
                class="w-52 h-52 rounded-full object-cover border shadow">

        </div>

    </div>

    @endif

    <!-- Testimonial -->

    <div class="bg-white rounded-2xl border shadow-sm">

        <div class="px-5 py-4 border-b">

            <h2 class="text-lg font-semibold">

                Testimonial

            </h2>

        </div>

        <div class="p-6">

            <div class="bg-gray-50 border rounded-xl p-6">

                <svg class="w-8 h-8 text-[#002868] mb-4"
                     fill="currentColor"
                     viewBox="0 0 24 24">

                    <path d="M9.983 3v7.391C9.983 15.165 7.077 18.31 3 19.5l-.857-2.41c2.506-.77 4.2-2.335 4.693-4.46H3V3h6.983zm11 0v7.391C20.983 15.165 18.077 18.31 14 19.5l-.857-2.41c2.506-.77 4.2-2.335 4.693-4.46H14V3h6.983z"/>

                </svg>

                <p class="leading-8 text-gray-700 italic">

                    "{{ $testimonial->testimonial }}"

                </p>

            </div>

        </div>

    </div>

    <!-- Activity -->

    <div class="bg-white rounded-2xl border shadow-sm">

        <div class="px-5 py-4 border-b">

            <h2 class="text-lg font-semibold">

                Activity

            </h2>

        </div>

        <div class="grid md:grid-cols-2 gap-8 p-6">

            <div>

                <p class="text-xs uppercase text-gray-400">

                    Created On

                </p>

                <h4 class="font-semibold">

                    {{ $testimonial->created_at->format('d M Y') }}

                </h4>

            </div>

            <div>

                <p class="text-xs uppercase text-gray-400">

                    Last Updated

                </p>

                <h4 class="font-semibold">

                    {{ $testimonial->updated_at->format('d M Y') }}

                </h4>

            </div>

        </div>

    </div>

</div>

@endsection