@extends('layouts.website')

@section('title', 'ApusFly | Your Vision. Our Wings.')

@section('content')

    <section class="relative overflow-hidden bg-charcoal text-white">
        <div class="pointer-events-none absolute -right-32 -top-32 h-96 w-96 rounded-full bg-primary/10 blur-3xl"></div>

        <div class="relative mx-auto grid min-h-[650px] max-w-7xl items-center gap-12 px-6 py-24 lg:grid-cols-2 lg:px-10">

            <div>
                <span
                    class="inline-flex rounded-full border border-primary/30 bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
                    The Future of Drone Services
                </span>

                <h1 class="mt-8 text-5xl font-extrabold leading-tight tracking-tight md:text-6xl">
                    Your Vision.
                    <span class="block text-primary">Our Wings.</span>
                </h1>

                <p class="mt-7 max-w-xl text-lg leading-8 text-gray-300">
                    Discover and connect with professional drone service
                    providers for aerial photography, videography,
                    agricultural solutions, mapping, and more.
                </p>

                <div class="mt-10 flex flex-wrap gap-4">
                    <a href="#services"
                        class="rounded-xl bg-primary px-7 py-4 font-bold text-charcoal transition hover:bg-primary-dark">
                        Explore Services
                    </a>

                    <a href="#about"
                        class="rounded-xl border border-white/20 px-7 py-4 font-semibold transition hover:bg-white/10">
                        Learn More
                    </a>
                </div>
            </div>

            <div class="relative">
                <div
                    class="aspect-square rounded-[2rem] border border-white/10 bg-gradient-to-br from-primary/20 via-gray-900 to-black p-8 shadow-2xl">
                    <div class="flex h-full flex-col items-center justify-center text-center">
                        <img src="{{ asset('photos/logo.png') }}" alt="ApusFly Logo" class="h-60 w-60 object-contain" />

                        <h2 class="text-3xl font-bold">
                            Explore New Perspectives
                        </h2>
                        <p class="mt-4 max-w-sm text-gray-400">
                            Drone services made accessible through technology.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="services" class="scroll-mt-24 bg-surface px-6 py-24">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl">
                <p class="text-sm font-bold tracking-widest text-primary-dark uppercase">
                    Our Services
                </p>

                <h2 class="mt-4 text-4xl font-bold tracking-tight text-charcoal">
                    Professional Drone Solutions
                </h2>

                <p class="mt-5 text-gray-600 leading-7">
                    Discover drone services tailored to your needs,
                    from aerial content creation to technical inspections.
                </p>
            </div>

            @php

                $services = [
                    [
                        'slug' => 'aerial-photography',
                        'icon' => 'camera',
                        'title' => 'Aerial Photography',
                        'description' => 'Capture stunning aerial perspectives for events, properties, and commercial projects.',
                    ],
                    [
                        'slug' => 'aerial-videography',
                        'icon' => 'video',
                        'title' => 'Aerial Videography',
                        'description' => 'High-quality aerial footage for creative and commercial productions.',
                    ],
                    [
                        'slug' => 'agricultural-services',
                        'icon' => 'sprout',
                        'title' => 'Agricultural Services',
                        'description' => 'Drone-assisted crop monitoring and agricultural solutions.',
                    ],
                    [
                        'slug' => 'mapping-surveying',
                        'icon' => 'map',
                        'title' => 'Mapping & Surveying',
                        'description' => 'Aerial mapping and documentation for land assessment.',
                    ],
                    [
                        'slug' => 'infrastructure-inspection',
                        'icon' => 'building-2',
                        'title' => 'Infrastructure Inspection',
                        'description' => 'Aerial inspection services for buildings and infrastructure.',
                    ],
                    [
                        'slug' => 'real-estate',
                        'icon' => 'house',
                        'title' => 'Real Estate',
                        'description' => 'Showcase properties through compelling aerial imagery.',
                    ],
                ];

            @endphp

            <div class="mt-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($services as $service)
                    <article
                        class="group rounded-2xl border border-gray-200 bg-white p-8 transition-all duration-300 hover:-translate-y-1 hover:border-primary/40 hover:shadow-xl">

                        <div
                            class="flex h-14 w-14 items-center justify-center rounded-xl bg-primary/10 transition group-hover:bg-primary">
                            <i data-lucide="{{ $service['icon'] }}"
                                class="h-7 w-7 text-primary-dark transition group-hover:text-charcoal"></i>
                        </div>

                        <h3 class="mt-7 text-xl font-bold text-charcoal">
                            {{ $service['title'] }}
                        </h3>

                        <p class="mt-4 text-sm leading-7 text-gray-600">
                            {{ $service['description'] }}
                        </p>

                        <div class="mt-7 flex items-center gap-2 text-sm font-semibold text-primary-dark">
                            <a href="{{ route('services.show', $service['slug']) }}"
                                class="mt-7 inline-flex items-center gap-2 text-sm font-semibold text-primary-dark transition hover:gap-3">
                                Learn More
                                <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                            </a>
                        </div>

                    </article>
                @endforeach
            </div>
        </div>
    </section>


    <section id="about" class="scroll-mt-24 px-6 py-24">
        <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-2">
            <div class="rounded-3xl flex justify-center items-center p-12">
                <img src="{{ asset('photos/logo.png') }}" alt="ApusFly Logo" class="h-60 w-60 object-contain" />

            </div>

            <div>
                <p class="font-semibold text-primary-dark">ABOUT APUSFLY</p>
                <h2 class="mt-4 text-4xl font-bold leading-tight">
                    Making Drone Services More Accessible
                </h2>
                <p class="mt-6 leading-8 text-gray-600">
                    ApusFly is a developing digital marketplace designed
                    to connect individuals and businesses with drone
                    service providers and pilots.
                </p>
                <p class="mt-4 leading-8 text-gray-600">
                    Our goal is to simplify how customers discover,
                    request, and coordinate professional drone services.
                </p>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="scroll-mt-24 bg-surface px-6 py-24">
        <div class="mx-auto max-w-7xl text-center">
            <p class="font-semibold text-primary-dark">SIMPLE PROCESS</p>
            <h2 class="mt-4 text-4xl font-bold">How ApusFly Works</h2>

            <div class="mt-14 grid gap-8 md:grid-cols-3">
                @foreach ([
                        ['01', 'Discover', 'Explore drone services suited to your needs.'],
                        ['02', 'Request', 'Submit your service requirements and preferred schedule.'],
                        ['03', 'Connect', 'Coordinate with the provider to complete your booking.'],
                    ] as $step)
                    <div class="rounded-2xl bg-white p-8 shadow-sm">
                        <div class="text-5xl font-black text-primary">
                            {{ $step[0] }}
                        </div>
                        <h3 class="mt-5 text-xl font-bold">{{ $step[1] }}</h3>
                        <p class="mt-3 text-gray-600">{{ $step[2] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="download" class="scroll-mt-24 bg-primary px-6 py-20 text-center">
        <h2 class="text-4xl font-extrabold text-charcoal">
            Ready to Explore ApusFly?
        </h2>
        <p class="mx-auto mt-5 max-w-xl text-charcoal/80">
            Our mobile platform is currently in development.
            Stay tuned for its official launch.
        </p>
    </section>

@endsection