@extends('layouts.app')

@section('title', 'Appraisal Services')

@section('content')

<section class="pt-20 pb-24 bg-gradient-to-b from-white via-gray-50 to-white">

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

    <!-- Breadcrumb -->

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

            Appraisal Services

        </span>

    </nav>

    <!-- Hero -->

    <div class="mt-12 grid lg:grid-cols-2 gap-16 items-center">

        <div>

            <p
                class="text-sm uppercase tracking-[0.25em]
                       text-[#BF0A30] font-semibold">

                Business Valuation

            </p>

            <h1
                class="mt-6 text-5xl lg:text-6xl
                       font-serif font-medium
                       text-[#081628] leading-tight">

                Appraisal
                <span class="text-[#002868]">

                    Services

                </span>

            </h1>

            <p
                class="mt-8 text-lg leading-8 text-gray-600">

                Discover the true value of your business with our
                professional appraisal services. Whether you are
                preparing to sell, planning for succession, seeking
                financing, or simply evaluating growth, our experts
                provide accurate and confidential business valuations.

            </p>

            <div class="mt-10 flex gap-4">

                <a
                    href="{{ route('valuation') }}"
                    class="px-8 py-4 rounded-xl
                           bg-[#002868]
                           text-white
                           font-semibold
                           hover:bg-[#00184d]
                           transition">

                    Request Valuation

                </a>

                <a
                    href="{{ route('listings') }}"
                    class="px-8 py-4 rounded-xl
                           border border-[#002868]
                           text-[#002868]
                           hover:bg-[#002868]
                           hover:text-white
                           transition">

                    Browse Listings

                </a>

            </div>

        </div>

        <!-- Illustration -->

        <div>

            <div
                class="rounded-3xl
                       bg-gradient-to-br
                       from-[#002868]
                       to-[#0b4bb3]
                       p-16
                       text-center
                       text-white">

                <div class="text-7xl">

                    📊

                </div>

                <h3
                    class="mt-8 text-3xl
                           font-serif">

                    Know Your Business Worth

                </h3>

                <p
                    class="mt-5 text-white/80 leading-8">

                    Professional business valuations backed by
                    financial analysis, market research and industry
                    expertise.

                </p>

            </div>

        </div>

    </div>

    <!-- What is Appraisal -->

    <div class="mt-36">

        <div class="text-center max-w-3xl mx-auto">

            <p
                class="text-sm uppercase tracking-[0.25em]
                       text-[#BF0A30] font-semibold">

                Our Valuation Services

            </p>

            <h2
                class="mt-5 text-4xl
                       font-serif font-medium
                       text-[#081628]">

                What is Business Appraisal?

            </h2>

            <p
                class="mt-6 text-lg leading-8 text-gray-600">

                A business appraisal determines the fair market value
                of your company by analyzing financial performance,
                assets, liabilities, industry trends and future
                earning potential. Our reports help owners make
                informed financial and strategic decisions.

            </p>

        </div>

    </div>

    <!-- Valuation Process -->

    <div class="mt-32">

        <div class="text-center mb-16">

            <p
                class="text-sm uppercase tracking-[0.25em]
                       text-[#BF0A30] font-semibold">

                Our Process

            </p>

            <h2
                class="mt-5 text-4xl
                       font-serif font-medium
                       text-[#081628]">

                How We Value Your Business

            </h2>

        </div>

        <div class="grid md:grid-cols-5 gap-6">

            <div class="bg-white border rounded-2xl p-8 text-center">

                <div class="w-16 h-16 mx-auto rounded-full bg-[#002868] text-white flex items-center justify-center text-2xl font-bold">

                    1

                </div>

                <h3 class="mt-6 font-semibold">

                    Consultation

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Understand your goals and business background.

                </p>

            </div>

            <div class="bg-white border rounded-2xl p-8 text-center">

                <div class="w-16 h-16 mx-auto rounded-full bg-[#002868] text-white flex items-center justify-center text-2xl font-bold">

                    2

                </div>

                <h3 class="mt-6 font-semibold">

                    Financial Review

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Analyze statements, cash flow and profitability.

                </p>

            </div>

            <div class="bg-white border rounded-2xl p-8 text-center">

                <div class="w-16 h-16 mx-auto rounded-full bg-[#002868] text-white flex items-center justify-center text-2xl font-bold">

                    3

                </div>

                <h3 class="mt-6 font-semibold">

                    Market Analysis

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Compare your business with current market trends.

                </p>

            </div>

            <div class="bg-white border rounded-2xl p-8 text-center">

                <div class="w-16 h-16 mx-auto rounded-full bg-[#002868] text-white flex items-center justify-center text-2xl font-bold">

                    4

                </div>

                <h3 class="mt-6 font-semibold">

                    Valuation Report

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Prepare a detailed professional valuation report.

                </p>

            </div>

            <div class="bg-white border rounded-2xl p-8 text-center">

                <div class="w-16 h-16 mx-auto rounded-full bg-[#002868] text-white flex items-center justify-center text-2xl font-bold">

                    5

                </div>

                <h3 class="mt-6 font-semibold">

                    Strategy

                </h3>

                <p class="mt-3 text-sm text-gray-600">

                    Recommend the next best steps for your business.

                </p>

            </div>

        </div>

    </div>

        <!-- ========================================= -->
    <!-- Why Choose Patriot -->
    <!-- ========================================= -->

    <div class="mt-32">

        <div class="text-center max-w-3xl mx-auto">

            <p
                class="text-sm uppercase tracking-[0.25em]
                       text-[#BF0A30] font-semibold">

                Why Patriot Business Advisors

            </p>

            <h2
                class="mt-5 text-4xl
                       font-serif font-medium
                       text-[#081628]">

                Why Choose Our Appraisal Services?

            </h2>

            <p
                class="mt-6 text-lg leading-8 text-gray-600">

                We combine years of business brokerage experience with
                comprehensive financial analysis to provide accurate,
                confidential and dependable business valuations.

            </p>

        </div>

        <div class="mt-16 grid md:grid-cols-2 lg:grid-cols-4 gap-8">

            <!-- Card -->

            <div
                class="bg-white rounded-2xl border p-8
                       hover:border-[#002868]
                       hover:-translate-y-2
                       transition-all">

                <div
                    class="w-14 h-14 rounded-xl
                           bg-blue-100
                           flex items-center justify-center
                           text-2xl">

                    📍

                </div>

                <h3
                    class="mt-6 text-xl font-semibold text-[#081628]">

                    40 States Covered

                </h3>

                <p
                    class="mt-4 text-gray-600 leading-7">

                    Providing business valuation services across
                    forty states with local market knowledge.

                </p>

            </div>

            <!-- Card -->

            <div
                class="bg-white rounded-2xl border p-8
                       hover:border-[#002868]
                       hover:-translate-y-2
                       transition-all">

                <div
                    class="w-14 h-14 rounded-xl
                           bg-green-100
                           flex items-center justify-center
                           text-2xl">

                    🔒

                </div>

                <h3
                    class="mt-6 text-xl font-semibold text-[#081628]">

                    Complete Confidentiality

                </h3>

                <p
                    class="mt-4 text-gray-600 leading-7">

                    Every financial document and business detail
                    remains secure and confidential throughout
                    the valuation process.

                </p>

            </div>

            <!-- Card -->

            <div
                class="bg-white rounded-2xl border p-8
                       hover:border-[#002868]
                       hover:-translate-y-2
                       transition-all">

                <div
                    class="w-14 h-14 rounded-xl
                           bg-yellow-100
                           flex items-center justify-center
                           text-2xl">

                    📈

                </div>

                <h3
                    class="mt-6 text-xl font-semibold text-[#081628]">

                    Accurate Market Analysis

                </h3>

                <p
                    class="mt-4 text-gray-600 leading-7">

                    We analyze comparable businesses,
                    industry trends and financial
                    performance for realistic valuations.

                </p>

            </div>

            <!-- Card -->

            <div
                class="bg-white rounded-2xl border p-8
                       hover:border-[#002868]
                       hover:-translate-y-2
                       transition-all">

                <div
                    class="w-14 h-14 rounded-xl
                           bg-red-100
                           flex items-center justify-center
                           text-2xl">

                    💼

                </div>

                <h3
                    class="mt-6 text-xl font-semibold text-[#081628]">

                    Experienced Advisors

                </h3>

                <p
                    class="mt-4 text-gray-600 leading-7">

                    Benefit from experienced professionals
                    with years of expertise in business
                    brokerage and mergers & acquisitions.

                </p>

            </div>

        </div>

    </div>

    <!-- ========================================= -->
    <!-- Benefits -->
    <!-- ========================================= -->

    <div class="mt-32">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <div>

                <p
                    class="text-sm uppercase tracking-[0.25em]
                           text-[#BF0A30] font-semibold">

                    Benefits

                </p>

                <h2
                    class="mt-5 text-4xl
                           font-serif font-medium
                           text-[#081628]">

                    Why Business Valuation Matters

                </h2>

                <p
                    class="mt-6 text-lg leading-8 text-gray-600">

                    Understanding your company's value helps you
                    make confident decisions for growth,
                    investment, succession planning or selling.

                </p>

                <div class="mt-10 space-y-6">

                    <div class="flex gap-4">

                        <div
                            class="w-10 h-10 rounded-full
                                   bg-[#002868]
                                   text-white
                                   flex items-center justify-center
                                   font-bold">

                            ✓

                        </div>

                        <div>

                            <h4 class="font-semibold text-[#081628]">

                                Make Better Business Decisions

                            </h4>

                            <p class="text-gray-600 mt-2">

                                Gain confidence with accurate financial
                                insights and professional recommendations.

                            </p>

                        </div>

                    </div>

                    <div class="flex gap-4">

                        <div
                            class="w-10 h-10 rounded-full
                                   bg-[#002868]
                                   text-white
                                   flex items-center justify-center
                                   font-bold">

                            ✓

                        </div>

                        <div>

                            <h4 class="font-semibold text-[#081628]">

                                Prepare for Selling

                            </h4>

                            <p class="text-gray-600 mt-2">

                                Understand your business worth before
                                entering the market.

                            </p>

                        </div>

                    </div>

                    <div class="flex gap-4">

                        <div
                            class="w-10 h-10 rounded-full
                                   bg-[#002868]
                                   text-white
                                   flex items-center justify-center
                                   font-bold">

                            ✓

                        </div>

                        <div>

                            <h4 class="font-semibold text-[#081628]">

                                Secure Financing

                            </h4>

                            <p class="text-gray-600 mt-2">

                                Reliable valuation reports help support
                                investment and financing opportunities.

                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div>

                <div
                    class="rounded-3xl
                           bg-[#002868]
                           p-12
                           text-white">

                    <h3
                        class="text-3xl font-serif">

                        Professional Business Valuation

                    </h3>

                    <p
                        class="mt-6 text-white/80 leading-8">

                        We deliver detailed valuation reports based on
                        financial analysis, industry benchmarks,
                        business performance and future growth
                        opportunities.

                    </p>

                    <div class="mt-10 grid grid-cols-2 gap-6">

                        <div>

                            <div
                                class="text-4xl font-serif">

                                40

                            </div>

                            <p class="mt-2 text-white/70">

                                States Covered

                            </p>

                        </div>

                        <div>

                            <div
                                class="text-4xl font-serif">

                                18+

                            </div>

                            <p class="mt-2 text-white/70">

                                Years Experience

                            </p>

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

                Business Valuation FAQs

            </h2>

            <p
                class="mt-6 text-lg leading-8 text-gray-600">

                Here are answers to some common questions about our
                business appraisal services.

            </p>

        </div>

        <div class="mt-14 space-y-6">

            <div class="bg-white rounded-2xl border p-8">

                <h3 class="text-xl font-semibold text-[#081628]">

                    Why should I get my business valued?

                </h3>

                <p class="mt-4 text-gray-600 leading-7">

                    A professional valuation provides an accurate
                    understanding of your company's worth, helping
                    with selling, succession planning, financing,
                    partnerships and strategic decision-making.

                </p>

            </div>

            <div class="bg-white rounded-2xl border p-8">

                <h3 class="text-xl font-semibold text-[#081628]">

                    What information is required?

                </h3>

                <p class="mt-4 text-gray-600 leading-7">

                    We typically review financial statements,
                    tax returns, assets, liabilities, business
                    operations and market conditions to prepare
                    an accurate valuation.

                </p>

            </div>

            <div class="bg-white rounded-2xl border p-8">

                <h3 class="text-xl font-semibold text-[#081628]">

                    Is the valuation confidential?

                </h3>

                <p class="mt-4 text-gray-600 leading-7">

                    Absolutely. Every document and discussion is
                    handled with complete confidentiality and
                    professional discretion.

                </p>

            </div>

        </div>

    </div>

    <!-- ========================================= -->
    <!-- CTA -->
    <!-- ========================================= -->

    <div class="mt-32">

        <div
            class="rounded-3xl
                   bg-[#002868]
                   px-10 py-20
                   text-center">

            <p
                class="text-sm uppercase tracking-[0.25em]
                       text-white/70 font-semibold">

                Ready To Know Your Business Value?

            </p>

            <h2
                class="mt-6 text-5xl
                       font-serif font-medium
                       text-white">

                Request Your Professional Business Valuation

            </h2>

            <p
                class="mt-6 max-w-3xl mx-auto
                       text-lg leading-8
                       text-white/80">

                Whether you're planning to sell, seeking financing,
                preparing for succession, or simply want to understand
                your company's market value, our experienced advisors
                are here to help.

            </p>

            <div
                class="mt-10 flex flex-col sm:flex-row
                       justify-center gap-5">

                <a
                    href="{{ route('valuation') }}"
                    class="inline-flex items-center justify-center
                           px-8 py-4
                           rounded-xl
                           bg-white
                           text-[#002868]
                           font-semibold
                           hover:bg-gray-100
                           transition">

                    Request Valuation

                </a>

                <a
                    href="tel:+12673917642"
                    class="inline-flex items-center justify-center
                           px-8 py-4
                           rounded-xl
                           border border-white/30
                           text-white
                           hover:bg-white/10
                           transition">

                    Call (267) 391-7642

                </a>

            </div>

        </div>

    </div>

</div>

</section>

@endsection