<footer class="bg-charcoal text-white">
    <div class="mx-auto max-w-7xl px-6 pt-16 pb-12 lg:px-10">

        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">

            {{-- BRAND --}}
            <div class="lg:col-span-1">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3">

                    <img src="{{ asset('photos/logo.png') }}" alt="ApusFly Logo" class="h-14 w-14 object-contain">

                    <span class="text-2xl font-extrabold">
                        Apus<span class="text-primary">Fly</span>
                    </span>
                </a>

                <p class="mt-5 text-sm leading-7 text-gray-400">
                    Connecting customers with drone service
                    providers and professional pilots through
                    one innovative digital marketplace.
                </p>

                <p class="mt-4 text-sm font-semibold text-primary">
                    Your Vision. Our Wings.
                </p>
            </div>

            {{-- QUICK LINKS --}}
            <div>
                <h3 class="text-base font-bold text-white">
                    Quick Links
                </h3>

                <ul class="mt-6 space-y-4 text-sm text-gray-400">
                    <li>
                        <a href="{{ route('home') }}" class="transition hover:text-primary">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}#services" class="transition hover:text-primary">
                            Our Services
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}" class="transition hover:text-primary">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('home') }}#how-it-works" class="transition hover:text-primary">
                            How It Works
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contact') }}" class="transition hover:text-primary">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            {{-- LEGAL --}}
            <div>
                <h3 class="text-base font-bold text-white">
                    Legal & Information
                </h3>

                <ul class="mt-6 space-y-4 text-sm text-gray-400">
                    <li>
                        <a href="{{ route('terms') }}" class="transition hover:text-primary">
                            Terms of Service
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('privacy') }}" class="transition hover:text-primary">
                            Privacy Policy
                        </a>
                    </li>
                </ul>
            </div>

            {{-- CONTACT --}}
            <div>
                <h3 class="text-base font-bold text-white">
                    Connect With Us
                </h3>

                <a href="mailto:contact@apusfly.com"
                    class="mt-6 inline-flex items-center gap-3 text-sm text-gray-400 transition hover:text-primary">
                    <i data-lucide="mail" class="h-5 w-5"></i>
                    contact@apusfly.com
                </a>

                <p class="mt-7 text-sm font-semibold text-white">
                    Follow Us
                </p>

                <div class="mt-4 flex items-center gap-3">

                    <a href="https://www.facebook.com/apusfly" target="_blank" rel="noopener noreferrer"
                        aria-label="ApusFly Facebook"
                        class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-gray-300 transition hover:border-primary hover:bg-primary hover:text-charcoal">
                        <img src="{{ asset('icons/facebook.svg') }}" alt="" class="h-5 w-5 object-contain">
                    </a>

                    <a href="https://www.instagram.com/apusfly/" target="_blank" rel="noopener noreferrer"
                        aria-label="ApusFly Instagram"
                        class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-gray-300 transition hover:border-primary hover:bg-primary hover:text-charcoal">
                        <img src="{{ asset('icons/instagram.svg') }}" alt="" class="h-5 w-5 object-contain">
                    </a>

                    <a href="https://www.linkedin.com/company/apusfly/" target="_blank" rel="noopener noreferrer"
                        aria-label="ApusFly LinkedIn"
                        class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-gray-300 transition hover:border-primary hover:bg-primary hover:text-charcoal">
                        <img src="{{ asset('icons/linkedin-color.svg') }}" alt="" class="h-5 w-5 object-contain">
                    </a>

                </div>
            </div>

        </div>

        {{-- BOTTOM BAR --}}
        <div
            class="mt-14 flex flex-col gap-4 border-t border-white/10 pt-7 text-sm text-gray-500 sm:flex-row sm:items-center sm:justify-between">

            <p>
                &copy; {{ date('Y') }} ApusFly. All rights reserved.
            </p>

            <p>
                Designed for the future of drone services.
            </p>

        </div>

    </div>
</footer>