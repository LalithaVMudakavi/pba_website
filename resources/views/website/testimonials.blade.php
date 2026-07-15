

<section id="testimonials" class="py-24 bg-gray-50 scroll-mt-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->

        <div class="text-center mb-16">

            <p class="text-sm font-medium uppercase tracking-widest text-[#BF0A30] mb-4">

                Client Stories

            </p>

            <h2 class="font-serif text-2xl sm:text-3xl md:text-4xl font-medium text-foreground tracking-tight">

                What Our Clients Say

            </h2>

        </div>

        <!-- Testimonial Card -->

        <div class="max-w-4xl mx-auto">
          
                    <!-- Quote Icon -->
           <div class="relative bg-card p-5 sm:p-8 md:p-12 rounded-xl border border-border">

               <svg xmlns="http://www.w3.org/2000/svg"
                     class="lucide lucide-quote w-8 h-8 sm:w-12 sm:h-12 text-[#002868]/20 mb-4 sm:mb-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     >

                    <path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/>
                    <path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/>
                </svg>

             <blockquote
    id="testimonial-text"
    class="text-lg sm:text-xl md:text-2xl text-foreground leading-relaxed mb-6 sm:mb-8">

    Patriot Business Advisors is a fantastic resource for both buyers and sellers of business of any size! The team was professional, knowledgeable, and made the entire process seamless.

</blockquote>

                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                    <div>
                        <div id="testimonial-name" class="font-semibold text-foreground">
                           Joseph
                        </div>
                        <div id="testimonial-role" class="text-xs sm:text-sm text-muted-foreground">
    Business Seller | Brick, NJ
</div>
                    </div>
                   
                    <div class="flex gap-2 self-end sm:self-auto">
                      <button id="prevTestimonial" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs dark:bg-input/30 dark:border-input dark:hover:bg-input/50 size-9 rounded-full border-[#002868] text-[#002868] hover:bg-[#002868] hover:text-white">
                    
                      <svg xmlns="http://www.w3.org/2000/svg"
                     class="lucide lucide-chevron-left h-4 w-4"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     >

                    <path d="m15 18-6-6 6-6"/>
                </svg>
            </button>

                <button id="nextTestimonial" data-slot="button" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium
                        transition-all disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg:not([class*='size-'])]:size-4 shrink-0 
                        [&_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 
                        dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background shadow-xs dark:bg-input/30 dark:border-input 
                        dark:hover:bg-input/50 size-9 rounded-full border-[#002868] text-[#002868] hover:bg-[#002868] hover:text-white">
                    
                      <svg xmlns="http://www.w3.org/2000/svg"
                     class="lucide lucide-chevron-right h-4 w-4"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                     stroke-width="2"
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     >

                    <path d="m9 18 6-6-6-6"/>
                </svg>
            </button>


                    </div>
           </div>

                    <!-- Pagination Dots -->

        <div class="flex justify-center gap-2 mt-6">

            <!-- Active Dot -->
            <button class="dot  w-2 h-2 rounded-full transition-colors bg-[#002868]"></button>

            <!-- Dot -->
            <button class="dot  w-2 h-2 rounded-full transition-colors bg-[#002868]/20"></button>

            <!-- Dot -->
            <button class="dot  w-2 h-2 rounded-full transition-colors bg-[#002868]/20"></button>

        </div>

    </div>

</section>

<script>

    const testimonials = @json($testimonials->toArray());

let current = 0;

const text = document.getElementById("testimonial-text");
const name = document.getElementById("testimonial-name");
const role = document.getElementById("testimonial-role");

const dots = document.querySelectorAll(".dot");

function renderTestimonial(){

   text.textContent = testimonials[current].testimonial;

name.textContent = testimonials[current].name;

role.textContent = testimonials[current].designation;

    dots.forEach((dot,index)=>{

        if(index===current){

            dot.classList.remove("bg-[#002868]/20");

            dot.classList.add("bg-[#002868]");

        }else{

            dot.classList.remove("bg-[#002868]");

            dot.classList.add("bg-[#002868]/20");

        }

    });

}

document.getElementById("nextTestimonial").addEventListener("click",()=>{

    current++;

    if(current>=testimonials.length){

        current=0;

    }

    renderTestimonial();

});

document.getElementById("prevTestimonial").addEventListener("click",()=>{

    current--;

    if(current<0){

        current=testimonials.length-1;

    }

    renderTestimonial();

});

dots.forEach((dot,index)=>{

    dot.addEventListener("click",()=>{

        current=index;

        renderTestimonial();

    });

});

renderTestimonial();

</script>

