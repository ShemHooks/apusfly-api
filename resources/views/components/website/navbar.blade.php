@php
    $navItems = [
        [
            'label' => 'Home',
            'url' => route('home'),
            'active' => request()->routeIs('home'),
        ],
        [
            'label' => 'Services',
            'url' => route('home') . '#services',
            'active' => request()->routeIs('services.*'),
        ],
        [
            'label' => 'About Us',
            'url' => route('about'),
            'active' => request()->routeIs('about'),
        ],
        [
            'label' => 'How It Works',
            'url' => route('home') . '#how-it-works',
            'active' => false,
        ],
        [
            'label' => 'Contact Us',
            'url' => route('contact'),
            'active' => request()->routeIs('contact'),
        ],
    ];
@endphp

<header x-data="{ mobileOpen: false }" class="sticky top-0 z-50 border-b border-gray-100 bg-white/95 backdrop-blur-md">
    <nav class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-6 py-4 lg:px-10"
        aria-label="Main navigation">

        {{-- LOGO --}}
        <a href="{{ route('home') }}" class="flex shrink-0 items-center gap-3" aria-label="ApusFly Home">
            <img src="{{ asset('photos/logo.png') }}" alt="ApusFly Logo" class="h-12 w-12 object-contain">

            <span class="text-2xl font-extrabold tracking-tight text-charcoal">
                Apus<span class="text-primary-dark">Fly</span>
            </span>
        </a>

        {{-- DESKTOP NAVIGATION --}}
        <div class="hidden items-center gap-5 lg:flex xl:gap-8">

            @foreach ($navItems as $item)
                    <a href="{{ $item['url'] }}" @if ($item['active']) aria-current="page" @endif class="group relative whitespace-nowrap py-2 text-sm font-semibold transition-colors duration-200
                                                                        {{ $item['active']
                ? 'text-primary-dark'
                : 'text-gray-600 hover:text-primary-dark' }}">
                        {{ $item['label'] }}

                        {{-- ACTIVE UNDERLINE --}}
                        <span class="absolute -bottom-1 left-0 h-0.5 rounded-full bg-primary-dark transition-all duration-200
                                                                            {{ $item['active']
                ? 'w-full'
                : 'w-0 group-hover:w-full' }}"></span>
                    </a>
            @endforeach

        </div>

        {{-- DESKTOP ACTIONS --}}
        <div class="hidden shrink-0 items-center gap-3 lg:flex">

            @auth
                {{-- GO TO PORTAL --}}
                <a href="{{ \App\Support\PortalHome::for(auth()->user()) }}"
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm font-semibold text-charcoal transition-all duration-200 hover:border-primary-dark hover:bg-primary/5 hover:text-primary-dark">
                    <i data-lucide="layout-dashboard" class="h-4 w-4"></i>
                    Portal
                </a>

                {{-- SIGN OUT --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary px-4 py-3 text-sm font-bold text-charcoal transition-all duration-200 hover:bg-primary-dark">
                        <i data-lucide="log-out" class="h-4 w-4"></i>
                        Sign Out
                    </button>
                </form>
            @else
                {{-- SIGN IN --}}
                <button
                    class="inline-flex items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white px-4 py-3 text-sm font-semibold text-charcoal transition-all duration-200 hover:border-primary-dark hover:bg-primary/5 hover:text-primary-dark">
                    <i data-lucide="log-in" class="h-4 w-4"></i>
                    Sign In
                </button>

                {{-- GET THE APP --}}
                <a href="{{ route('home') }}#download"
                    class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary px-4 py-3 text-sm font-bold text-charcoal transition-all duration-200 hover:bg-primary-dark">
                    Get the App

                    <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                </a>
            @endauth

        </div>

        {{-- MOBILE MENU BUTTON --}}
        <button type="button" @click="mobileOpen = !mobileOpen" :aria-expanded="mobileOpen.toString()"
            aria-controls="mobile-navigation" aria-label="Toggle navigation menu"
            class="inline-flex h-11 w-11 items-center justify-center rounded-xl border border-gray-200 text-charcoal transition hover:border-primary hover:bg-primary/10 lg:hidden">
            <i data-lucide="menu" x-show="!mobileOpen" class="h-6 w-6"></i>

            <i data-lucide="x" x-show="mobileOpen" x-cloak class="h-6 w-6"></i>
        </button>

    </nav>

    {{-- MOBILE NAVIGATION --}}
    <div id="mobile-navigation" x-show="mobileOpen" x-cloak @keydown.escape.window="mobileOpen = false"
        class="border-t border-gray-100 bg-white px-6 py-5 shadow-lg lg:hidden">
        <div class="flex flex-col gap-2">

            {{-- MOBILE NAV LINKS --}}
            @foreach ($navItems as $item)
                    <a href="{{ $item['url'] }}" @click="mobileOpen = false" @if ($item['active']) aria-current="page" @endif
                        class="flex items-center justify-between rounded-xl border-l-[3px] px-4 py-3 text-sm font-semibold transition-colors
                                                                        {{ $item['active']
                ? 'border-primary-dark bg-primary/10 text-primary-dark'
                : 'border-transparent text-gray-600 hover:bg-gray-50 hover:text-primary-dark' }}">
                        {{ $item['label'] }}

                        @if ($item['active'])
                            <i data-lucide="check" class="h-4 w-4 text-primary-dark"></i>
                        @endif
                    </a>
            @endforeach

            {{-- MOBILE ACTIONS --}}
            <div class="mt-4 flex flex-col gap-3 border-t border-gray-100 pt-5">

                @auth
                    {{-- GO TO PORTAL --}}
                    <a href="{{ \App\Support\PortalHome::for(auth()->user()) }}" @click="mobileOpen = false"
                        class="flex items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white px-5 py-3 text-sm font-semibold text-charcoal transition hover:border-primary-dark hover:bg-primary/5">
                        <i data-lucide="layout-dashboard" class="h-4 w-4"></i>
                        Go to Portal
                    </a>

                    {{-- SIGN OUT --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="flex w-full items-center justify-center gap-2 rounded-xl bg-primary px-5 py-3 text-sm font-bold text-charcoal transition hover:bg-primary-dark">
                            <i data-lucide="log-out" class="h-4 w-4"></i>
                            Sign Out
                        </button>
                    </form>
                @else
                    {{-- SIGN IN --}}
                    <button @click="mobileOpen = false"
                        class="flex items-center justify-center gap-2 rounded-xl border border-gray-200 bg-white px-5 py-3 text-sm font-semibold text-charcoal transition hover:border-primary-dark hover:bg-primary/5">
                        <i data-lucide="log-in" class="h-4 w-4"></i>
                        Sign In
                    </button>

                    {{-- GET THE APP --}}
                    <a href="{{ route('home') }}#download" @click="mobileOpen = false"
                        class="flex items-center justify-center gap-2 rounded-xl bg-primary px-5 py-3 text-sm font-bold text-charcoal transition hover:bg-primary-dark">
                        Get the App

                        <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                    </a>
                @endauth

            </div>

        </div>
    </div>
</header>