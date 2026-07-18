@extends('layouts.app')

@section('content')

<section class="pt-36 pb-24 bg-gradient-to-b from-white via-gray-50 to-white">

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

        <span class="text-gray-400">

            Services

        </span>

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

            Seller Mandate

        </span>

    </nav>

    <!-- ========================================= -->
    <!-- Hero -->
    <!-- ========================================= -->

    <div class="mt-10 overflow-hidden rounded-3xl bg-[#002868] relative">

        <div class="absolute inset-0 opacity-10">

            <svg width="100%" height="100%">

                <defs>

                    <pattern
                        id="sellerPattern"
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
                    fill="url(#sellerPattern)"/>

            </svg>

        </div>

        <div class="relative z-10 px-10 py-12 lg:px-20">

            <span
                class="inline-flex px-4 py-2 rounded-full
                       bg-white/10 text-white text-sm">

                Business Selling Services

            </span>

            <h1
                class="mt-6 text-4xl md:text-5xl lg:text-6xl
                       font-serif font-medium
                       text-white leading-tight">

                Seller Mandate

            </h1>

            <p
                class="mt-3 max-w-3xl
                       text-lg text-white/80
                       leading-8">

                Helping business owners successfully prepare,
                market and sell their businesses while maximizing
                value and maintaining complete confidentiality.

            </p>

            <!-- <div class="mt-10 flex flex-wrap gap-4">

                <a
                    href="{{ route('contact') }}"
                    class="px-7 py-4 rounded-xl
                           bg-[#BF0A30]
                           hover:bg-[#a00828]
                           text-white font-semibold">

                    Speak With An Advisor

                </a>

                <a
                    href="{{ route('listings') }}"
                    class="px-7 py-4 rounded-xl
                           border border-white/30
                           text-white
                           hover:bg-white/10">

                    View Success Stories

                </a>

            </div> -->

        </div>

    </div>

    <!-- ========================================= -->
    <!-- About -->
    <!-- ========================================= -->

    <div class="mt-20">

        <div class="text-center max-w-3xl mx-auto">

            <p
                class="text-sm uppercase tracking-[0.25em]
                       text-[#BF0A30] font-semibold">

                Selling Your Business

            </p>

            <h2
                class="mt-3 text-4xl
                       font-serif font-medium
                       text-[#081628]">

                What is Seller Mandate?

            </h2>

            <p
                class="mt-6 text-lg leading-8 text-gray-600">

                Selling a business is one of the most important
                financial decisions an owner can make.
                Patriot Business Advisors represents business
                owners throughout the entire selling process,
                from valuation to closing, ensuring maximum
                exposure while protecting confidentiality.

            </p>

        </div>

        <!-- Feature Cards -->

        <div class="mt-16 grid md:grid-cols-3 gap-8">

            <!-- Card -->

            <div
                class="rounded-2xl border bg-white p-8
                       hover:border-[#002868] transition">

                <div
                    class="w-14 h-14 rounded-xl
                           bg-blue-100
                           flex items-center justify-center
                           text-3xl">

                    📈

                </div>

                <h3
                    class="mt-6 text-xl font-semibold
                           text-[#081628]">

                    Business Valuation

                </h3>

                <p
                    class="mt-4 text-gray-600 leading-7">

                    We determine a realistic market value
                    based on financial performance,
                    industry trends and business potential.

                </p>

            </div>

            <!-- Card -->

            <div
                class="rounded-2xl border bg-white p-8
                       hover:border-[#002868] transition">

                <div
                    class="w-14 h-14 rounded-xl
                           bg-green-100
                           flex items-center justify-center
                           text-3xl">

                    🌎

                </div>

                <h3
                    class="mt-6 text-xl font-semibold
                           text-[#081628]">

                    Nationwide Marketing

                </h3>

                <p
                    class="mt-4 text-gray-600 leading-7">

                    We market your business to qualified
                    buyers through our extensive network,
                    online platforms and industry contacts.

                </p>

            </div>

            <!-- Card -->

            <div
                class="rounded-2xl border bg-white p-8
                       hover:border-[#002868] transition">

                <div
                    class="w-14 h-14 rounded-xl
                           bg-red-100
                           flex items-center justify-center
                           text-3xl">

                    🤝

                </div>

                <h3
                    class="mt-6 text-xl font-semibold
                           text-[#081628]">

                    Deal Management

                </h3>

                <p
                    class="mt-4 text-gray-600 leading-7">

                    From buyer screening to negotiations
                    and closing, we manage every stage
                    of the transaction professionally.

                </p>

            </div>

        </div>

    </div>

    <!-- ========================================= -->
    <!-- Selling Process -->
    <!-- ========================================= -->

    <div class="mt-28">

        <div class="text-center">

            <p
                class="text-sm uppercase tracking-[0.25em]
                       text-[#BF0A30] font-semibold">

                Our Process

            </p>

            <h2
                class="mt-5 text-4xl
                       font-serif font-medium
                       text-[#081628]">

                How We Help Business Owners Sell Successfully

            </h2>

            <p
                class="mt-5 text-lg text-gray-600
                       max-w-3xl mx-auto">

                Every business sale follows a structured,
                confidential and professional process designed
                to maximize value while minimizing risk.

            </p>

        </div>

        <!-- Timeline Starts Here -->
                 <div class="mt-16 relative">

            <!-- Center Line -->

            <div class="hidden lg:block absolute left-1/2 top-0 bottom-0 w-1 bg-gray-200 -translate-x-1/2"></div>

            <div class="space-y-16">

                <!-- STEP 1 -->

                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div class="lg:text-right">

                        <span class="text-sm font-semibold uppercase tracking-widest text-[#BF0A30]">

                            Step 01

                        </span>

                        <h3 class="mt-3 text-2xl font-semibold text-[#081628]">

                            Initial Consultation

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            We begin by understanding your business,
                            your goals and your expected timeline.
                            Every discussion remains completely
                            confidential.

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

                <!-- STEP 2 -->

                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div class="order-2">

                        <span class="text-sm font-semibold uppercase tracking-widest text-[#BF0A30]">

                            Step 02

                        </span>

                        <h3 class="mt-3 text-2xl font-semibold text-[#081628]">

                            Business Valuation

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            Our advisors perform a comprehensive
                            valuation based on financial statements,
                            market conditions, industry trends and
                            growth opportunities.

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

                <!-- STEP 3 -->

                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div class="lg:text-right">

                        <span class="text-sm font-semibold uppercase tracking-widest text-[#BF0A30]">

                            Step 03

                        </span>

                        <h3 class="mt-3 text-2xl font-semibold text-[#081628]">

                            Marketing & Buyer Screening

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            We confidentially market your business to
                            qualified buyers while carefully screening
                            prospects to ensure they are financially
                            capable and genuinely interested.

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

                <!-- STEP 4 -->

                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div class="order-2">

                        <span class="text-sm font-semibold uppercase tracking-widest text-[#BF0A30]">

                            Step 04

                        </span>

                        <h3 class="mt-3 text-2xl font-semibold text-[#081628]">

                            Negotiation & Due Diligence

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            We negotiate the best possible terms and
                            assist throughout due diligence while
                            protecting your interests at every stage.

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

                <!-- STEP 5 -->

                <div class="grid lg:grid-cols-2 gap-12 items-center">

                    <div class="lg:text-right">

                        <span class="text-sm font-semibold uppercase tracking-widest text-[#BF0A30]">

                            Step 05

                        </span>

                        <h3 class="mt-3 text-2xl font-semibold text-[#081628]">

                            Closing The Deal

                        </h3>

                        <p class="mt-4 text-gray-600 leading-8">

                            We coordinate with attorneys,
                            accountants and financial institutions
                            to complete a smooth and successful
                            business sale.

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

                Seller FAQs

            </h2>

            <p
                class="mt-6 text-lg leading-8 text-gray-600">

                Answers to common questions from business owners
                preparing to sell their businesses.

            </p>

        </div>

        <div class="mt-14 space-y-6">

            <div class="bg-white border rounded-2xl p-8">

                <h3 class="font-semibold text-lg text-[#081628]">

                    How long does it take to sell a business?

                </h3>

                <p class="mt-3 text-gray-600 leading-7">

                    The timeline varies depending on the industry,
                    valuation and market demand. Most transactions
                    are completed within several months after
                    confidential marketing begins.

                </p>

            </div>

            <div class="bg-white border rounded-2xl p-8">

                <h3 class="font-semibold text-lg text-[#081628]">

                    Will my employees know my business is for sale?

                </h3>

                <p class="mt-3 text-gray-600 leading-7">

                    No. Confidentiality is one of our highest
                    priorities. Information is only shared with
                    qualified buyers after appropriate agreements
                    are signed.

                </p>

            </div>

            <div class="bg-white border rounded-2xl p-8">

                <h3 class="font-semibold text-lg text-[#081628]">

                    How is my business valued?

                </h3>

                <p class="mt-3 text-gray-600 leading-7">

                    We evaluate financial performance, industry
                    trends, assets, growth opportunities and market
                    conditions to determine a competitive selling
                    price.

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
                class="uppercase tracking-[0.25em]
                       text-white/70
                       text-sm
                       font-semibold">

                Ready To Sell?

            </p>

            <h2
                class="mt-6 text-5xl
                       font-serif font-medium
                       text-white">

                Ready to Sell Your Business?

            </h2>

            <p
                class="mt-6 max-w-3xl mx-auto
                       text-lg leading-8
                       text-white/80">

                Let Patriot Business Advisors guide you through
                every stage of the selling process—from valuation
                to closing—with complete confidentiality and
                professional support.

            </p>

            <div
                class="mt-10 flex flex-col sm:flex-row
                       justify-center gap-5">

                <a
                    href="{{ route('contact') }}"
                    class="inline-flex items-center justify-center
                           px-8 py-4
                           rounded-xl
                           bg-white
                           text-[#002868]
                           font-semibold
                           hover:bg-gray-100
                           transition">

                    Contact Us

                </a>

                <a
                    href="{{ route('listings') }}"
                    class="inline-flex items-center justify-center
                           px-8 py-4
                           rounded-xl
                           border border-white/30
                           text-white
                           hover:bg-white/10
                           transition">

                    Browse Businesses

                </a>

            </div>

        </div>

    </div>

</div>

</section>

@endsection