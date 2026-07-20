@php

$images = $listing->files->filter(function ($file) {
    return in_array(strtolower($file->file_type), [
        'jpg',
        'jpeg',
        'png',
        'webp',
        'gif'
    ]);
});

$documents = $listing->files->reject(function ($file) {
    return in_array(strtolower($file->file_type), [
        'jpg',
        'jpeg',
        'png',
        'webp',
        'gif'
    ]);
});

@endphp

@extends('layouts.app')

@section('content')

<section class="pt-24 pb-24 bg-gradient-to-b from-white via-gray-50 to-white">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- ====================================== -->
    <!-- Breadcrumb -->
    <!-- ====================================== -->

    <nav class="flex items-center text-sm text-gray-500 mb-8">

        <a href="{{ route('home') }}"
           class="hover:text-[#002868] transition">

            Home

        </a>

        <span class="mx-3">/</span>

        <a href="{{ route('home') }}#listings"
           class="hover:text-[#002868] transition">

            Businesses

        </a>

        <span class="mx-3">/</span>

        <span class="font-medium text-[#081628]">

            {{ $listing->title }}

        </span>

    </nav>

    <!-- ====================================== -->
    <!-- Hero -->
    <!-- ====================================== -->

    <div class="grid lg:grid-cols-2 gap-14 items-center">

        <!-- ====================================== -->
        <!-- Left Image -->
        <!-- ====================================== -->

        <div>

            @if($images->count())

                <img
                    src="{{ asset('storage/'.$images->first()->file_path) }}"
                    class="w-full h-[500px] object-cover rounded-3xl shadow-2xl">

            @else

                <div
                    class="w-full h-[500px]
                           rounded-3xl
                           bg-gradient-to-br
                           from-[#002868]
                           via-[#0f4db6]
                           to-[#1d4ed8]
                           flex flex-col
                           items-center
                           justify-center
                           shadow-2xl">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="w-28 h-28 text-white/70"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 21h18M5 21V7l8-4 6 3v15"/>

                    </svg>

                    <p class="mt-6 text-white text-xl font-semibold">

                        No Company Image

                    </p>

                </div>

            @endif

        </div>

        <!-- ====================================== -->
        <!-- Right Content -->
        <!-- ====================================== -->

        <div>

            @if($listing->featured)

                <span
                    class="inline-flex items-center gap-2
                           px-4 py-2
                           rounded-full
                           bg-[#BF0A30]
                           text-white
                           text-sm
                           font-semibold">

                    ⭐ Featured Business

                </span>

            @endif

            <!-- Business Name -->

            <h1
                class="mt-4
                       text-5xl
                       font-bold
                       leading-tight
                       text-[#081628]">

                {{ $listing->title }}

            </h1>

            <!-- Category + Location -->

            <div
                class="flex flex-wrap items-center gap-6 mt-6 text-gray-600">

                <div class="flex items-center gap-2">

                    🏢

                    <span>

                        {{ $listing->category->name }}

                    </span>

                </div>

                <div class="flex items-center gap-2">

                    📍

                    <span>

                        {{ $listing->location }}

                    </span>

                </div>

            </div>

            <!-- Description -->

            <p
                class="mt-6
                       text-lg
                       leading-8
                       text-gray-600">

                {{ Str::limit($listing->description,220) }}

            </p>

            <!-- ====================================== -->
            <!-- Price Cards -->
            <!-- ====================================== -->

            <div class="grid grid-cols-2 gap-6 mt-7">

                <div
                    class="rounded-2xl
                           bg-white
                           border
                           border-gray-200
                           p-6
                           shadow-sm
                           hover:shadow-xl
                           transition">

                    <p class="text-gray-500 text-sm">

                        Asking Price

                    </p>

                    <h3
                        class="mt-2
                               text-3xl
                               font-bold
                               text-[#002868]">

                        ${{ number_format($listing->price) }}

                    </h3>

                </div>

                <div
                    class="rounded-2xl
                           bg-white
                           border
                           border-gray-200
                           p-6
                           shadow-sm
                           hover:shadow-xl
                           transition">

                    <p class="text-gray-500 text-sm">

                        Cash Flow

                    </p>

                    <h3
                        class="mt-2
                               text-3xl
                               font-bold
                               text-green-600">

                        ${{ number_format($listing->cash_flow) }}

                    </h3>

                </div>

            </div>

            <!-- ====================================== -->
            <!-- CTA Buttons -->
            <!-- ====================================== -->

            <div class="flex flex-wrap gap-4 mt-8">

                <button
    type="button"
    onclick="openInquiryModal()"
    class="inline-flex
           items-center
           justify-center
           px-6
           py-3
           rounded-xl
           border-2
           border-[#002868]
           text-[#002868]
           font-semibold
           hover:bg-[#002868]
           hover:text-white
           transition">

    Request Information

</button>
            </div>

        </div>

    </div>

        <!-- ===================================================== -->
    <!-- About Business -->
    <!-- ===================================================== -->

    <div class="mt-20">

        <div class="bg-white rounded-3xl border border-gray-200 shadow-sm overflow-hidden">

            <div class="px-6 py-4 border-b bg-gray-50">

                <h2 class="text-2xl font-bold text-[#081628]">

                    About This Business

                </h2>

                <p class="text-gray-500 mt-1">

                    Learn more about this business opportunity.

                </p>

            </div>

            <div class="p-6">

                <p class="text-gray-700 leading-9 text-lg">

                    {{ $listing->description }}

                </p>

            </div>

        </div>

    </div>


    <!-- ===================================================== -->
    <!-- Business Information -->
    <!-- ===================================================== -->

    <div class="mt-12">

        <div class="flex items-center justify-between mb-6">

            <div>

                <h2 class="text-2xl font-bold text-[#081628]">

                    Business Information

                </h2>

                <p class="text-gray-500 mt-1">

                    Key details about this business.

                </p>

            </div>

        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">

            <!-- Category -->

            <div
                class="bg-white
                       rounded-2xl
                       border
                       border-gray-200
                       shadow-sm
                       hover:shadow-xl
                       transition
                       p-6">

                <div class="flex items-center gap-4">

                    <div
                        class="w-14 h-14
                               rounded-2xl
                               bg-blue-100
                               flex
                               items-center
                               justify-center
                               text-2xl">

                        🏢

                    </div>

                    <div>

                        <p class="text-sm text-gray-500">

                            Category

                        </p>

                        <h3 class="font-bold text-lg text-[#081628]">

                            {{ $listing->category->name }}

                        </h3>

                    </div>

                </div>

            </div>


            <!-- Location -->

            <div
                class="bg-white
                       rounded-2xl
                       border
                       border-gray-200
                       shadow-sm
                       hover:shadow-xl
                       transition
                       p-6">

                <div class="flex items-center gap-4">

                    <div
                        class="w-14 h-14
                               rounded-xl
                               bg-red-100
                               flex
                               items-center
                               justify-center
                               text-2xl">

                        📍

                    </div>

                    <div>

                        <p class="text-sm text-gray-500">

                            Location

                        </p>

                        <h3 class="font-bold text-lg text-[#081628]">

                            {{ $listing->location }}

                        </h3>

                    </div>

                </div>

            </div>


            <!-- Asking Price -->

            <div
                class="bg-white
                       rounded-2xl
                       border
                       border-gray-200
                       shadow-sm
                       hover:shadow-xl
                       transition
                       p-6">

                <div class="flex items-center gap-4">

                    <div
                        class="w-14 h-14
                               rounded-xl
                               bg-green-100
                               flex
                               items-center
                               justify-center
                               text-2xl">

                        💰

                    </div>

                    <div>

                        <p class="text-sm text-gray-500">

                            Asking Price

                        </p>

                        <h3 class="font-bold text-2xl text-green-600">

                            ${{ number_format($listing->price) }}

                        </h3>

                    </div>

                </div>

            </div>


            <!-- Cash Flow -->

            <div
                class="bg-white
                       rounded-2xl
                       border
                       border-gray-200
                       shadow-sm
                       hover:shadow-xl
                       transition
                       p-6">

                <div class="flex items-center gap-4">

                    <div
                        class="w-14 h-14
                               rounded-xl
                               bg-emerald-100
                               flex
                               items-center
                               justify-center
                               text-2xl">

                        📈

                    </div>

                    <div>

                        <p class="text-sm text-gray-500">

                            Cash Flow

                        </p>

                        <h3 class="font-bold text-2xl text-emerald-600">

                            ${{ number_format($listing->cash_flow) }}

                        </h3>

                    </div>

                </div>

            </div>


            <!-- Featured -->

            <div
                class="bg-white
                       rounded-2xl
                       border
                       border-gray-200
                       shadow-sm
                       hover:shadow-xl
                       transition
                       p-6">

                <div class="flex items-center gap-4">

                    <div
                        class="w-14 h-14
                               rounded-xl
                               bg-yellow-100
                               flex
                               items-center
                               justify-center
                               text-2xl">

                        ⭐

                    </div>

                    <div>

                        <p class="text-sm text-gray-500">

                            Listing Status

                        </p>

                        @if($listing->featured)

                            <span
                                class="inline-flex
                                       mt-2
                                       px-4
                                       py-1
                                       rounded-full
                                       bg-green-100
                                       text-green-700
                                       text-sm
                                       font-semibold">

                                Featured

                            </span>

                        @else

                            <span
                                class="inline-flex
                                       mt-2
                                       px-4
                                       py-1
                                       rounded-full
                                       bg-gray-100
                                       text-gray-700
                                       text-sm
                                       font-semibold">

                                Standard

                            </span>

                        @endif

                    </div>

                </div>

            </div>


            <!-- Created -->

            <div
                class="bg-white
                       rounded-2xl
                       border
                       border-gray-200
                       shadow-sm
                       hover:shadow-xl
                       transition
                       p-6">

                <div class="flex items-center gap-4">

                    <div
                        class="w-14 h-14
                               rounded-xl
                               bg-purple-100
                               flex
                               items-center
                               justify-center
                               text-2xl">

                        📅

                    </div>

                    <div>

                        <p class="text-sm text-gray-500">

                            Listed On

                        </p>

                        <h3 class="font-semibold text-[#081628]">

                            {{ $listing->created_at->format('d M Y') }}

                        </h3>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- ===================================================== -->
    <!-- Uploaded Documents -->
    <!-- ===================================================== -->

    @if($documents->count())

    <div class="mt-20">

        <div class="flex items-center justify-between mb-8">

            <div>

                <h2 class="text-2xl font-bold text-[#081628]">

                    Business Documents

                </h2>

                <p class="text-gray-500 mt-2">

                    Supporting documents available for download.

                </p>

            </div>

            <span class="px-4 py-2 rounded-full bg-gray-100 text-gray-700 text-sm font-semibold">

                {{ $documents->count() }}
                {{ $documents->count() == 1 ? 'Document' : 'Documents' }}

            </span>

        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">

            @foreach($documents as $file)

            @php

                $icon = "📄";

                switch(strtolower($file->file_type)){

                    case "pdf":
                        $icon="📕";
                        break;

                    case "doc":
                    case "docx":
                        $icon="📘";
                        break;

                    case "xls":
                    case "xlsx":
                        $icon="📗";
                        break;

                    case "txt":
                        $icon="📑";
                        break;
                }

            @endphp

            <div
                class="bg-white
                       rounded-2xl
                       border
                       border-gray-200
                       shadow-sm
                       hover:shadow-xl
                       transition
                       p-6">

                <div class="flex items-start justify-between">

                    <div class="flex gap-4">

                        <div class="text-5xl">

                            {{ $icon }}

                        </div>

                        <div>

                            <h4 class="font-semibold text-[#081628] break-all">

                                {{ $file->file_name }}

                            </h4>

                            <p class="text-sm text-gray-500 mt-2">

                                {{ strtoupper($file->file_type) }}

                            </p>

                            <p class="text-sm text-gray-500">

                                {{ number_format($file->file_size / 1024,1) }} KB

                            </p>

                        </div>

                    </div>

                </div>

                <a
                    href="{{ asset('storage/'.$file->file_path) }}"
                    target="_blank"
                    class="mt-6 inline-flex items-center justify-center
                           w-full
                           px-4
                           py-3
                           rounded-xl
                           bg-[#002868]
                           hover:bg-[#00184d]
                           text-white
                           font-semibold
                           transition">

                          View Document

                </a>

            </div>

            @endforeach

        </div>

    </div>

    @endif

        <!-- ===================================================== -->
    <!-- Need More Information -->
    <!-- ===================================================== -->

    <div id="contact" class="mt-24">

        <div
            class="relative overflow-hidden rounded-3xl
                   bg-gradient-to-r
                   from-[#002868]
                   via-[#0b3c8c]
                   to-[#001845]
                   shadow-2xl">

            <!-- Decorative circles -->

            <div class="absolute -top-20 -right-20 w-72 h-72 rounded-full bg-white/10"></div>

            <div class="absolute -bottom-24 -left-24 w-80 h-80 rounded-full bg-white/5"></div>

            <div class="relative px-8 py-16 lg:px-16">

                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <!-- Left -->

                    <div>

                        <span
                            class="inline-flex items-center
                                   px-4 py-2
                                   rounded-full
                                   bg-white/15
                                   text-white
                                   text-sm
                                   font-semibold">

                            Patriot Business Advisors

                        </span>

                        <h2
                            class="mt-6
                                   text-4xl
                                   font-bold
                                   text-white">

                            Need More Information?

                        </h2>

                        <p
                            class="mt-6
                                   text-lg
                                   text-white/80
                                   leading-8">

                            Interested in learning more about this business?

                            Our experienced advisors can provide additional
                            information, answer your questions, and guide you
                            through the acquisition process.

                        </p>

                    </div>

                    <!-- Right -->

                    <div class="space-y-6">

                        <div
                            class="bg-white/10
                                   backdrop-blur
                                   rounded-2xl
                                   p-6">

                            <h3 class="text-xl font-semibold text-white">

                                Contact Information

                            </h3>

                            <div class="mt-6 space-y-4">

                                <div class="flex items-center gap-4">

                                    <div
                                        class="w-12 h-12
                                               rounded-xl
                                               bg-white/15
                                               flex
                                               items-center
                                               justify-center">

                                        📞

                                    </div>

                                    <div>

                                        <p class="text-white/60 text-sm">

                                            Phone

                                        </p>

                                        <p class="text-white font-semibold">

                                            (267) 391-7642

                                        </p>

                                    </div>

                                </div>

                                <div class="flex items-center gap-4">

                                    <div
                                        class="w-12 h-12
                                               rounded-xl
                                               bg-white/15
                                               flex
                                               items-center
                                               justify-center">

                                        ✉️

                                    </div>

                                    <div>

                                        <p class="text-white/60 text-sm">

                                            Email

                                        </p>

                                        <p class="text-white font-semibold break-all">

                                            tietjen@patriotbusinessadvisors.com

                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    
                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- Back Button -->

    <div class="mt-12 flex justify-center">

        <a
            href="{{ route('listings') }}#listings"
            class="inline-flex items-center gap-3
                   px-6
                   py-3
                   rounded-2xl
                   border
                   border-[#002868]
                   text-[#002868]
                   font-semibold
                   hover:bg-[#002868]
                   hover:text-white
                   transition">

            ← Back to Listings

        </a>

    </div>

</div>

<div
    id="inquiryModal"
    class="fixed inset-0 bg-black/60 hidden
           items-center justify-center
           z-50 p-4">

    <div
        class="bg-white rounded-2xl
               w-full max-w-2xl
               shadow-2xl">

        <div class="flex justify-between items-center p-4 border-b -mb-6">

            <h2 class="text-2xl font-bold">

                Request Information

            </h2>

            <button
                onclick="closeInquiryModal()"
                class="text-3xl">

                &times;

            </button>

        </div>

        <form
            method="POST"
            class="p-10 space-y-3">

            @csrf

            <input
                type="hidden"
                name="listing_id"
                value="{{ $listing->id }}">

            <div>

                <label>Your Name</label>

                <input
                    type="text"
                    name="name"
                    required
                    class="w-full border rounded-lg px-4 py-2 mt-1">

            </div>

            <div>

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    required
                    class="w-full border rounded-lg px-4 py-2 mt-1">

            </div>

            <div>

                <label>Phone</label>

                <input
                    type="text"
                    name="phone"
                    class="w-full border rounded-lg px-4 py-2 mt-1">

            </div>

            <div>

                <label>Message</label>

                <textarea
                    name="message"
                    rows="3"
                    class="w-full border rounded-lg px-4 py-2 mt-1">
                </textarea>

            </div>

            <div class="flex justify-end gap-4">

                <button
                    type="button"
                    onclick="closeInquiryModal()"
                    class="px-3 py-2 rounded-lg border">

                    Cancel

                </button>

                <button
                    type="submit"
                    class="px-4 py-2 rounded-lg bg-[#002868] text-white">

                    Submit Inquiry

                </button>

            </div>

        </form>

    </div>

</div>

</section>



@endsection

<script>

function openInquiryModal(){

    document
        .getElementById("inquiryModal")
        .classList.remove("hidden");

    document
        .getElementById("inquiryModal")
        .classList.add("flex");

}

function closeInquiryModal(){

    document
        .getElementById("inquiryModal")
        .classList.remove("flex");

    document
        .getElementById("inquiryModal")
        .classList.add("hidden");

}

</script>