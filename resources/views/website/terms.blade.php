@extends('layouts.website')

@section('title', 'Terms of Service | ApusFly')
@section('description', 'Read the Terms of Service governing the use of the ApusFly drone services marketplace.')

@section('content')

    @php
        $sections = [
            ['id' => 'introduction', 'title' => 'Introduction'],
            ['id' => 'eligibility', 'title' => 'Eligibility and Accounts'],
            ['id' => 'platform', 'title' => 'Platform Services'],
            ['id' => 'customers', 'title' => 'Customer Responsibilities'],
            ['id' => 'providers', 'title' => 'Service Provider Responsibilities'],
            ['id' => 'pilots', 'title' => 'Drone Pilot Responsibilities'],
            ['id' => 'bookings', 'title' => 'Bookings and Service Agreements'],
            ['id' => 'payments', 'title' => 'Payments and Platform Fees'],
            ['id' => 'cancellations', 'title' => 'Cancellations and Refunds'],
            ['id' => 'safety', 'title' => 'Safety and Regulatory Compliance'],
            ['id' => 'conduct', 'title' => 'Prohibited Activities'],
            ['id' => 'content', 'title' => 'Intellectual Property'],
            ['id' => 'privacy', 'title' => 'Privacy and Personal Data'],
            ['id' => 'availability', 'title' => 'Platform Availability'],
            ['id' => 'liability', 'title' => 'Liability and Disclaimers'],
            ['id' => 'termination', 'title' => 'Account Suspension and Termination'],
            ['id' => 'changes', 'title' => 'Changes to These Terms'],
            ['id' => 'law', 'title' => 'Governing Law and Disputes'],
            ['id' => 'contact', 'title' => 'Contact Information'],
        ];
    @endphp

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-charcoal px-6 py-20 text-white lg:py-24">
        <div class="pointer-events-none absolute -right-20 top-0 h-80 w-80 rounded-full bg-primary/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl">
            <div class="max-w-3xl">
                <span
                    class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
                    <i data-lucide="file-text" class="h-4 w-4"></i>
                    Legal Information
                </span>

                <h1 class="mt-8 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    Terms of <span class="text-primary">Service.</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-gray-300">
                    Understand the rules, responsibilities, and conditions
                    that will govern your use of the ApusFly platform.
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-5 text-sm text-gray-400">
                    <span class="inline-flex items-center gap-2">
                        <i data-lucide="calendar-days" class="h-4 w-4"></i>
                        Effective Date: To be announced
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <i data-lucide="clock-3" class="h-4 w-4"></i>
                        Draft — Pending Review
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- LEGAL CONTENT --}}
    <section class="bg-surface px-6 py-16 lg:py-24">
        <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-12">

            {{-- TABLE OF CONTENTS --}}
            <aside class="lg:col-span-3">
                <div class="rounded-2xl border border-gray-200 bg-white p-6 lg:sticky lg:top-28">
                    <h2 class="mb-5 flex items-center gap-2 font-bold text-charcoal">
                        <i data-lucide="list" class="h-5 w-5 text-primary-dark"></i>
                        On This Page
                    </h2>

                    <nav aria-label="Terms of Service sections" class="max-h-[65vh] space-y-1 overflow-y-auto">
                        @foreach ($sections as $index => $section)
                            <a href="#{{ $section['id'] }}"
                                class="flex gap-3 rounded-lg px-3 py-2 text-sm text-gray-600 transition hover:bg-primary/10 hover:text-primary-dark">
                                <span class="font-semibold text-primary-dark">
                                    {{ $index + 1 }}.
                                </span>
                                <span>{{ $section['title'] }}</span>
                            </a>
                        @endforeach
                    </nav>
                </div>
            </aside>

            {{-- MAIN DOCUMENT --}}
            <article
                class="min-w-0 rounded-3xl border border-gray-200 bg-white p-7 shadow-sm sm:p-10 lg:col-span-9 lg:p-12">

                <div class="mb-12 rounded-2xl border border-primary/20 bg-primary/5 p-6">
                    <div class="flex items-start gap-3">
                        <i data-lucide="info" class="mt-1 h-5 w-5 shrink-0 text-primary-dark"></i>

                        <div>
                            <h2 class="font-bold text-charcoal">
                                Important Notice
                            </h2>

                            <p class="mt-2 text-sm leading-7 text-gray-600">
                                These Terms of Service are currently a draft
                                prepared for review. The ApusFly marketplace
                                is under development, and the final terms
                                will be published before the platform becomes
                                available for public transactions.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="space-y-12 text-gray-600">

                    {{-- 1 --}}
                    <section id="introduction" class="scroll-mt-28">
                        <h2 class="text-2xl font-bold text-charcoal">
                            1. Introduction
                        </h2>

                        <p class="mt-5 leading-8">
                            Welcome to ApusFly, a digital marketplace being
                            developed to connect individuals, businesses,
                            and organizations seeking drone services with
                            drone service providers and professional pilots.
                        </p>

                        <p class="mt-4 leading-8">
                            These Terms of Service ("Terms") are intended
                            to govern access to and use of the ApusFly
                            website, mobile applications, and related
                            platform services.
                        </p>

                        <p class="mt-4 leading-8">
                            Once these Terms become effective, users will
                            be required to review and accept them as part
                            of the applicable registration or service process.
                        </p>
                    </section>

                    {{-- 2 --}}
                    <section id="eligibility" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            2. Eligibility and Accounts
                        </h2>

                        <p class="mt-5 leading-8">
                            Users must provide accurate and current
                            information when creating an ApusFly account.
                            Each user is responsible for maintaining the
                            confidentiality of their login credentials.
                        </p>

                        <p class="mt-4 leading-8">
                            Certain account types may require identity
                            verification, supporting documents, or other
                            eligibility checks before accessing specific
                            platform features.
                        </p>

                        <p class="mt-4 leading-8">
                            Users must meet applicable legal requirements
                            for entering into agreements and using the
                            services available through the platform.
                        </p>
                    </section>

                    {{-- 3 --}}
                    <section id="platform" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            3. Platform Services
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly is designed to facilitate the discovery,
                            coordination, and management of drone services
                            through a centralized digital marketplace.
                        </p>

                        <p class="mt-4 leading-8">
                            Planned service categories include aerial
                            photography, videography, agricultural drone
                            services, mapping and surveying, infrastructure
                            inspections, and real estate applications.
                        </p>

                        <p class="mt-4 leading-8">
                            Service availability may depend on participating
                            providers, geographic coverage, operational
                            conditions, and applicable regulations.
                        </p>

                        <p class="mt-4 leading-8">
                            Unless expressly stated otherwise for a
                            particular offering, ApusFly acts as a platform
                            facilitating connections and coordination rather
                            than directly operating every drone service
                            listed on the marketplace.
                        </p>
                    </section>

                    {{-- 4 --}}
                    <section id="customers" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            4. Customer Responsibilities
                        </h2>

                        <p class="mt-5 leading-8">
                            Customers are expected to provide accurate
                            information about their requested services,
                            including relevant locations, schedules,
                            requirements, and project specifications.
                        </p>

                        <p class="mt-4 leading-8">
                            Customers must cooperate with reasonable
                            operational and safety requirements, including
                            obtaining permissions that are their
                            responsibility under applicable law or the
                            agreed service arrangement.
                        </p>

                        <p class="mt-4 leading-8">
                            Customers must not request drone operations
                            that violate laws, privacy rights, property
                            restrictions, or aviation safety requirements.
                        </p>
                    </section>

                    {{-- 5 --}}
                    <section id="providers" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            5. Service Provider Responsibilities
                        </h2>

                        <p class="mt-5 leading-8">
                            Service providers are responsible for
                            maintaining accurate descriptions of their
                            offerings, capabilities, pricing information,
                            and availability.
                        </p>

                        <p class="mt-4 leading-8">
                            Providers must ensure that their operations
                            comply with applicable laws and that personnel
                            performing drone services possess any
                            authorizations, qualifications, or permissions
                            required for the particular operation.
                        </p>

                        <p class="mt-4 leading-8">
                            Providers are expected to communicate
                            professionally, fulfill confirmed service
                            commitments, and promptly inform affected
                            parties when operational circumstances change.
                        </p>
                    </section>

                    {{-- 6 --}}
                    <section id="pilots" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            6. Drone Pilot Responsibilities
                        </h2>

                        <p class="mt-5 leading-8">
                            Drone pilots participating in the ApusFly
                            marketplace must comply with applicable
                            aviation laws, safety requirements, and
                            operational restrictions.
                        </p>

                        <p class="mt-4 leading-8">
                            Pilots must maintain any qualifications,
                            certifications, licenses, or authorizations
                            required for the drone operations they
                            undertake.
                        </p>

                        <p class="mt-4 leading-8">
                            Pilots are responsible for assessing
                            operational safety, including weather,
                            airspace restrictions, equipment condition,
                            and other relevant flight risks.
                        </p>

                        <p class="mt-4 leading-8">
                            No booking or assignment through ApusFly
                            should be interpreted as permission to
                            conduct an unsafe or unlawful flight.
                        </p>
                    </section>

                    {{-- 7 --}}
                    <section id="bookings" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            7. Bookings and Service Agreements
                        </h2>

                        <p class="mt-5 leading-8">
                            The platform is intended to allow customers
                            to submit service requests and coordinate
                            bookings with participating service providers.
                        </p>

                        <p class="mt-4 leading-8">
                            Booking confirmation, scope of work,
                            scheduling, deliverables, and other
                            service-specific arrangements will be
                            subject to the applicable booking process
                            and agreed service details.
                        </p>

                        <p class="mt-4 leading-8">
                            Services may be affected by weather,
                            airspace restrictions, safety considerations,
                            equipment availability, and other
                            operational circumstances.
                        </p>
                    </section>

                    {{-- 8 --}}
                    <section id="payments" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            8. Payments and Platform Fees
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly may support payment processing
                            and platform service fees as part of its
                            marketplace operations.
                        </p>

                        <p class="mt-4 leading-8">
                            Applicable charges, payment methods,
                            transaction processing arrangements,
                            and any platform fees will be disclosed
                            through the relevant booking or payment
                            process before users are asked to
                            complete a transaction.
                        </p>

                        <p class="mt-4 leading-8">
                            Final payment policies and fee structures
                            will be established before transactional
                            features are launched.
                        </p>
                    </section>

                    {{-- 9 --}}
                    <section id="cancellations" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            9. Cancellations and Refunds
                        </h2>

                        <p class="mt-5 leading-8">
                            Booking cancellations, rescheduling,
                            and refund eligibility will be governed
                            by the applicable policies disclosed
                            before booking confirmation.
                        </p>

                        <p class="mt-4 leading-8">
                            Safety concerns, unfavorable weather,
                            regulatory restrictions, or other
                            operational circumstances may require
                            a service to be postponed or cancelled.
                        </p>

                        <p class="mt-4 leading-8">
                            The final cancellation and refund
                            procedures will be published before
                            online bookings become available,
                            subject to applicable consumer
                            protection laws.
                        </p>
                    </section>

                    {{-- 10 --}}
                    <section id="safety" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            10. Safety and Regulatory Compliance
                        </h2>

                        <p class="mt-5 leading-8">
                            All drone operations arranged through
                            ApusFly must comply with applicable
                            Philippine laws, Civil Aviation Authority
                            of the Philippines (CAAP) requirements,
                            and other relevant rules or permissions.
                        </p>

                        <p class="mt-4 leading-8">
                            Service providers and pilots must assess
                            the legality and safety of each proposed
                            operation before proceeding.
                        </p>

                        <p class="mt-4 leading-8">
                            ApusFly may restrict or remove listings
                            or accounts associated with unsafe,
                            misleading, or unlawful activities,
                            subject to its applicable enforcement
                            procedures.
                        </p>
                    </section>

                    {{-- 11 --}}
                    <section id="conduct" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            11. Prohibited Activities
                        </h2>

                        <p class="mt-5 leading-8">
                            Users must not misuse ApusFly or
                            engage in activities that compromise
                            platform integrity, safety, or the
                            rights of others.
                        </p>

                        <ul class="mt-5 list-disc space-y-3 pl-6 leading-7">
                            <li>Providing false or misleading account information.</li>
                            <li>Using the platform for fraudulent transactions.</li>
                            <li>Requesting or conducting unlawful drone operations.</li>
                            <li>Harassing, threatening, or discriminating against other users.</li>
                            <li>Attempting unauthorized access to accounts or systems.</li>
                            <li>Distributing malicious software or interfering with platform operations.</li>
                            <li>Misusing another person's personal information.</li>
                        </ul>
                    </section>

                    {{-- 12 --}}
                    <section id="content" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            12. Intellectual Property
                        </h2>

                        <p class="mt-5 leading-8">
                            The ApusFly name, branding, website design,
                            application interfaces, and other
                            platform materials are protected by
                            applicable intellectual property laws,
                            subject to ownership and licensing rights.
                        </p>

                        <p class="mt-4 leading-8">
                            Users must not copy, reproduce,
                            redistribute, or commercially exploit
                            protected platform materials without
                            appropriate authorization.
                        </p>

                        <p class="mt-4 leading-8">
                            Ownership and permitted use of drone
                            photographs, videos, survey outputs,
                            and other service deliverables should
                            be defined in the applicable service
                            agreement.
                        </p>
                    </section>

                    {{-- 13 --}}
                    <section id="privacy" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            13. Privacy and Personal Data
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly intends to handle personal
                            information in accordance with applicable
                            Philippine data protection laws,
                            including the Data Privacy Act of 2012.
                        </p>

                        <p class="mt-4 leading-8">
                            Personal information may be processed
                            for account registration, verification,
                            booking coordination, customer support,
                            security, and other disclosed purposes.
                        </p>

                        <p class="mt-4 leading-8">
                            Details concerning personal data
                            collection, processing, retention,
                            sharing, and user rights will be
                            described in the ApusFly Privacy Policy.
                        </p>
                    </section>

                    {{-- 14 --}}
                    <section id="availability" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            14. Platform Availability
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly may require maintenance,
                            updates, or temporary service
                            interruptions as the platform
                            is developed and operated.
                        </p>

                        <p class="mt-4 leading-8">
                            Features may be introduced,
                            modified, or discontinued
                            as the platform evolves,
                            subject to applicable obligations.
                        </p>
                    </section>

                    {{-- 15 --}}
                    <section id="liability" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            15. Liability and Disclaimers
                        </h2>

                        <p class="mt-5 leading-8">
                            Drone operations involve inherent
                            operational risks. Participating
                            providers and pilots remain
                            responsible for their own conduct
                            and compliance with applicable laws.
                        </p>

                        <p class="mt-4 leading-8">
                            ApusFly's responsibilities regarding
                            marketplace operations, service
                            coordination, payment processing,
                            and disputes will depend on the
                            final platform arrangements
                            and applicable law.
                        </p>

                        <p class="mt-4 leading-8">
                            Nothing in these Terms is intended
                            to exclude or restrict legal rights
                            or liabilities that cannot lawfully
                            be excluded or restricted.
                        </p>
                    </section>

                    {{-- 16 --}}
                    <section id="termination" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            16. Account Suspension and Termination
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly may suspend or restrict
                            accounts where reasonably necessary
                            to address suspected fraud,
                            security threats, unlawful conduct,
                            or serious violations of applicable
                            platform rules.
                        </p>

                        <p class="mt-4 leading-8">
                            Procedures for notices, reviews,
                            appeals, and account termination
                            will be established in the final
                            platform policies, consistent
                            with applicable law.
                        </p>
                    </section>

                    {{-- 17 --}}
                    <section id="changes" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            17. Changes to These Terms
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly may revise its Terms of
                            Service to reflect changes in
                            platform features, operations,
                            regulatory requirements, or
                            business policies.
                        </p>

                        <p class="mt-4 leading-8">
                            Material changes will be
                            communicated through appropriate
                            channels, and additional acceptance
                            may be requested where necessary.
                        </p>
                    </section>

                    {{-- 18 --}}
                    <section id="law" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            18. Governing Law and Disputes
                        </h2>

                        <p class="mt-5 leading-8">
                            These Terms are intended to be
                            governed by the laws of the
                            Republic of the Philippines.
                        </p>

                        <p class="mt-4 leading-8">
                            Users may raise platform-related
                            concerns through ApusFly's
                            official contact channels.
                            Any formal dispute resolution
                            procedures will be specified
                            in the finalized Terms,
                            without limiting rights
                            provided by applicable law.
                        </p>
                    </section>

                    {{-- 19 --}}
                    <section id="contact" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            19. Contact Information
                        </h2>

                        <p class="mt-5 leading-8">
                            For questions about these Terms
                            of Service, contact ApusFly
                            through its official email:
                        </p>

                        <a href="mailto:contact@apusfly.com?subject=Terms%20of%20Service%20Inquiry"
                            class="mt-5 inline-flex items-center gap-2 font-semibold text-primary-dark hover:underline">
                            <i data-lucide="mail" class="h-5 w-5"></i>
                            contact@apusfly.com
                        </a>

                        <p class="mt-5 leading-8">
                            You may also visit our
                            <a href="{{ route('contact') }}" class="font-semibold text-primary-dark hover:underline">
                                Contact Us page
                            </a>
                            for additional information.
                        </p>
                    </section>

                </div>

                {{-- DOCUMENT FOOTER --}}
                <div
                    class="mt-14 flex flex-col gap-5 border-t border-gray-200 pt-8 sm:flex-row sm:items-center sm:justify-between">
                    <p class="text-sm text-gray-500">
                        ApusFly Terms of Service
                    </p>

                    <a href="{{ route('home') }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-primary-dark transition hover:underline">
                        <i data-lucide="arrow-left" class="h-4 w-4"></i>
                        Back to Home
                    </a>
                </div>

            </article>
        </div>
    </section>

@endsection