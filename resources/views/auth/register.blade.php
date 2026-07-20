<x-guest-layout>

@section('content')

<div class="min-h-screen flex bg-gray-100">

    <!-- Left Side -->

    <div class="hidden lg:flex lg:w-1/2 relative overflow-hidden bg-gradient-to-br from-[#001845] via-[#002868] to-[#0b4bb3]">

        <div class="absolute inset-0 bg-black/20"></div>

        <div class="relative z-10 flex flex-col justify-center px-16 text-white">

            <div class="flex items-center gap-4">

               <div
                    class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#1E5EFF] to-[#002868]
                    flex items-center justify-center shadow-2xl">

                    <span class="text-2xl font-bold">
                        P
                    </span>

                </div>

                <div>

                    <h1 class="text-3xl font-serif font-bold">

                        Patriot Business 

                    </h1>

                   <p class="text-[#BF0A30] text-lg">

                       Advisors

                    </p>

                </div>

            </div>

            <h2 class="mt-10 text-5xl font-serif leading-tight">

                Start Your Journey

                <span class="block text-[#BF0A30]">

                    With Confidence

                </span>

            </h2>

            <p class="mt-3 text-lg leading-8 text-white/80">

                Join Patriot Business Advisors and gain access to
                exclusive business opportunities, professional
                brokerage services and trusted business advisors.

            </p>

            <div class="grid grid-cols-3 gap-6 mt-16">

                <div>

                    <h3 class="text-3xl font-bold">

                        18+

                    </h3>

                    <p class="text-white/70">

                        Years Experience

                    </p>

                </div>

                <div>

                    <h3 class="text-3xl font-bold">

                        40

                    </h3>

                    <p class="text-white/70">

                        States Served

                    </p>

                </div>

                <div>

                    <h3 class="text-3xl font-bold">

                        500+

                    </h3>

                    <p class="text-white/70">

                        Businesses Sold

                    </p>

                </div>

            </div>

        </div>

    </div>

    <!-- Right Side -->

    <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-16">

        <div class="w-full max-w-md">

            <div class="bg-white rounded-3xl shadow-2xl p-10">

                <div class="text-center">

                    <h2 class="text-3xl font-serif text-[#081628]">

                        Create Account

                    </h2>

                    <p class="mt-2 text-gray-500">

                        Register to access your account.

                    </p>

                </div>

                <form
                    method="POST"
                    action="{{ route('register') }}"
                    class="mt-8 space-y-4">

                    @csrf

                    <!-- Name -->

                    <div>

                        <label class="text-sm font-medium text-gray-700">

                            Full Name

                        </label>

                        <input
                            type="text"
                            name="name"
                            value="{{ old('name') }}"
                            required
                            class="mt-2 w-full rounded-xl border border-gray-300 px-4 py-2.5 focus:ring-2 focus:ring-[#002868] focus:border-[#002868]">

                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>

                    </div>

                    <!-- Email -->

                    <div>

                        <label class="text-sm font-medium text-gray-700">

                            Email Address

                        </label>

                        <input
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            class="mt-2 w-full rounded-xl border border-gray-300 px-4 py-2.5 focus:ring-2 focus:ring-[#002868] focus:border-[#002868]">

                        <x-input-error :messages="$errors->get('email')" class="mt-2"/>

                    </div>

                    <!-- Password -->

                    <div>

                        <label class="text-sm font-medium text-gray-700">

                            Password

                        </label>

                        <input
                            type="password"
                            name="password"
                            required
                            class="mt-2 w-full rounded-xl border border-gray-300 px-4 py-2.5 focus:ring-2 focus:ring-[#002868] focus:border-[#002868]">

                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>

                    </div>

                    <!-- Confirm Password -->

                    <div>

                        <label class="text-sm font-medium text-gray-700">

                            Confirm Password

                        </label>

                        <input
                            type="password"
                            name="password_confirmation"
                            required
                            class="mt-2 w-full rounded-xl border border-gray-300 px-4 py-2.5 focus:ring-2 focus:ring-[#002868] focus:border-[#002868]">

                    </div>

                    <button
                        type="submit"
                        class="w-full py-3 rounded-xl bg-[#002868] hover:bg-[#00184d] text-white font-semibold transition">

                        Create Account

                    </button>

                    <div class="text-center text-gray-500">

                        Already have an account?

                        <a
                            href="{{ route('login') }}"
                            class="font-semibold text-[#002868] hover:text-[#BF0A30]">

                            Login

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</x-guest-layout>