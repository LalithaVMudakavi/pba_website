<section id="testimonials" class="py-24 bg-gray-50 scroll-mt-16">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->

        <div class="text-center max-w-3xl mx-auto mb-16">

            <p class="text-sm font-medium uppercase tracking-widest text-[#BF0A30] mb-4">

                Client Stories

            </p>

            <h2 class="font-serif text-2xl sm:text-3xl md:text-4xl font-medium text-[#081628] tracking-tight">

                What Our Clients Say

            </h2>

            <p class="mt-4 text-lg text-gray-600">

                Our clients trust Patriot Business Advisors to guide them through
                successful business acquisitions and sales with professionalism,
                confidentiality and expertise.

            </p>

        </div>

        <!-- Cards -->

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach($testimonials as $testimonial)

           <div
    class="group bg-white rounded-2xl border border-gray-200
           shadow-sm hover:shadow-xl
           hover:-translate-y-2
           transition duration-300 overflow-hidden
           flex flex-col h-full">

                <!-- Top -->

               <div class="p-8 flex-1 flex flex-col">

                    <!-- Quote -->

                    <div
                        class="w-14 h-14 rounded-2xl
                               bg-[#002868]/10
                               flex items-center justify-center mb-6">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-7 h-7 text-[#002868]"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="2">

                            <path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/>

                            <path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"/>

                        </svg>

                    </div>

                    <!-- Stars -->

                    <div class="flex gap-1 mb-5">

                        @for($i=0;$i<5;$i++)

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-5 h-5 fill-yellow-400 text-yellow-400"
                             viewBox="0 0 24 24">

                            <path d="M12 .587l3.668 7.431L24 9.748l-6 5.849 1.417 8.264L12 19.771l-7.417 4.09L6 15.597 0 9.748l8.332-1.73z"/>

                        </svg>

                        @endfor

                    </div>

                    <!-- Testimonial -->

                    <p class="text-gray-600 leading-8 italic flex-1">

    "{{ $testimonial->testimonial }}"

</p>

                </div>

                <!-- Bottom -->

                <div
    class="mt-auto px-8 py-6 border-t bg-gray-50 flex items-center gap-4">

                    <!-- Avatar -->

                    <div
                        class="w-14 h-14 rounded-full
                               bg-[#002868]
                               text-white
                               flex items-center justify-center
                               text-lg font-semibold">

                        {{ strtoupper(substr($testimonial->name,0,1)) }}

                    </div>

                    <div>

                        <h3 class="font-semibold text-[#081628]">

                            {{ $testimonial->name }}

                        </h3>

                        <p class="text-sm text-[#BF0A30]">

                            {{ $testimonial->designation }}

                        </p>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>