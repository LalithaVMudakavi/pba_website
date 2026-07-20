<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out bg-[#0a0a0a]">
       <!-- Top Bar -->
    <!-- <div class="hidden sm:block border-b border-white/10">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div class="flex items-center justify-between py-2 text-xs text-white/60">
                <span class="text-xs">
                    Full-Service Business Brokerage |
                    PA, NJ, DE, NY & 36 more states
                </span>
                
                <div class="flex items-center gap-4">
                 <a href="tel:+12673917642" class="flex items-center gap-1.5 hover:text-white transition-colors"> 
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-printer w-4 h-4" aria-hidden="true">
                   <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                  </svg>
                  (267) 391-7642
                 </a>
                
                 <a href="mailto:tietjen@patriotbusinessadvisors.com" class="hover:text-white transition-colors">
                 tietjen@patriotbusinessadvisors.com
                 </a>

            </div>
        </div>
    </div>
</div> -->

<nav class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    <div class="flex items-center h-24">

        <!-- Logo -->
        <div class="flex-1">

            <a href="{{ route('home') }}"
               class="flex items-center gap-3 group">

                <div class="relative w-11 h-11 rounded-lg overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#002868] to-[#001845]"></div>

                    <div class="absolute inset-0 flex items-center justify-center">
                        <span class="text-white font-bold text-lg">P</span>
                    </div>
                </div>

                <div>
                    <p class="font-serif text-white text-lg font-semibold leading-none">
                        Patriot Business
                    </p>

                    <p class="text-sm uppercase tracking-widest text-white/50 ">
                        Advisors
                    </p>
                </div>

            </a>

        </div>

        <!-- Center Navigation -->

        <div class="hidden lg:flex flex-1 justify-center">

            <div class="flex items-center gap-2">

                <a href="{{ route('about') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/70 hover:text-white hover:bg-white/5">
                    About
                </a>

                <a href="{{ route('services') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/70 hover:text-white hover:bg-white/5">
                    Services
                </a>

                <a href="{{ route('listings') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/70 hover:text-white hover:bg-white/5">
                    Listings
                </a>

                <a href="{{ route('valuation') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/70 hover:text-white hover:bg-white/5">
                    Valuation
                </a>

                 <a href="{{ route('testimonials') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/70 hover:text-white hover:bg-white/5">
                    Testimonials
                </a>

                <a href="{{ route('contact') }}"
                    class="px-4 py-2 rounded-lg text-sm font-medium text-white/70 hover:text-white hover:bg-white/5">
                    Contact 
                </a>

            </div>

        </div>

        <!-- Right Side -->

        <div class="hidden lg:flex flex-1 justify-end items-center gap-3">

            @guest

                <a
                    href="{{ route('login') }}"
                    class="inline-flex items-center justify-center h-10 px-5 rounded-lg border border-white/20 text-white hover:bg-white/10 transition">

                    Login

                </a>

                <a
                    href="{{ route('register') }}"
                    class="inline-flex items-center justify-center h-10 px-5 rounded-lg bg-[#BF0A30] hover:bg-[#a00828] text-white shadow-lg shadow-[#BF0A30]/20 transition">

                    Sign Up

                </a>

            @endguest

            @auth

                {{-- Keep your profile dropdown here --}}

            @endauth

        </div>

    </div>

</nav>

<script>

document.addEventListener("DOMContentLoaded", function () {

    const profileButton = document.getElementById("profileButton");
    const profileMenu = document.getElementById("profileMenu");
    const profileDropdown = document.getElementById("profileDropdown");

    if(profileButton){

        profileButton.addEventListener("click", function(e){

            e.stopPropagation();

            profileMenu.classList.toggle("hidden");

        });

        document.addEventListener("click", function(e){

            if(!profileDropdown.contains(e.target)){

                profileMenu.classList.add("hidden");

            }

        });

    }

});

</script>

</header>


