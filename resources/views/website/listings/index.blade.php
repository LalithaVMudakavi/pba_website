

<section id="listings" class="py-24 bg-gray-50 scroll-mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-12">
            <div>
                <p class="text-sm font-medium uppercase tracking-widest text-[#BF0A30] mb-4">
                    Current Opportunities
                </p>
                <h2 class="font-serif text-3xl md:text-4xl font-medium text-foreground tracking-tight">
                    Businesses for Sale
                </h2>
                <p class="mt-4 text-lg text-muted-foreground max-w-2xl">
                    Browse our current listings in Pennsylvania, New Jersey, Delaware, and New York. All listings are confidential until NDA is signed.
                </p>    
            </div>   

            <!-- <button data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm font-medium transition-all 
            disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none
             focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 
             aria-invalid:border-destructive border bg-background shadow-xs dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[>svg]:px-3
            border-[#002868] text-[#002868] hover:bg-[#002868] hover:text-white" fdprocessedid="eibi1o">

             <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-funnel w-4 h-4 mr-2"
                         aria-hidden="true" >
                
                <path d="M10 20a1 1 0 0 0 .553.895l2 1A1 1 0 0 0 14 21v-7a2 2 0 0 1 .517-1.341L21.74 4.67A1 1 0 0 0 21 3H3a1 1 0 0 0-.742 1.67l7.225 7.989A2 2 0 0 1 10 14z"></path>
              </svg>

              Advanced Search

            </button> -->
        </div>

        
        <div class="flex flex-wrap gap-3 mb-10">

            @foreach($categories as $category)

                <button

                   class="category-btn
px-5
py-2
rounded-full
text-sm
font-medium
transition-all
duration-300

{{ $loop->first
? 'bg-[#002868] text-white'
: 'bg-gray-100 text-gray-700 hover:bg-gray-200'
}}"
                      data-category="{{ strtolower($category->slug) }}">

                        {{ $category->name }}

                </button>

            @endforeach

        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

    @foreach($businesses as $business)

    <div
        class="business-card bg-white rounded-xl border border-gray-200
               shadow-sm hover:shadow-xl hover:border-[#002868]
               transition-all duration-300 overflow-hidden group"

        data-category="{{ strtolower($business->category->slug) }}">

        @if($business->files->count())

<div class="h-52 overflow-hidden">

@php

$image = $business->files->first(function($file){

    return in_array(strtolower($file->file_type),[
        'jpg',
        'jpeg',
        'png',
        'webp'
    ]);

});

@endphp

  @if($image)

<img
    src="{{ asset('storage/'.$image->file_path) }}"
    class="w-full h-52 object-cover">

@endif

</div>

@else

<div
    class="h-52
           bg-gradient-to-r
           from-[#002868]
           to-[#1d4ed8]
           flex
           items-center
           justify-center">

    <svg xmlns="http://www.w3.org/2000/svg"
         class="w-20 h-20 text-white/70"
         fill="none"
         viewBox="0 0 24 24"
         stroke="currentColor">

        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M3 21h18M5 21V7l8-4 6 3v15M9 9h.01M9 13h.01M15 9h.01M15 13h.01"/>

    </svg>

</div>

@endif

        <!-- Card Header -->

        <div class="p-6 pb-4">

            <div class="flex justify-between items-start">

                <div>

                    @if($business->featured)

                    <span class="inline-flex px-2 py-1 rounded-md text-xs font-semibold bg-[#BF0A30] text-white mb-3">

                        Featured

                    </span>

                    @endif

                    <h3 class="text-xl font-semibold text-[#081628] group-hover:text-[#002868] transition">

                        {{ $business->title }}

                    </h3>

                </div>

                <!-- Building Icon -->

                <div class="w-10 h-10 rounded-lg bg-[#002868]/10 flex items-center justify-center">

                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="lucide lucide-building2 lucide-building-2 w-5 h-5 text-[#002868]"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round">

                        <path d="M10 12h4"></path>
                        <path d="M10 8h4"></path>
                        <path d="M14 21v-3a2 2 0 0 0-4 0v3"></path>
                        <path d="M6 10H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-2"></path>
                        <path d="M6 21V5a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v16"></path>

                    </svg>

                </div>

            </div>

        </div>

        <!-- Card Content Starts -->
                 <!-- Card Body -->

        <div class="px-6 pb-6">

            <!-- Description -->

            <p class="text-gray-600 text-sm leading-6 line-clamp-2">

                {{ $business->description }}

            </p>

            <!-- Location -->

            <div class="flex items-center gap-2 mt-5 text-sm text-gray-500">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 text-[#002868]"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"/>

                    <circle cx="12" cy="10" r="3"/>

                </svg>

               {{ $business->location }}

            </div>

            <!-- Price & Cash Flow -->

            <div class="grid grid-cols-2 gap-6 mt-6 pt-6 border-t border-gray-200">

                <!-- Asking Price -->

                <div>

                    <div class="flex items-center gap-1 text-xs uppercase tracking-wide text-gray-500">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-3 h-3"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <line x1="12" y1="2" x2="12" y2="22"/>

                            <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>

                        </svg>

                        Asking Price

                    </div>

                    <p class="mt-2 text-lg font-bold text-[#081628]">

                       ${{ number_format($business->price, 0) }}

                    </p>

                </div>

                <!-- Cash Flow -->

                <div>

                    <div class="flex items-center gap-1 text-xs uppercase tracking-wide text-gray-500">

                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-3 h-3"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">

                            <path d="M16 7h6v6"/>

                            <path d="M22 7 13.5 15.5l-5-5L2 17"/>

                        </svg>

                        Cash Flow

                    </div>

                    <p class="mt-2 text-lg font-bold text-[#081628]">

                       ${{ number_format($business->cash_flow, 0) }}

                    </p>

                </div>

            </div>

            <!-- Button -->

            <a href="{{ route('listings.show', $business->id) }}"
                class="mt-6 inline-flex items-center justify-center w-full
                       
                       rounded-lg
                       py-2
                       text-[#002868]
                       font-semibold
                       hover:bg-[#6680ab]
                       hover:text-white
                       transition-all
                       duration-300
                       group">

                View Details

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-x-1"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M5 12h14"/>

                    <path stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m12 5 7 7-7 7"/>

                </svg>

            </a>

        </div>

    </div>

    @endforeach

</div>

<!-- <div class="flex justify-center mt-12">

    <button
        class="inline-flex items-center justify-center gap-2
               rounded-md bg-[#002868] hover:bg-[#001a4d]
               text-white font-medium px-4 py-2 transition-all">

        View All Listings

        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4 h-4"
             fill="none"
             viewBox="0 0 24 24"
             stroke="currentColor">

            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M5 12h14"/>

            <path stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="m12 5 7 7-7 7"/>

        </svg>

    </button>

</div> -->

<!-- Category Filter Script -->

<script>

document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".category-btn");
    const cards = document.querySelectorAll(".business-card");

    buttons.forEach((button) => {

        button.addEventListener("click", function () {

            // Remove active state from all buttons
            buttons.forEach((btn) => {

                btn.classList.remove(
                    "bg-[#002868]",
                    "text-white"
                );

                btn.classList.add(
                    "bg-gray-100",
                    "text-gray-700"
                );

            });

            // Active button
            this.classList.remove(
                "bg-gray-100",
                "text-gray-700"
            );

            this.classList.add(
                "bg-[#002868]",
                "text-white"
            );

            const category = this.dataset.category;

            cards.forEach((card) => {

                if (category === "all") {

                    card.style.display = "block";

                } else {

                    if (card.dataset.category === category) {

                        card.style.display = "block";

                    } else {

                        card.style.display = "none";

                    }

                }

            });

        });

    });

});
</script>
            

    </div>
</section>

