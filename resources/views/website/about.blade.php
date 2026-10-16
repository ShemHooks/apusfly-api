@extends('layouts.website')

@section('title', 'About Us | ApusFly')
@section('description', 'Learn about ApusFly, our mission, vision, and leadership.')

@section('content')

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-charcoal text-white">
        <div class="pointer-events-none absolute -right-20 top-0 h-96 w-96 rounded-full bg-primary/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-24 lg:px-10 lg:py-32">

            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
                    <i data-lucide="building-2" class="h-4 w-4"></i>
                    About ApusFly
                </span>

                <h1 class="mt-8 text-5xl font-extrabold tracking-tight sm:text-6xl">
                    Connecting Possibilities.
                    <span class="block text-primary">Elevating Opportunities.</span>
                </h1>

                <p class="mt-8 max-w-2xl text-lg leading-8 text-gray-300">
                    ApusFly is an emerging technology startup developing
                    a digital marketplace that connects customers with
                    drone service providers and professional pilots.
                </p>
            </div>

        </div>
    </section>

    {{-- WHO WE ARE --}}
    <section class="px-6 py-24 lg:px-10">
        <div class="mx-auto grid max-w-7xl items-center gap-14 lg:grid-cols-2">

            <div class="flex min-h-96 items-center justify-center rounded-3xl bg-surface p-12">
                <img src="{{ asset('photos/logo.png') }}" alt="ApusFly official logo"
                    class="w-full max-w-sm object-contain">
            </div>

            <div>
                <p class="text-sm font-bold uppercase tracking-widest text-primary-dark">
                    Who We Are
                </p>

                <h2 class="mt-4 text-4xl font-bold tracking-tight text-charcoal">
                    Bringing Drone Technology Closer to Everyone
                </h2>

                <p class="mt-6 leading-8 text-gray-600">
                    ApusFly is being developed to simplify how individuals,
                    businesses, and organizations discover and access
                    professional drone services.
                </p>

                <p class="mt-5 leading-8 text-gray-600">
                    Through a centralized digital platform, we aim to
                    connect customers with drone service providers and
                    pilots for aerial photography, videography,
                    agricultural applications, mapping, inspections,
                    and other specialized services.
                </p>

                <p class="mt-5 leading-8 text-gray-600">
                    Our goal is to make drone services easier to discover,
                    coordinate, and manage while supporting the growth
                    of the drone services industry.
                </p>
            </div>

        </div>
    </section>

    {{-- MISSION & VISION --}}
    <section class="bg-surface px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-7xl">

            <div class="mb-12 text-center">
                <p class="text-sm font-bold uppercase tracking-widest text-primary-dark">
                    Our Direction
                </p>
                <h2 class="mt-4 text-4xl font-bold text-charcoal">
                    Our Mission & Vision
                </h2>
            </div>

            <div class="grid gap-8 md:grid-cols-2">

                <div class="rounded-3xl border border-gray-100 bg-white p-10 shadow-sm">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10">
                        <i data-lucide="target" class="h-7 w-7 text-primary-dark"></i>
                    </div>

                    <h3 class="mt-8 text-2xl font-bold text-charcoal">
                        Our Mission
                    </h3>

                    <p class="mt-5 leading-8 text-gray-600">
                        To simplify access to professional drone services
                        through a reliable and user-friendly digital platform
                        that connects customers, service providers, and pilots
                        while promoting responsible and innovative drone
                        technology applications.
                    </p>
                </div>

                <div class="rounded-3xl border border-gray-100 bg-white p-10 shadow-sm">
                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10">
                        <i data-lucide="eye" class="h-7 w-7 text-primary-dark"></i>
                    </div>

                    <h3 class="mt-8 text-2xl font-bold text-charcoal">
                        Our Vision
                    </h3>

                    <p class="mt-5 leading-8 text-gray-600">
                        To become a trusted digital marketplace for drone
                        services, empowering communities, businesses,
                        and drone professionals through accessible,
                        safe, and innovative technology.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- LEADERSHIP --}}
    <section class="px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-7xl">

            <div class="mb-12 text-center">
                <p class="text-sm font-bold uppercase tracking-widest text-primary-dark">
                    Our Leadership
                </p>

                <h2 class="mt-4 text-4xl font-bold text-charcoal">
                    Meet the Leadership
                </h2>

                <p class="mx-auto mt-5 max-w-2xl text-gray-600">
                    Guiding ApusFly's development and long-term direction.
                </p>
            </div>

            <div class="mx-auto max-w-md overflow-hidden rounded-3xl border border-gray-200 bg-white shadow-sm">

                <div class="flex h-64 items-center justify-center bg-gradient-to-br from-primary/20 to-surface">
                    <div class="flex h-24 w-24 items-center justify-center rounded-full bg-white/80 shadow-sm">
                        <i data-lucide="user-round" class="h-12 w-12 text-primary-dark"></i>
                    </div>
                </div>

                <div class="p-8 text-center">
                    <h3 class="text-2xl font-bold text-charcoal">
                        Jonel Orale
                    </h3>

                    <p class="mt-2 font-semibold text-primary-dark">
                        Chief Executive Officer
                    </p>

                    <p class="mt-5 text-sm leading-7 text-gray-600">
                        Leading ApusFly's strategic direction and
                        the development of its drone services marketplace.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- VALUES --}}
    <section class="bg-surface px-6 py-24 lg:px-10">
        <div class="mx-auto max-w-7xl">

            <div class="mb-12 text-center">
                <p class="text-sm font-bold uppercase tracking-widest text-primary-dark">
                    What Guides Us
                </p>

                <h2 class="mt-4 text-4xl font-bold text-charcoal">
                    Our Core Values
                </h2>
            </div>

            @php
                $values = [
                    [
                        'icon' => 'lightbulb',
                        'title' => 'Innovation',
                        'description' => 'Exploring practical ways to make drone technology more useful and accessible.',
                    ],
                    [
                        'icon' => 'shield-check',
                        'title' => 'Safety',
                        'description' => 'Encouraging responsible drone operations and regulatory compliance.',
                    ],
                    [
                        'icon' => 'users',
                        'title' => 'Accessibility',
                        'description' => 'Making it easier for customers to discover suitable drone services.',
                    ],
                    [
                        'icon' => 'handshake',
                        'title' => 'Reliability',
                        'description' => 'Building trust through transparency and dependable service coordination.',
                    ],
                ];
            @endphp

            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
                @foreach ($values as $value)
                    <div class="rounded-2xl border border-gray-100 bg-white p-8">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10">
                            <i data-lucide="{{ $value['icon'] }}" class="h-6 w-6 text-primary-dark"></i>
                        </div>

                        <h3 class="mt-6 text-xl font-bold text-charcoal">
                            {{ $value['title'] }}
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-gray-600">
                            {{ $value['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-primary px-6 py-20">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-4xl font-extrabold text-charcoal">
                Be Part of the Future of Drone Services
            </h2>

            <p class="mx-auto mt-6 max-w-2xl leading-8 text-charcoal/80">
                Discover how ApusFly aims to connect people,
                businesses, and drone professionals through technology.
            </p>

            <a href="{{ route('home') }}#services"
                class="mt-9 inline-flex items-center gap-2 rounded-xl bg-charcoal px-8 py-4 font-bold text-white transition hover:bg-gray-800">
                Explore Our Services
                <i data-lucide="arrow-up-right" class="h-5 w-5"></i>
            </a>
        </div>
    </section>

@endsection