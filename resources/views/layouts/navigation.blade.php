<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 ease-in-out bg-[#0a0a0a]">
       <!-- Top Bar -->
    <div class="hidden sm:block border-b border-white/10">
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
</div>

<nav class="mx-auto flex max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8 py-3 sm:py-4">
    <!-- Main Navbar -->

    <div class="flex lg:flex-1">

    <a href="\" class="-m-1.5 p-1.5 flex items-center gap-2 sm:gap-3 group"> 
        <div class="relative w-9 h-9 sm:w-10 sm:h-10 rounded-lg overflow-hidden shrink-0">
            <div class="absolute inset-0 bg-gradient-to-br from-[#002868] to-[#001845]">
            </div>

            <div class="absolute inset-0 flex items-center justify-center">
             <span class="text-white font-bold text-base sm:text-lg">P</span>
            </div>

            <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
        </div>

        <div class="flex flex-col">
            <span class="font-serif text-sm sm:text-base font-semibold tracking-tight text-white leading-none">Patriot Business</span>
            <span class="text-[10px] sm:text-xs text-white/50 tracking-wider uppercase mt-0.5">Advisors</span>
        </div>
    </a>
</div>

<div class="hidden lg:flex lg:gap-x-1">

      <a href="#about" class="relative px-4 py-2 text-sm font-medium text-white/70 hover:text-white transition-colors rounded-lg hover:bg-white/5">
         About
      </a>
       <a href="#services" class="relative px-4 py-2 text-sm font-medium text-white/70 hover:text-white transition-colors rounded-lg hover:bg-white/5">
         Services
      </a>
       <a href="#listings" class="relative px-4 py-2 text-sm font-medium text-white/70 hover:text-white transition-colors rounded-lg hover:bg-white/5">
         Listings
      </a>
       <a href="#valuation" class="relative px-4 py-2 text-sm font-medium text-white/70 hover:text-white transition-colors rounded-lg hover:bg-white/5">
         Valuations
      </a>
       <a href="#testimonials" class="relative px-4 py-2 text-sm font-medium text-white/70 hover:text-white transition-colors rounded-lg hover:bg-white/5">
         Testimonials
      </a>

       <a href="#contact" class="relative px-4 py-2 text-sm font-medium text-white/70 hover:text-white transition-colors rounded-lg hover:bg-white/5">
        Contact
       </a>
    </div>

   <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:gap-x-3">

    @guest

        <a
            href="{{ route('login') }}"
            class="inline-flex items-center justify-center h-10 px-5 rounded-lg
                   border border-white/20 text-white/80
                   hover:bg-white/10 hover:text-white transition">

            Login

        </a>

        <a
            href="{{ route('register') }}"
            class="inline-flex items-center justify-center h-10 px-5 rounded-lg
                   bg-[#002868] hover:bg-[#00184d]
                   text-white shadow-lg transition">

            Sign Up

        </a>

    @endguest


    @auth

        <div class="relative" id="profileDropdown">

            <button
                id="profileButton"
                type="button"
                class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-white/10 transition">

                <div
                    class="w-9 h-9 rounded-full bg-[#002868]
                           flex items-center justify-center
                           text-white font-semibold">

                    {{ strtoupper(substr(Auth::user()->name,0,1)) }}

                </div>

                <div class="hidden xl:block text-left">

                    <p class="text-sm text-white font-medium">

                        {{ Auth::user()->name }}

                    </p>

                    <p class="text-xs text-white/50">

                        {{ Auth::user()->email }}

                    </p>

                </div>

                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-4 h-4 text-white/60"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m6 9 6 6 6-6"/>

                </svg>

            </button>


            <div
                id="profileMenu"
                class="hidden absolute right-0 mt-3 w-60
                       rounded-xl bg-white shadow-xl
                       border border-gray-200 overflow-hidden">

                <div class="px-4 py-4 border-b">

                    <p class="font-semibold text-gray-900">

                        {{ Auth::user()->name }}

                    </p>

                    <p class="text-sm text-gray-500">

                        {{ Auth::user()->email }}

                    </p>

                </div>

                @if(Auth::user()->role === 'admin')

                    <a
                        href="{{ route('admin.dashboard') }}"
                        class="block px-4 py-3 text-sm hover:bg-gray-100">

                        Admin Dashboard

                    </a>

                @endif

                <form method="POST" action="{{ route('logout') }}">

                    @csrf

                    <button
                        type="submit"
                        class="w-full text-left px-4 py-3
                               text-sm text-red-600
                               hover:bg-red-50">

                        Logout

                    </button>

                </form>

            </div>

        </div>

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


