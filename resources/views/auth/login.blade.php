<x-guest-layout>

<div class="min-h-screen flex bg-gradient-to-br from-slate-100 via-white to-blue-50">

    <!-- Left Side -->
    <div class="hidden lg:flex lg:w-1/2 bg-[#002868] relative overflow-hidden">

        <div class="absolute inset-0 bg-gradient-to-br from-[#002868] via-[#001845] to-[#000f2d]"></div>

        <div class="relative z-10 flex flex-col justify-center px-20 text-white">

            <!-- Logo -->
            <div class="flex items-center gap-4 mb-8">

                <div
                    class="w-14 h-14 rounded-2xl bg-gradient-to-br from-[#1E5EFF] to-[#002868]
                    flex items-center justify-center shadow-2xl">

                    <span class="text-2xl font-bold">
                        P
                    </span>

                </div>

                <div>

                    <h1 class="text-3xl font-bold">
                        Patriot Business
                    </h1>

                    <p class="text-[#BF0A30] text-lg">
                        Advisors
                    </p>

                </div>

            </div>

            <h2 class="text-5xl font-bold leading-tight">
                Welcome Back
            </h2>

            <p class="mt-6 text-blue-100 text-lg leading-8 max-w-xl">
                Access your business dashboard securely and manage your
                advisory services, clients, and reports from one place.
            </p>

            <div class="mt-12 grid grid-cols-2 gap-6">

                <div class="rounded-xl bg-white/10 p-5 backdrop-blur">

                    <h3 class="font-semibold mb-2">
                        Secure Login
                    </h3>

                    <p class="text-sm text-blue-100">
                        Protected authentication for every account.
                    </p>

                </div>

                <div class="rounded-xl bg-white/10 p-5 backdrop-blur">

                    <h3 class="font-semibold mb-2">
                        Trusted Advisors
                    </h3>

                    <p class="text-sm text-blue-100">
                        Helping businesses grow with confidence.
                    </p>

                </div>

            </div>

        </div>

    </div>

    <!-- Right Side -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-8">

        <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl p-10">

            <!-- Mobile Logo -->
            <div class="flex lg:hidden justify-center mb-8">

                <div class="flex items-center gap-3">

                    <div
                        class="w-12 h-12 rounded-xl bg-gradient-to-br from-[#002868] to-[#001845]
                        flex items-center justify-center text-white">

                        <span class="text-xl font-bold">
                            P
                        </span>

                    </div>

                    <div>

                        <h2 class="font-bold">
                            Patriot Business
                        </h2>

                        <p class="text-sm text-gray-500">
                            Advisors
                        </p>

                    </div>

                </div>

            </div>

            <h2 class="text-3xl font-bold text-gray-900">
                Sign In
            </h2>

            <p class="text-gray-500 mt-2 mb-8">
                Login to access your dashboard.
            </p>

            <x-auth-session-status
                class="mb-4"
                :status="session('status')"
            />

            <form method="POST" action="{{ route('login') }}">

                @csrf

                <!-- Email -->

                <div class="mb-5">

                    <x-input-label
                        for="email"
                        :value="__('Email Address')"
                    />

                    <x-text-input
                        id="email"
                        class="block w-full mt-2 rounded-xl border-gray-300 focus:border-[#002868] focus:ring-[#002868]"
                        type="email"
                        name="email"
                        :value="old('email')"
                        required
                        autofocus
                    />

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="mt-2"
                    />

                </div>

                <!-- Password -->

              <div class="mb-5">

    <x-input-label for="password" :value="__('Password')" />

    <div class="relative mt-2">

        <input
            id="password"
            type="password"
            name="password"
            required
            autocomplete="current-password"
            class="w-full rounded-xl border-gray-300 focus:border-[#002868] focus:ring-[#002868] pr-12"
        >

        <button
            type="button"
            id="togglePassword"
            class="absolute inset-y-0 right-0 flex items-center px-4 text-gray-500 hover:text-[#002868]"
        >

            <!-- Eye Open -->
            <svg
                id="eyeOpen"
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0zm6-0s-3-7-9-7-9 7-9 7 3 7 9 7 9-7 9-7z"/>

            </svg>

            <!-- Eye Closed -->
            <svg
                id="eyeClosed"
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5 hidden"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13.875 18.825A10.05 10.05 0 0112 19c-6 0-9-7-9-7a16.32 16.32 0 013.27-4.35M9.88 9.88A3 3 0 0114.12 14.12M3 3l18 18"/>

            </svg>

        </button>

    </div>

    <x-input-error :messages="$errors->get('password')" class="mt-2" />

</div>

                <!-- Remember -->

                <div class="flex items-center justify-between mb-8">

                    <label class="flex items-center gap-2">

                        <input
                            type="checkbox"
                            name="remember"
                            class="rounded border-gray-300 text-[#002868] focus:ring-[#002868]"
                        >

                        <span class="text-sm text-gray-600">
                            Remember Me
                        </span>

                    </label>

                    @if (Route::has('password.request'))

                        <a
                            href="{{ route('password.request') }}"
                            class="text-sm text-[#002868] hover:underline"
                        >
                            Forgot Password?
                        </a>

                    @endif

                </div>

                <button
                    type="submit"
                    class="w-full rounded-xl bg-[#002868] hover:bg-[#001845] text-white py-3 font-semibold transition duration-300 shadow-lg hover:shadow-xl"
                >

                    Log In

                </button>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const password = document.getElementById("password");
    const toggle = document.getElementById("togglePassword");
    const eyeOpen = document.getElementById("eyeOpen");
    const eyeClosed = document.getElementById("eyeClosed");

    toggle.addEventListener("click", function () {

        if (password.type === "password") {

            password.type = "text";

            eyeOpen.classList.add("hidden");
            eyeClosed.classList.remove("hidden");

        } else {

            password.type = "password";

            eyeOpen.classList.remove("hidden");
            eyeClosed.classList.add("hidden");

        }

    });

});
</script>