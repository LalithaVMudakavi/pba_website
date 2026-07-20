@extends('layouts.app')

@section('content')

<section class="pt-20 pb-24 bg-gradient-to-b from-white via-gray-50 to-white">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- ========================================= -->
    <!-- Breadcrumb -->
    <!-- ========================================= -->

    <nav class="flex items-center text-sm text-gray-500">

        <a
            href="{{ route('home') }}"
            class="hover:text-[#002868] transition">

            Home

        </a>

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4 mx-2"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m9 18 6-6-6-6"/>

        </svg>

        <a
            href="{{ route('services') }}"
            class="hover:text-[#002868] transition">

            Services

        </a>

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4 mx-2"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="m9 18 6-6-6-6"/>

        </svg>

        <span class="font-semibold text-[#081628]">

            Buyer Mandate

        </span>

    </nav>

    <!-- ========================================= -->
    <!-- Hero -->
    <!-- ========================================= -->

    <div
        class="mt-10 overflow-hidden rounded-3xl bg-[#002868] relative">

        <!-- Background Pattern -->

        <div class="absolute inset-0 opacity-10">

            <svg width="100%" height="100%">

                <defs>

                    <pattern
                        id="dots"
                        width="40"
                        height="40"
                        patternUnits="userSpaceOnUse">

                        <circle
                            cx="2"
                            cy="2"
                            r="1.4"
                            fill="white"/>

                    </pattern>

                </defs>

                <rect
                    width="100%"
                    height="100%"
                    fill="url(#dots)"/>

            </svg>

        </div>

        <div class="relative z-10 px-10 py-20 lg:px-20">

            <span
                class="inline-flex px-4 py-2 rounded-full
                       bg-white/10
                       text-white
                       text-sm">

                Business Acquisition Services

            </span>

            <h1
                class="mt-6
                       text-4xl
                       md:text-5xl
                       lg:text-6xl
                       font-serif
                       font-medium
                       text-white
                       leading-tight">

                Buyer Mandate

            </h1>

            <p
                class="mt-6
                       max-w-3xl
                       text-lg
                       text-white/80
                       leading-8">

                Helping entrepreneurs, investors and corporations
                acquire profitable businesses with complete
                confidentiality, professional guidance and strategic
                negotiation.

            </p>

            <div
                class="mt-10 flex flex-wrap gap-4">

                <a
                    href="{{ route('contact') }}"
                    class="px-7 py-4 rounded-xl
                           bg-[#BF0A30]
                           hover:bg-[#a00828]
                           text-white
                           font-semibold">

                    Contact Advisor

                </a>

                <a
                    href="{{ route('listings') }}"
                    class="px-7 py-4 rounded-xl
                           border
                           border-white/30
                           text-white
                           hover:bg-white/10">

                    View Businesses

                </a>

            </div>

        </div>

    </div>

    <!-- ========================================= -->
    <!-- About -->
    <!-- ========================================= -->

    <div class="mt-24">

        <div class="text-center max-w-3xl mx-auto">

            <p
                class="text-sm
                       uppercase
                       tracking-[0.25em]
                       text-[#BF0A30]
                       font-semibold">

                What We Do

            </p>

            <h2
                class="mt-5
                       text-4xl
                       font-serif
                       font-medium
                       text-[#081628]">

                What is Buyer Mandate?

            </h2>

            <p
                class="mt-6
                       text-lg
                       leading-8
                       text-gray-600">

                Our Buyer Mandate service is designed for individuals,
                entrepreneurs and investment groups looking to purchase
                the right business. We work exclusively with buyers to
                identify opportunities that match their investment goals,
                conduct financial analysis, negotiate favorable terms,
                and guide the acquisition through closing.

            </p>

        </div>

        <!-- Cards -->

        <div
            class="mt-16
                   grid
                   md:grid-cols-3
                   gap-8">

            <div
                class="rounded-2xl
                       border
                       bg-white
                       p-8
                       hover:border-[#002868]
                       transition">

                <div
                    class="w-14 h-14
                           rounded-xl
                           bg-blue-100
                           flex items-center justify-center">

                    🔍

                </div>

                <h3
                    class="mt-6
                           text-xl
                           font-semibold
                           text-[#081628]">

                    Business Search

                </h3>

                <p
                    class="mt-4
                           text-gray-600
                           leading-7">

                    We identify profitable businesses that align with
                    your financial objectives and acquisition strategy.

                </p>

            </div>

            <div
                class="rounded-2xl
                       border
                       bg-white
                       p-8
                       hover:border-[#002868]
                       transition">

                <div
                    class="w-14 h-14
                           rounded-xl
                           bg-green-100
                           flex items-center justify-center">

                    📊

                </div>

                <h3
                    class="mt-6
                           text-xl
                           font-semibold
                           text-[#081628]">

                    Financial Analysis

                </h3>

                <p
                    class="mt-4
                           text-gray-600
                           leading-7">

                    Every opportunity is carefully reviewed to ensure
                    the numbers make sense before any commitment.

                </p>

            </div>

            <div
                class="rounded-2xl
                       border
                       bg-white
                       p-8
                       hover:border-[#002868]
                       transition">

                <div
                    class="w-14 h-14
                           rounded-xl
                           bg-red-100
                           flex items-center justify-center">

                    🤝

                </div>

                <h3
                    class="mt-6
                           text-xl
                           font-semibold
                           text-[#081628]">

                    Negotiation Support

                </h3>

                <p
                    class="mt-4
                           text-gray-600
                           leading-7">

                    We negotiate on your behalf to achieve the best
                    possible purchase price and transaction terms.

                </p>

            </div>

        </div>

    </div>

    <!-- ========================================= -->
    <!-- Process -->
    <!-- ========================================= -->

    <div class="mt-28">

        <div class="text-center">

            <p
                class="text-sm
                       uppercase
                       tracking-[0.25em]
                       text-[#BF0A30]
                       font-semibold">

                Our Process

            </p>

            <h2
                class="mt-5
                       text-4xl
                       font-serif
                       font-medium
                       text-[#081628]">

                How We Help Buyers

            </h2>

            <p
                class="mt-5
                       text-lg
                       text-gray-600
                       max-w-3xl
                       mx-auto">

                Our structured acquisition process ensures every step
                is handled professionally from consultation through
                closing.

            </p>

        </div>

        <!-- Timeline starts here -->
                 <!-- Timeline -->

        <div class="mt-16 relative">

            <div class="absolute left-1/2 top-0 bottom-0 w-1 bg-gray-200 hidden lg:block"></div>

            <div class="space-y-14">

                <!-- Step 1 -->

                <div class="grid lg:grid-cols-2 gap-10 items-center">

                    <div class="lg:text-right">

                        <span class="text-sm font-semibold text-[#BF0A30] uppercase">

                            Step 01

                        </span>

                        <h3 class="mt-2 text-2xl font-semibold text-[#081628]">

                            Initial Consultation

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            We begin with a confidential consultation to
                            understand your goals, preferred industries,
                            investment budget and acquisition strategy.

                        </p>

                    </div>

                    <div class="relative flex justify-center">

                        <div
                            class="w-16 h-16 rounded-full
                                   bg-[#002868]
                                   text-white
                                   flex items-center justify-center
                                   text-xl font-bold
                                   shadow-xl">

                            1

                        </div>

                    </div>

                </div>

                <!-- Step 2 -->

                <div class="grid lg:grid-cols-2 gap-10 items-center">

                    <div class="order-2">

                        <span class="text-sm font-semibold text-[#BF0A30] uppercase">

                            Step 02

                        </span>

                        <h3 class="mt-2 text-2xl font-semibold text-[#081628]">

                            Business Search

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            Our advisors search qualified opportunities,
                            evaluate businesses and present only those
                            matching your objectives.

                        </p>

                    </div>

                    <div class="order-1 flex justify-center">

                        <div
                            class="w-16 h-16 rounded-full
                                   bg-[#002868]
                                   text-white
                                   flex items-center justify-center
                                   text-xl font-bold
                                   shadow-xl">

                            2

                        </div>

                    </div>

                </div>

                <!-- Step 3 -->

                <div class="grid lg:grid-cols-2 gap-10 items-center">

                    <div class="lg:text-right">

                        <span class="text-sm font-semibold text-[#BF0A30] uppercase">

                            Step 03

                        </span>

                        <h3 class="mt-2 text-2xl font-semibold text-[#081628]">

                            Financial Review

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            We review financial statements, business
                            performance, market conditions and growth
                            opportunities before moving forward.

                        </p>

                    </div>

                    <div class="flex justify-center">

                        <div
                            class="w-16 h-16 rounded-full
                                   bg-[#002868]
                                   text-white
                                   flex items-center justify-center
                                   text-xl font-bold
                                   shadow-xl">

                            3

                        </div>

                    </div>

                </div>

                <!-- Step 4 -->

                <div class="grid lg:grid-cols-2 gap-10 items-center">

                    <div class="order-2">

                        <span class="text-sm font-semibold text-[#BF0A30] uppercase">

                            Step 04

                        </span>

                        <h3 class="mt-2 text-2xl font-semibold text-[#081628]">

                            Negotiation

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            Our experienced brokers negotiate pricing,
                            terms and conditions while protecting your
                            interests throughout the transaction.

                        </p>

                    </div>

                    <div class="order-1 flex justify-center">

                        <div
                            class="w-16 h-16 rounded-full
                                   bg-[#002868]
                                   text-white
                                   flex items-center justify-center
                                   text-xl font-bold
                                   shadow-xl">

                            4

                        </div>

                    </div>

                </div>

                <!-- Step 5 -->

                <div class="grid lg:grid-cols-2 gap-10 items-center">

                    <div class="lg:text-right">

                        <span class="text-sm font-semibold text-[#BF0A30] uppercase">

                            Step 05

                        </span>

                        <h3 class="mt-2 text-2xl font-semibold text-[#081628]">

                            Closing

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            We coordinate with attorneys, accountants and
                            financial institutions to ensure a smooth and
                            successful closing.

                        </p>

                    </div>

                    <div class="flex justify-center">

                        <div
                            class="w-16 h-16 rounded-full
                                   bg-[#BF0A30]
                                   text-white
                                   flex items-center justify-center
                                   text-xl font-bold
                                   shadow-xl">

                            ✓

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

        <!-- ========================================= -->
    <!-- Frequently Asked Questions -->
    <!-- ========================================= -->

    <div class="mt-32">

        <div class="text-center max-w-3xl mx-auto">

            <p
                class="text-sm uppercase tracking-[0.25em]
                       text-[#BF0A30] font-semibold">

                Frequently Asked Questions

            </p>

            <h2
                class="mt-5 text-4xl
                       font-serif font-medium
                       text-[#081628]">

                Common Questions From Buyers

            </h2>

            <p
                class="mt-5 text-lg text-gray-600 leading-8">

                Answers to some of the most common questions about
                purchasing a business with Patriot Business Advisors.

            </p>

        </div>

        <div class="mt-16 max-w-5xl mx-auto space-y-6">

            <!-- FAQ 1 -->

            <div class="bg-white border rounded-2xl p-8">

                <h3 class="text-xl font-semibold text-[#081628]">

                    How do I begin buying a business?

                </h3>

                <p class="mt-4 text-gray-600 leading-8">

                    It begins with a confidential consultation where we
                    understand your investment goals, preferred industries,
                    budget and long-term objectives before identifying
                    suitable opportunities.

                </p>

            </div>

            <!-- FAQ 2 -->

            <div class="bg-white border rounded-2xl p-8">

                <h3 class="text-xl font-semibold text-[#081628]">

                    Will my information remain confidential?

                </h3>

                <p class="mt-4 text-gray-600 leading-8">

                    Absolutely. Every buyer engagement is handled with
                    complete confidentiality throughout the acquisition
                    process.

                </p>

            </div>

            <!-- FAQ 3 -->

            <div class="bg-white border rounded-2xl p-8">

                <h3 class="text-xl font-semibold text-[#081628]">

                    Do you assist with negotiations?

                </h3>

                <p class="mt-4 text-gray-600 leading-8">

                    Yes. Our advisors negotiate purchase price, deal
                    structure and terms to help you acquire the business
                    under favorable conditions.

                </p>

            </div>

            <!-- FAQ 4 -->

            <div class="bg-white border rounded-2xl p-8">

                <h3 class="text-xl font-semibold text-[#081628]">

                    Which industries do you specialize in?

                </h3>

                <p class="mt-4 text-gray-600 leading-8">

                    We work across manufacturing, healthcare,
                    technology, retail, service businesses and many
                    other industries.

                </p>

            </div>

        </div>

    </div>

    <!-- ========================================= -->
    <!-- Call To Action -->
    <!-- ========================================= -->

    <div class="mt-32">

        <div
            class="relative overflow-hidden
                   rounded-3xl
                   bg-[#002868]">

            <!-- Pattern -->

            <div class="absolute inset-0 opacity-10">

                <svg width="100%" height="100%">

                    <defs>

                        <pattern
                            id="cta-pattern"
                            width="40"
                            height="40"
                            patternUnits="userSpaceOnUse">

                            <circle
                                cx="2"
                                cy="2"
                                r="1.5"
                                fill="white"/>

                        </pattern>

                    </defs>

                    <rect
                        width="100%"
                        height="100%"
                        fill="url(#cta-pattern)"/>

                </svg>

            </div>

            <div
                class="relative z-10
                       px-10 py-20
                       text-center">

                <span
                    class="inline-flex
                           px-4 py-2
                           rounded-full
                           bg-white/10
                           text-white">

                    Ready to Take the Next Step?

                </span>

                <h2
                    class="mt-6
                           text-5xl
                           font-serif
                           font-medium
                           text-white">

                    Ready to Buy a Business?

                </h2>

                <p
                    class="mt-6
                           max-w-3xl
                           mx-auto
                           text-lg
                           text-white/80
                           leading-8">

                    Let Patriot Business Advisors help you identify,
                    evaluate and acquire the right business with
                    confidence.

                </p>

                <div
                    class="mt-10
                           flex flex-wrap
                           justify-center
                           gap-5">

                    <a
                        href="{{ route('contact') }}"
                        class="px-8 py-4
                               rounded-xl
                               bg-[#BF0A30]
                               hover:bg-[#a00828]
                               text-white
                               font-semibold
                               transition">

                        Contact Us

                    </a>

                    <a
                        href="{{ route('listings') }}"
                        class="px-8 py-4
                               rounded-xl
                               border
                               border-white/30
                               text-white
                               hover:bg-white/10
                               transition">

                        Browse Businesses

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

@endsection