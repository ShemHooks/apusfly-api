
@extends('layouts.website')

@section('title', 'Contact Us | ApusFly')
@section('description', 'Get in touch with ApusFly for drone service inquiries, partnerships, and platform support.')

@section('content')

{{-- HERO --}}
<section class="relative overflow-hidden bg-charcoal px-6 py-20 text-white lg:py-28">
    <div class="pointer-events-none absolute -right-20 top-0 h-80 w-80 rounded-full bg-primary/15 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl">
        <div class="max-w-3xl">
            <span class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
                <i data-lucide="messages-square" class="h-4 w-4"></i>
                Contact ApusFly
            </span>

            <h1 class="mt-8 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                Let's Start a
                <span class="text-primary">Conversation.</span>
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-gray-300">
                Have questions about drone services, becoming a provider,
                joining as a pilot, or partnering with ApusFly?
                We'd love to hear from you.
            </p>
        </div>
    </div>
</section>

{{-- CONTACT SECTION --}}
<section class="bg-surface px-6 py-24">
    <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-5">

        {{-- CONTACT FORM --}}
        <div class="rounded-3xl border border-gray-200 bg-white p-7 shadow-sm sm:p-10 lg:col-span-3">

            <div class="mb-9">
                <h2 class="text-2xl font-bold text-charcoal">
                    Send Us a Message
                </h2>

                <p class="mt-3 leading-7 text-gray-600">
                    Have something in mind? Tell us how we can help.
                </p>
            </div>

            <form
                x-data="{
                    name: '',
                    email: '',
                    category: '',
                    subject: '',
                    message: '',
                    consent: false
                }"
                @submit.prevent
                class="space-y-6"
            >
                <div class="grid gap-6 sm:grid-cols-2">
                    <div>
                        <label for="contact-name" class="mb-2 block text-sm font-semibold text-charcoal">
                            Full Name <span class="text-red-600">*</span>
                        </label>

                        <input
                            id="contact-name"
                            type="text"
                            name="name"
                            x-model="name"
                            autocomplete="name"
                            required
                            maxlength="120"
                            placeholder="Your full name"
                            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-primary-dark focus:ring-2 focus:ring-primary/20"
                        >
                    </div>

                    <div>
                        <label for="contact-email" class="mb-2 block text-sm font-semibold text-charcoal">
                            Email Address <span class="text-red-600">*</span>
                        </label>

                        <input
                            id="contact-email"
                            type="email"
                            name="email"
                            x-model="email"
                            autocomplete="email"
                            required
                            maxlength="254"
                            placeholder="you@example.com"
                            class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-primary-dark focus:ring-2 focus:ring-primary/20"
                        >
                    </div>
                </div>

                <div>
                    <label for="contact-category" class="mb-2 block text-sm font-semibold text-charcoal">
                        Inquiry Type <span class="text-red-600">*</span>
                    </label>

                    <select
                        id="contact-category"
                        name="category"
                        x-model="category"
                        required
                        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-primary-dark focus:ring-2 focus:ring-primary/20"
                    >
                        <option value="" disabled>Select inquiry type</option>
                        <option value="general">General Inquiry</option>
                        <option value="booking">Drone Service / Booking Inquiry</option>
                        <option value="provider">Become a Service Provider</option>
                        <option value="pilot">Become a Drone Pilot</option>
                        <option value="partnership">Business Partnership</option>
                        <option value="support">Technical Support</option>
                    </select>
                </div>

                <div>
                    <label for="contact-subject" class="mb-2 block text-sm font-semibold text-charcoal">
                        Subject <span class="text-red-600">*</span>
                    </label>

                    <input
                        id="contact-subject"
                        type="text"
                        name="subject"
                        x-model="subject"
                        required
                        maxlength="200"
                        placeholder="What is your inquiry about?"
                        class="w-full rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-primary-dark focus:ring-2 focus:ring-primary/20"
                    >
                </div>

                <div>
                    <label for="contact-message" class="mb-2 block text-sm font-semibold text-charcoal">
                        Your Message <span class="text-red-600">*</span>
                    </label>

                    <textarea
                        id="contact-message"
                        name="message"
                        x-model="message"
                        required
                        maxlength="5000"
                        rows="6"
                        placeholder="Tell us more about your inquiry..."
                        class="w-full resize-y rounded-xl border border-gray-300 bg-white px-4 py-3 text-sm outline-none transition focus:border-primary-dark focus:ring-2 focus:ring-primary/20"
                    ></textarea>
                </div>

                <label class="flex items-start gap-3">
                    <input
                        type="checkbox"
                        x-model="consent"
                        required
                        class="mt-1 h-4 w-4 rounded border-gray-300 accent-primary-dark"
                    >

                    <span class="text-sm leading-6 text-gray-600">
                        I agree that ApusFly may process the information
                        provided in this form to respond to my inquiry,
                        in accordance with its Privacy Policy.
                    </span>
                </label>

                {{-- FORM STATUS --}}
                <div class="rounded-xl border border-primary/20 bg-primary/5 p-4">
                    <div class="flex items-start gap-3">
                        <i
                            data-lucide="info"
                            class="mt-0.5 h-5 w-5 shrink-0 text-primary-dark"
                        ></i>

                        <p class="text-sm leading-6 text-gray-600">
                            Online message submission is coming soon.
                            In the meantime, please send your inquiries to
                            <a
                                href="mailto:contact@apusfly.com"
                                class="font-semibold text-primary-dark hover:underline"
                            >
                                contact@apusfly.com
                            </a>.
                        </p>
                    </div>
                </div>

                <button
                    type="submit"
                    disabled
                    class="inline-flex w-full cursor-not-allowed items-center justify-center gap-2 rounded-xl bg-primary px-7 py-4 font-bold text-charcoal opacity-60 sm:w-auto"
                >
                    <i data-lucide="send" class="h-5 w-5"></i>
                    Send Message — Coming Soon
                </button>
            </form>
        </div>

        {{-- CONTACT INFORMATION --}}
        <aside class="space-y-6 lg:col-span-2">

            <div class="rounded-3xl bg-charcoal p-8 text-white sm:p-10">

                <h2 class="text-2xl font-bold">
                    Get in Touch
                </h2>

                <p class="mt-4 leading-7 text-gray-300">
                    Connect with ApusFly through our official
                    communication channels.
                </p>

                <div class="mt-9 space-y-8">

                    {{-- EMAIL --}}
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/15">
                            <i data-lucide="mail" class="h-6 w-6 text-primary"></i>
                        </div>

                        <div class="min-w-0">
                            <h3 class="font-semibold">Email Us</h3>

                            <a
                                href="mailto:contact@apusfly.com"
                                class="mt-2 inline-block break-all text-sm text-gray-300 transition hover:text-primary"
                            >
                                contact@apusfly.com
                            </a>
                        </div>
                    </div>

                    {{-- LOCATION --}}
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/15">
                            <i data-lucide="map-pin" class="h-6 w-6 text-primary"></i>
                        </div>

                        <div>
                            <h3 class="font-semibold">Location</h3>

                            <p class="mt-2 text-sm text-gray-300">
                                Philippines
                            </p>
                        </div>
                    </div>

                    {{-- SUPPORT --}}
                    <div class="flex items-start gap-4">
                        <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-primary/15">
                            <i data-lucide="clock-3" class="h-6 w-6 text-primary"></i>
                        </div>

                        <div>
                            <h3 class="font-semibold">Support Availability</h3>

                            <p class="mt-2 text-sm text-gray-300">
                                Support schedule to be announced
                            </p>
                        </div>
                    </div>
                </div>

                {{-- SOCIAL MEDIA --}}
                <div class="mt-10 border-t border-white/10 pt-8">

                    <h3 class="text-lg font-semibold text-white">
                        Connect With ApusFly
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-gray-400">
                        Follow our official social media accounts
                        for announcements and platform updates.
                    </p>

                    <div class="mt-5 flex flex-wrap gap-3">

                        {{-- FACEBOOK --}}
                        <a
                            href="https://www.facebook.com/apusfly"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="ApusFly Facebook"
                            class="flex h-12 w-12 items-center justify-center rounded-xl border border-white/10 bg-white/5 transition hover:border-primary hover:bg-primary/10"
                        >
                            <img
                                src="{{ asset('icons/facebook.svg') }}"
                                alt=""
                                class="h-6 w-6 object-contain"
                            >
                        </a>

                        {{-- INSTAGRAM --}}
                        <a
                            href="https://www.instagram.com/apusfly/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="ApusFly Instagram"
                            class="flex h-12 w-12 items-center justify-center rounded-xl border border-white/10 bg-white/5 transition hover:border-primary hover:bg-primary/10"
                        >
                            <img
                                src="{{ asset('icons/instagram.svg') }}"
                                alt=""
                                class="h-6 w-6 object-contain"
                            >
                        </a>

                        {{-- LINKEDIN --}}
                        <a
                            href="https://www.linkedin.com/company/apusfly/"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="ApusFly LinkedIn"
                            class="flex h-12 w-12 items-center justify-center rounded-xl border border-white/10 bg-white/5 transition hover:border-primary hover:bg-primary/10"
                        >
                            <img
                                src="{{ asset('icons/linkedin-color.svg') }}"
                                alt=""
                                class="h-6 w-6 object-contain"
                            >
                        </a>

                    </div>
                </div>

            </div>

            {{-- PARTNERSHIP CARD --}}
            <div class="rounded-3xl border border-primary/20 bg-primary/10 p-8">

                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-white">
                    <i data-lucide="handshake" class="h-6 w-6 text-primary-dark"></i>
                </div>

                <h3 class="mt-6 text-xl font-bold text-charcoal">
                    Interested in Partnering?
                </h3>

                <p class="mt-4 text-sm leading-7 text-gray-600">
                    Interested in collaborating with ApusFly?
                    We welcome inquiries from drone service providers,
                    professional pilots, businesses, and organizations
                    interested in exploring potential partnerships.
                </p>

                <a
                    href="mailto:contact@apusfly.com?subject=ApusFly%20Partnership%20Inquiry"
                    class="mt-6 inline-flex items-center gap-2 font-semibold text-primary-dark transition hover:underline"
                >
                    Discuss a Partnership
                    <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                </a>

            </div>
        </aside>

    </div>
</section>

{{-- FAQ --}}
<section class="bg-white px-6 py-24">
    <div class="mx-auto max-w-4xl">

        <div class="mb-12 text-center">
            <p class="text-sm font-bold uppercase tracking-widest text-primary-dark">
                Frequently Asked Questions
            </p>

            <h2 class="mt-4 text-3xl font-bold text-charcoal sm:text-4xl">
                How Can We Help?
            </h2>

            <p class="mt-5 text-gray-600">
                Answers to common questions about the ApusFly platform.
            </p>
        </div>

        @php
            $faqs = [
                [
                    'question' => 'What is ApusFly?',
                    'answer' => 'ApusFly is a developing digital marketplace designed to connect customers with drone service providers and professional pilots.',
                ],
                [
                    'question' => 'What drone services will be available?',
                    'answer' => 'The platform is planned to support aerial photography, videography, agricultural services, mapping, infrastructure inspections, and real estate applications. Availability will depend on participating providers.',
                ],
                [
                    'question' => 'Can I register as a drone service provider?',
                    'answer' => 'Provider registration is part of the planned platform. Registration requirements and verification procedures will be announced as development progresses.',
                ],
                [
                    'question' => 'Can drone pilots join ApusFly?',
                    'answer' => 'ApusFly is being designed to support drone pilots. Eligibility, verification, and assignment procedures will be confirmed before launch.',
                ],
                [
                    'question' => 'Can I book a drone service now?',
                    'answer' => 'The platform is currently under development, so online booking is not yet available.',
                ],
            ];
        @endphp

        <div class="space-y-4">
            @foreach ($faqs as $faq)
                <div
                    x-data="{ open: false }"
                    class="rounded-2xl border border-gray-200 bg-white"
                >
                    <button
                        type="button"
                        @click="open = !open"
                        :aria-expanded="open.toString()"
                        class="flex w-full items-center justify-between gap-5 p-6 text-left"
                    >
                        <span class="font-semibold text-charcoal">
                            {{ $faq['question'] }}
                        </span>

                        <i
                            data-lucide="chevron-down"
                            class="h-5 w-5 shrink-0 text-primary-dark transition-transform duration-200"
                            :class="{ 'rotate-180': open }"
                        ></i>
                    </button>

                    <div x-show="open" x-cloak class="px-6 pb-6">
                        <p class="leading-7 text-gray-600">
                            {{ $faq['answer'] }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

{{-- BOTTOM CTA --}}
<section class="bg-primary px-6 py-20">
    <div class="mx-auto max-w-4xl text-center">

        <h2 class="text-3xl font-extrabold text-charcoal sm:text-4xl">
            Your Vision. Our Wings.
        </h2>

        <p class="mx-auto mt-5 max-w-2xl leading-8 text-charcoal/80">
            Explore how ApusFly is bringing drone services
            and new opportunities closer together.
        </p>

        <a
            href="{{ route('home') }}#services"
            class="mt-8 inline-flex items-center gap-2 rounded-xl bg-charcoal px-8 py-4 font-bold text-white transition hover:bg-gray-800"
        >
            Explore Our Services
            <i data-lucide="arrow-up-right" class="h-5 w-5"></i>
        </a>

    </div>
</section>

@endsection
