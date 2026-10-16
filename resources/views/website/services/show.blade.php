@extends('layouts.website')

@section('title', $service['title'] . ' | ApusFly')

@section('description', $service['description'])

@section('content')

    {{-- Hero --}}
    <section class="relative overflow-hidden bg-charcoal text-white">
        <div class="pointer-events-none absolute -right-20 top-0 h-80 w-80 rounded-full bg-primary/15 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-6 py-20 lg:px-10 lg:py-28">

            <a href="{{ route('home') }}#services"
                class="inline-flex items-center gap-2 text-sm text-gray-300 transition hover:text-primary">
                <i data-lucide="arrow-left" class="h-4 w-4"></i>
                Back to Services
            </a>

            <div class="mt-12 max-w-3xl">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl border border-primary/20 bg-primary/10">
                    <i data-lucide="{{ $service['icon'] }}" class="h-8 w-8 text-primary"></i>
                </div>

                <p class="mt-8 text-sm font-bold uppercase tracking-[0.2em] text-primary">
                    ApusFly Drone Services
                </p>

                <h1 class="mt-4 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    {{ $service['title'] }}
                </h1>

                <p class="mt-6 text-xl leading-8 text-gray-300">
                    {{ $service['subtitle'] }}
                </p>

                <p class="mt-5 max-w-2xl leading-8 text-gray-400">
                    {{ $service['description'] }}
                </p>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#features"
                        class="inline-flex items-center gap-2 rounded-xl bg-primary px-7 py-4 font-bold text-charcoal transition hover:bg-primary-dark">
                        Explore Features
                        <i data-lucide="arrow-down-right" class="h-5 w-5"></i>
                    </a>

                    <a href="#get-started"
                        class="rounded-xl border border-white/20 px-7 py-4 font-semibold transition hover:bg-white/10">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section id="features" class="scroll-mt-24 bg-white px-6 py-24">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl">
                <p class="text-sm font-bold uppercase tracking-widest text-primary-dark">
                    Service Capabilities
                </p>

                <h2 class="mt-4 text-3xl font-bold tracking-tight text-charcoal sm:text-4xl">
                    What This Service Includes
                </h2>

                <p class="mt-5 leading-7 text-gray-600">
                    Explore common applications and service capabilities.
                    Actual deliverables depend on the selected provider
                    and confirmed booking agreement.
                </p>
            </div>

            <div class="mt-12 grid gap-5 md:grid-cols-2">
                @foreach ($service['features'] as $feature)
                    <div class="flex items-start gap-4 rounded-2xl border border-gray-200 bg-surface p-6">
                        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-primary/15">
                            <i data-lucide="check" class="h-5 w-5 text-primary-dark"></i>
                        </div>

                        <div>
                            <h3 class="font-semibold text-charcoal">
                                {{ $feature }}
                            </h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Benefits --}}
    <section class="bg-surface px-6 py-24">
        <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-2">

            <div>
                <p class="text-sm font-bold uppercase tracking-widest text-primary-dark">
                    Why Choose This Service
                </p>

                <h2 class="mt-4 text-3xl font-bold tracking-tight text-charcoal sm:text-4xl">
                    Discover the Benefits
                </h2>

                <p class="mt-6 leading-8 text-gray-600">
                    Drone technology can offer new perspectives
                    and more flexible approaches to many professional tasks.
                </p>

                <div class="mt-8 space-y-5">
                    @foreach ($service['benefits'] as $benefit)
                        <div class="flex items-start gap-3">
                            <i data-lucide="circle-check" class="mt-0.5 h-6 w-6 shrink-0 text-primary-dark"></i>

                            <p class="leading-7 text-gray-700">
                                {{ $benefit }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="flex min-h-80 items-center justify-center rounded-3xl border border-primary/20 bg-white p-12">
                <div class="flex h-28 w-28 items-center justify-center rounded-3xl bg-primary/10">
                    <i data-lucide="{{ $service['icon'] }}" class="h-14 w-14 text-primary-dark"></i>
                </div>
            </div>
        </div>
    </section>

    {{-- How It Works --}}
    <section class="bg-white px-6 py-24">
        <div class="mx-auto max-w-7xl">
            <div class="text-center">
                <p class="text-sm font-bold uppercase tracking-widest text-primary-dark">
                    Simple Process
                </p>
                <h2 class="mt-4 text-3xl font-bold text-charcoal sm:text-4xl">
                    How to Book This Service
                </h2>
            </div>

            <div class="mt-14 grid gap-6 md:grid-cols-3">
                @foreach ([
                        ['01', 'Explore', 'Browse the available service options and providers.'],
                        ['02', 'Request', 'Provide your requirements, location, and preferred schedule.'],
                        ['03', 'Coordinate', 'Confirm the details with the provider before service delivery.'],
                    ] as $step)
                    <div class="rounded-2xl border border-gray-200 p-8">
                        <span class="text-4xl font-black text-primary-dark">
                            {{ $step[0] }}
                        </span>

                        <h3 class="mt-6 text-xl font-bold text-charcoal">
                            {{ $step[1] }}
                        </h3>

                        <p class="mt-3 leading-7 text-gray-600">
                            {{ $step[2] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section id="get-started" class="scroll-mt-24 bg-primary px-6 py-20">
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-3xl font-extrabold text-charcoal sm:text-4xl">
                Interested in {{ $service['title'] }}?
            </h2>

            <p class="mx-auto mt-5 max-w-2xl leading-7 text-charcoal/80">
                ApusFly is currently in development.
                Our mobile platform will make it easier to discover
                and coordinate professional drone services.
            </p>

            <a href="{{ route('home') }}#download"
                class="mt-9 inline-flex items-center gap-2 rounded-xl bg-charcoal px-8 py-4 font-bold text-white transition hover:bg-gray-800">
                Learn About Our App
                <i data-lucide="arrow-up-right" class="h-5 w-5"></i>
            </a>
        </div>
    </section>

@endsection