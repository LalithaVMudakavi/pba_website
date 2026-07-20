<footer class="bg-[#0a1628] text-white">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-16">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-8 lg:gap-12">

            <!-- Company -->
            <div class="col-span-1 sm:col-span-2 lg:col-span-1">

                <a href="{{ route('home') }}" class="inline-flex items-center gap-2">

                    <div
                        class="w-10 h-10 bg-[#002868] rounded flex items-center justify-center">

                        <span class="text-white font-bold">
                            P
                        </span>

                    </div>

                    <div>

                        <span class="font-serif text-lg font-semibold tracking-tight block leading-tight">
                            Patriot Business 
                        </span>

                        <span class="text-[#BF0A30] text-sm font-medium">
                            Advisors
                        </span>

                    </div>

                </a>

                <p class="mt-4 text-sm text-white/60 max-w-xs">
                    Full-service business brokerage specializing in profitable businesses between
                     $250K and $20M in value across forty states.
                </p>

                <div class="mt-6 space-y-3">

                    <a href="tel:+12673917642" class="flex items-center gap-3 text-sm text-white/60 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-printer w-4 h-4" aria-hidden="true">
                        <path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path>
                        </svg>
                      (267) 391-7642
                    </a>  

                     <a href="#" class="flex items-center gap-3 text-sm text-white/60 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-printer w-4 h-4" aria-hidden="true">
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                        <path d="M6 9V3a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6"></path>
                        <rect x="6" y="12" width="12" height="8" rx="1"></rect>
                        </svg>
                      Fax: (800) 903-0613
                    </a>  

                    <a href="mailto:TIETJEN@PATRIOTBUSINESSADVISORS.COM" class="flex items-center gap-3 text-sm text-white/60 hover:text-white transition-colors break-all">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-mail w-4 h-4 shrink-0" aria-hidden="true">
                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                        </svg>
                      tietjen@patriotbusinessadvisors.com
                    </a>  

                    <div class="flex items-start gap-3 text-sm text-white/60">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                        class="lucide lucide-map-pin w-4 h-4 mt-0.5 shrink-0" aria-hidden="true">
                        <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                        </svg>

                        <span>
                            4387 Swamp Road #255  
                        <br>
                          Doylestown, PA 18902
                        </span>  

                    </div>

                </div>

            </div>

            <!-- Services -->

            <div>

                <h3 class="text-sm font-semibold mb-4">
                    Services
                </h3>

                <ul class="space-y-3">

                    <li><a href="{{ route('services.buyer') }}" class="text-sm text-white/60 hover:text-white transition-colors">Buyer Mandate</a></li>

                    <li><a href="{{ route('services.seller') }}" class="text-sm text-white/60 hover:text-white transition-colors">Seller Mandate</a></li>

                    <li><a href="{{ route('services.appraisal') }}" class="text-sm text-white/60 hover:text-white transition-colors">Business Appraisals</a></li>

                    <li><a href="{{ route('listings') }}" class="text-sm text-white/60 hover:text-white transition-colors">Business Listings</a></li>

                </ul>

            </div>

            <!-- Company -->

            <div>

                <h3 class="text-sm font-semibold mb-4">
                    Company
                </h3>

                <ul class="space-y-3">
                      <li><a  href="{{ route('home') }}" class="text-sm text-white/60 hover:text-white transition-colors">Home</a></li>

                    <li><a href="{{ route('about') }}" class="text-sm text-white/60 hover:text-white transition-colors">About Us</a></li>

                    <li><a href="{{ route('process') }}" class="text-sm text-white/60 hover:text-white transition-colors">Our Process</a></li>

                    <li><a href="{{ route('testimonials') }}" class="text-sm text-white/60 hover:text-white transition-colors">Testimonials</a></li>

                    <li><a href="{{ route('contact') }}" class="text-sm text-white/60 hover:text-white transition-colors">Contact</a></li>

                </ul>

            </div>

            <!-- Resources -->

            <div>

                <h3 class="text-sm font-semibold mb-4">
                    Resources
                </h3>

                <ul class="space-y-3">

                    <li><a href="{{ route('valuation') }}" class="text-sm text-white/60 hover:text-white transition-colors">Business Valuation</a></li>

                    <li><a href="#" class="text-sm text-white/60 hover:text-white transition-colors">FAQ</a></li>

                    <li><a href="#" class="text-sm text-white/60 hover:text-white transition-colors">Market Insights</a></li>

                    <li><a href="#" class="text-sm text-white/60 hover:text-white transition-colors">News</a></li>

                </ul>

            </div>

            <!-- Coverage -->

            <div>

                <h3 class="text-sm font-semibold mb-4">
                   Coverage Areas
                </h3>

                <ul class="space-y-3">
     
                    <li class="flex items-start gap-2 text-sm text-white/60">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" 
                         class="lucide lucide-map-pin w-4 h-4 mt-0.5 shrink-0" aria-hidden="true">
                         <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                         <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                         Pennsylvania
                    </li>

                    <li class="flex items-start gap-2 text-sm text-white/60">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" 
                         class="lucide lucide-map-pin w-4 h-4 mt-0.5 shrink-0" aria-hidden="true">
                         <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                         <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        New Jersey
                    </li>

                     <li class="flex items-start gap-2 text-sm text-white/60">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" 
                         class="lucide lucide-map-pin w-4 h-4 mt-0.5 shrink-0" aria-hidden="true">
                         <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                         <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        Delaware
                    </li>

                    <li class="flex items-start gap-2 text-sm text-white/60">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" 
                         class="lucide lucide-map-pin w-4 h-4 mt-0.5 shrink-0" aria-hidden="true">
                         <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                         <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        New York
                    </li>

                    <li class="flex items-start gap-2 text-sm text-white/60">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" 
                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" 
                         class="lucide lucide-map-pin w-4 h-4 mt-0.5 shrink-0" aria-hidden="true">
                         <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                         <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        +36 More States
                    </li>

                </ul>

            </div>

        </div>

        <div class="mt-10 sm:mt-16 pt-6 sm:pt-8 border-t border-white/10 flex flex-col sm:flex-row justify-between items-center gap-4 text-center sm:text-left">

            <p class="text-xs sm:text-sm text-white/60">

                © {{ date('Y') }}

                Patriot Business Advisors. All rights reserved.

            </p>

            <div class="flex gap-4 sm:gap-6">

                <a href="#" class="text-xs sm:text-sm text-white/60 hover:text-white transition-colors">

                    Privacy Policy

                </a>

                <a href="#" class="text-xs sm:text-sm text-white/60 hover:text-white transition-colors">

                    Terms of Service

                </a>

            </div>

        </div>

    </div>

</footer>