<header class="h-20 bg-white border-b border-gray-200 shadow-sm flex items-center justify-between px-8">

    <!-- Left -->
    <div>

        <h1 class="text-2xl font-serif font-semibold text-[#081628]">

            @yield('page-title', 'Dashboard')

        </h1>

        <p class="text-sm text-gray-500 mt-1">

            Patriot Business Advisors Admin Panel

        </p>

    </div>

    <!-- Right -->
    <div class="flex items-center gap-5">

        <!-- Search -->
        <div class="hidden md:block relative">

            <input
                type="text"
                placeholder="Search..."
                class="w-72 rounded-lg border border-gray-300 pl-10 pr-4 py-2
                       focus:outline-none focus:ring-2 focus:ring-[#002868]
                       focus:border-[#002868]">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="absolute left-3 top-2.5 w-5 h-5 text-gray-400"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="m21 21-4.35-4.35M10.5 18a7.5 7.5 0 100-15 7.5 7.5 0 000 15z"/>

            </svg>

        </div>

        <!-- Notification -->
        <button
            class="relative w-10 h-10 rounded-full hover:bg-gray-100 flex items-center justify-center">

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-6 h-6 text-gray-600"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke="currentColor">

                <path stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 17h5l-1.4-1.4A2 2 0 0118 14.2V11a6 6 0 10-12 0v3.2a2 2 0 01-.6 1.4L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>

            </svg>

            <span
                class="absolute top-2 right-2 w-2 h-2 rounded-full bg-red-500">
            </span>

        </button>

        <!-- Profile Dropdown -->
        <div
            x-data="{ open: false }"
            class="relative">

            <button
                @click="open = !open"
                class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-gray-100 transition">

                <div
                    class="w-10 h-10 rounded-full bg-[#002868] text-white flex items-center justify-center font-semibold">

                    {{ strtoupper(substr(Auth::user()->name,0,1)) }}

                </div>

                <div class="hidden md:block text-left">
                    
                    <p class="text-xs text-gray-500">

                        {{ ucfirst(Auth::user()->role) }}

                    </p>

                    <p class="font-medium text-gray-800">

                        {{ Auth::user()->email }}

                    </p>


                </div>

                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-4 h-4 text-gray-500"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor">

                    <path stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="m6 9 6 6 6-6"/>

                </svg>

            </button>

            <!-- Dropdown -->
            <div
                x-show="open"
                @click.away="open = false"
                x-transition
                class="absolute right-0 mt-3 w-56 bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden z-50">

                <div class="px-5 py-4 border-b">

                    <p class="font-semibold">

                        {{ Auth::user()->name }}

                    </p>

                    <p class="text-sm text-gray-500">

                        {{ Auth::user()->email }}

                    </p>

                </div>

                <a
                    href="#"
                    class="block px-5 py-3 hover:bg-gray-100">

                    My Profile

                </a>

                <form
                    action="{{ route('logout') }}"
                    method="POST">

                    @csrf

                    <button
                        type="submit"
                        class="w-full text-left px-5 py-3 text-red-600 hover:bg-red-50">

                        Logout

                    </button>

                </form>

            </div>

        </div>

    </div>

</header>