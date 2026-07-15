<aside class="w-70 min-h-screen bg-[#0a0a0a] text-white flex flex-col shadow-2xl">

    <!-- Logo -->
    <div class="h-20 border-b border-white/10 px-6 flex items-center">

        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-4">

            <div class="w-11 h-11 rounded-xl  bg-gradient-to-br from-[#002868] to-[#001845] flex items-center justify-center shadow-lg">

                <span class="text-xl font-bold">P</span>

            </div>

            <div>

                <h2 class="font-serif text-base font-semibold text-white">
                    Patriot Business
                </h2>

                <p class="text-xs uppercase tracking-[0.2em] text-white/50">
                    Admin Panel
                </p>

            </div>

        </a>

    </div>

    <!-- Navigation -->
    <nav class="flex-1 overflow-y-auto px-4 py-6">

        <!-- Main -->
        <div>

            <p class="text-[11px] uppercase tracking-[0.2em] text-white/40 mb-3 px-3">
                Main
            </p>

            <a
                href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all
                {{ request()->routeIs('admin.dashboard')
                    ? 'bg-[#002868] shadow-lg border-l-4 border-blue-400'
                    : 'hover:bg-white/10' }}">

                <!-- LayoutDashboard -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                     fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     stroke-width="2">
                    <rect width="7" height="9" x="3" y="3" rx="1"/>
                    <rect width="7" height="5" x="14" y="3" rx="1"/>
                    <rect width="7" height="9" x="14" y="12" rx="1"/>
                    <rect width="7" height="5" x="3" y="16" rx="1"/>
                </svg>

                Dashboard
            </a>

        </div>

        

        <!-- Content Management -->
        <div class="mt-8">

            <p class="text-[11px] uppercase tracking-[0.2em] text-white/40 mb-3 px-3">
                Content Management
            </p>

              <a
                href="{{ route('admin.listings.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all
                {{ request()->routeIs('admin.listings.index')
                    ? 'bg-[#002868] shadow-lg border-l-4 border-blue-400'
                    : 'hover:bg-white/10' }}">

                 <!-- Briefcase -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-5 h-5 text-blue-300"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <rect x="2" y="7" width="20" height="14" rx="2"/>
                            <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>

                        </svg>

                        Businesses

            </a>

                  <a
              href="{{ route('admin.categories.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all
                {{ request()->routeIs('admin.categories.index')
                    ? 'bg-[#002868] shadow-lg border-l-4 border-blue-400'
                    : 'hover:bg-white/10' }}">

                  <!-- FolderTree -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-5 h-5 text-emerald-300"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path d="M3 3h8v6H3z"/>
                            <path d="M13 15h8v6h-8z"/>
                            <path d="M3 15h8v6H3z"/>
                            <path d="M7 9v3h10v3"/>

                        </svg>

                        Categories

            </a>

                  <a
                href="{{ route('admin.testimonials.index') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl transition-all
                {{ request()->routeIs('admin.testimonials.index')
                    ? 'bg-[#002868] shadow-lg border-l-4 border-blue-400'
                    : 'hover:bg-white/10' }}">

                   <!-- MessageSquareQuote -->
                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-5 h-5 text-yellow-300"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">

                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                            <path d="M8 9h.01M12 9h.01"/>

                        </svg>

                        Testimonials

            </a>

        </div>

        <!-- Website -->
        <div class="mt-8">

            <p class="text-[11px] uppercase tracking-[0.2em] text-white/40 mb-3 px-3">
                Website
            </p>

            <a href="{{ route('home') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl hover:bg-white/10 transition">

                <!-- Globe -->
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5 text-cyan-300"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <circle cx="12" cy="12" r="10"/>
                    <path d="M2 12h20"/>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>

                </svg>

                View Website

            </a>

        </div>

    </nav>

    <!-- Footer -->
    <div class="border-t border-white/10 p-4">

        <form action="{{ route('logout') }}" method="POST">

            @csrf

            <button
                class="w-full flex items-center justify-center gap-2 bg-[#BF0A30] hover:bg-red-700 rounded-xl py-3 transition">

                <!-- LogOut -->
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-5 h-5"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <path d="m16 17 5-5-5-5"/>
                    <path d="M21 12H9"/>

                </svg>

                Logout

            </button>

        </form>

    </div>

</aside>