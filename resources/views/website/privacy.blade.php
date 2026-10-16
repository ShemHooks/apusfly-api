@extends('layouts.website')

@section('title', 'Privacy Policy | ApusFly')
@section('description', 'Learn how ApusFly intends to collect, use, protect, and manage personal information.')

@section('content')

    @php
        $sections = [
            ['id' => 'introduction', 'title' => 'Introduction'],
            ['id' => 'information', 'title' => 'Information We Collect'],
            ['id' => 'purposes', 'title' => 'How We Use Information'],
            ['id' => 'legal-basis', 'title' => 'Legal Bases for Processing'],
            ['id' => 'verification', 'title' => 'Identity Verification'],
            ['id' => 'location', 'title' => 'Location Information'],
            ['id' => 'bookings', 'title' => 'Bookings and Payments'],
            ['id' => 'sharing', 'title' => 'Information Sharing'],
            ['id' => 'security', 'title' => 'Data Security'],
            ['id' => 'retention', 'title' => 'Data Retention'],
            ['id' => 'rights', 'title' => 'Your Privacy Rights'],
            ['id' => 'cookies', 'title' => 'Cookies and Analytics'],
            ['id' => 'third-parties', 'title' => 'Third-Party Services'],
            ['id' => 'children', 'title' => 'Children’s Privacy'],
            ['id' => 'changes', 'title' => 'Policy Updates'],
            ['id' => 'contact', 'title' => 'Contact Us'],
        ];
    @endphp

    {{-- HERO --}}
    <section class="relative overflow-hidden bg-charcoal px-6 py-20 text-white lg:py-24">
        <div class="pointer-events-none absolute -right-20 top-0 h-80 w-80 rounded-full bg-primary/10 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl">
            <div class="max-w-3xl">

                <span
                    class="inline-flex items-center gap-2 rounded-full border border-primary/30 bg-primary/10 px-4 py-2 text-sm font-semibold text-primary">
                    <i data-lucide="shield-check" class="h-4 w-4"></i>
                    Privacy & Data Protection
                </span>

                <h1 class="mt-8 text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                    Privacy <span class="text-primary">Policy.</span>
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-gray-300">
                    Your privacy matters. Learn how ApusFly intends
                    to handle personal information across its website,
                    mobile applications, and drone services marketplace.
                </p>

                <div class="mt-8 flex flex-wrap items-center gap-5 text-sm text-gray-400">
                    <span class="inline-flex items-center gap-2">
                        <i data-lucide="calendar-days" class="h-4 w-4"></i>
                        Effective Date: To be announced
                    </span>

                    <span class="inline-flex items-center gap-2">
                        <i data-lucide="file-clock" class="h-4 w-4"></i>
                        Draft — Pending Review
                    </span>
                </div>

            </div>
        </div>
    </section>

    {{-- MAIN CONTENT --}}
    <section class="bg-surface px-6 py-16 lg:py-24">
        <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-12">

            {{-- TABLE OF CONTENTS --}}
            <aside class="lg:col-span-3">
                <div class="rounded-2xl border border-gray-200 bg-white p-6 lg:sticky lg:top-28">

                    <h2 class="mb-5 flex items-center gap-2 font-bold text-charcoal">
                        <i data-lucide="list" class="h-5 w-5 text-primary-dark"></i>
                        On This Page
                    </h2>

                    <nav aria-label="Privacy Policy sections" class="max-h-[65vh] space-y-1 overflow-y-auto">
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

            {{-- POLICY DOCUMENT --}}
            <article
                class="min-w-0 rounded-3xl border border-gray-200 bg-white p-7 shadow-sm sm:p-10 lg:col-span-9 lg:p-12">

                {{-- DRAFT NOTICE --}}
                <div class="mb-12 rounded-2xl border border-primary/20 bg-primary/5 p-6">
                    <div class="flex items-start gap-3">
                        <i data-lucide="info" class="mt-1 h-5 w-5 shrink-0 text-primary-dark"></i>

                        <div>
                            <h2 class="font-bold text-charcoal">
                                Privacy Policy Draft
                            </h2>

                            <p class="mt-2 text-sm leading-7 text-gray-600">
                                This document is a preliminary privacy policy
                                prepared for review. It describes anticipated
                                data processing activities of the ApusFly
                                platform. The final policy will be updated
                                to reflect actual technical implementation,
                                service providers, and business procedures
                                before public launch.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="space-y-12 text-gray-600">

                    {{-- 1. INTRODUCTION --}}
                    <section id="introduction" class="scroll-mt-28">
                        <h2 class="text-2xl font-bold text-charcoal">
                            1. Introduction
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly is developing a digital marketplace
                            intended to connect customers with drone
                            service providers and professional pilots.
                        </p>

                        <p class="mt-4 leading-8">
                            This Privacy Policy explains the categories
                            of personal information the platform may
                            process, the purposes of processing,
                            potential information-sharing arrangements,
                            and the privacy rights of individuals.
                        </p>

                        <p class="mt-4 leading-8">
                            ApusFly intends to process personal
                            information in accordance with applicable
                            Philippine data protection laws, including
                            Republic Act No. 10173, also known as the
                            Data Privacy Act of 2012, and its applicable
                            implementing rules.
                        </p>
                    </section>

                    {{-- 2. INFORMATION --}}
                    <section id="information" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            2. Information We Collect
                        </h2>

                        <p class="mt-5 leading-8">
                            Depending on the user's role, requested
                            features, and applicable verification
                            requirements, ApusFly may collect or
                            process the following categories of
                            information:
                        </p>

                        <ul class="mt-5 list-disc space-y-3 pl-6 leading-7">
                            <li>
                                <strong>Account information:</strong>
                                Name, email address, contact details,
                                and account credentials.
                            </li>

                            <li>
                                <strong>Profile information:</strong>
                                User role, business details,
                                professional experience, and
                                service-related information.
                            </li>

                            <li>
                                <strong>Verification information:</strong>
                                Identification documents and other
                                supporting records required for
                                account or professional verification.
                            </li>

                            <li>
                                <strong>Booking information:</strong>
                                Service requests, project locations,
                                schedules, instructions, and
                                transaction-related records.
                            </li>

                            <li>
                                <strong>Location information:</strong>
                                Service locations and, where enabled
                                and authorized, device-based
                                location information.
                            </li>

                            <li>
                                <strong>Technical information:</strong>
                                Device identifiers, IP addresses,
                                browser information, and security logs.
                            </li>

                            <li>
                                <strong>Communications:</strong>
                                Customer support messages,
                                inquiries, feedback, and other
                                platform-related correspondence.
                            </li>
                        </ul>

                        <p class="mt-5 leading-8">
                            ApusFly should collect only information
                            that is necessary and proportionate
                            to a specified, legitimate purpose.
                        </p>
                    </section>

                    {{-- 3. PURPOSES --}}
                    <section id="purposes" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            3. How We Use Information
                        </h2>

                        <p class="mt-5 leading-8">
                            Personal information may be processed
                            for the following purposes:
                        </p>

                        <ul class="mt-5 list-disc space-y-3 pl-6 leading-7">
                            <li>Creating and managing user accounts.</li>
                            <li>Verifying identities and professional eligibility.</li>
                            <li>Connecting customers with service providers and pilots.</li>
                            <li>Coordinating bookings, assignments, and service requests.</li>
                            <li>Supporting payments and transaction records.</li>
                            <li>Responding to inquiries and support requests.</li>
                            <li>Protecting platform security and preventing fraud.</li>
                            <li>Maintaining service quality and platform reliability.</li>
                            <li>Complying with applicable legal obligations.</li>
                        </ul>

                        <p class="mt-5 leading-8">
                            Any additional processing purposes
                            should be disclosed to affected users
                            before the relevant processing begins.
                        </p>
                    </section>

                    {{-- 4. LEGAL BASIS --}}
                    <section id="legal-basis" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            4. Legal Bases for Processing
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly must identify an appropriate
                            lawful basis for each personal data
                            processing activity under applicable
                            data protection law.
                        </p>

                        <p class="mt-4 leading-8">
                            Depending on the processing activity,
                            relevant grounds may include consent,
                            necessity for contractual arrangements,
                            compliance with legal obligations,
                            or other grounds permitted by law.
                        </p>

                        <p class="mt-4 leading-8">
                            Where consent is required, ApusFly
                            should provide appropriate notices
                            and mechanisms for obtaining and
                            managing that consent.
                        </p>
                    </section>

                    {{-- 5. VERIFICATION --}}
                    <section id="verification" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            5. Identity Verification
                        </h2>

                        <p class="mt-5 leading-8">
                            Certain user accounts, including
                            service providers and drone pilots,
                            may be required to submit identity
                            documents or professional credentials
                            as part of the verification process.
                        </p>

                        <p class="mt-4 leading-8">
                            Verification information should
                            be accessed only by authorized
                            personnel or service providers
                            with a legitimate need to
                            perform the verification.
                        </p>

                        <p class="mt-4 leading-8">
                            Verification documents should
                            be protected using appropriate
                            access controls, storage security,
                            and retention procedures.
                        </p>
                    </section>

                    {{-- 6. LOCATION --}}
                    <section id="location" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            6. Location Information
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly may process service
                            locations to help customers
                            request drone services and
                            assist providers with service
                            coordination.
                        </p>

                        <p class="mt-4 leading-8">
                            If the mobile application
                            introduces device-based
                            location features, users
                            should receive appropriate
                            permission requests and
                            explanations of how the
                            information will be used.
                        </p>

                        <p class="mt-4 leading-8">
                            Access to location information
                            should be limited to what
                            is reasonably necessary
                            for the relevant feature.
                        </p>
                    </section>

                    {{-- 7. BOOKINGS --}}
                    <section id="bookings" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            7. Bookings and Payments
                        </h2>

                        <p class="mt-5 leading-8">
                            When booking functionality
                            becomes available, ApusFly
                            may process information
                            about service requests,
                            booking participants,
                            schedules, service fees,
                            and transaction status.
                        </p>

                        <p class="mt-4 leading-8">
                            If third-party payment
                            providers are integrated,
                            payment-related information
                            may be processed by those
                            providers according to
                            their applicable privacy
                            notices and contractual
                            arrangements.
                        </p>

                        <p class="mt-4 leading-8">
                            The final Privacy Policy
                            should identify relevant
                            payment processing
                            arrangements before
                            payments are enabled.
                        </p>
                    </section>

                    {{-- 8. SHARING --}}
                    <section id="sharing" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            8. Information Sharing
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly may need to share
                            limited personal information
                            with other parties to
                            support marketplace
                            functionality.
                        </p>

                        <p class="mt-4 leading-8">
                            Potential recipients include
                            participating customers,
                            service providers, pilots,
                            authorized support personnel,
                            technical service providers,
                            and payment processors.
                        </p>

                        <p class="mt-4 leading-8">
                            Information should be
                            disclosed only where
                            appropriate for the
                            relevant purpose,
                            supported by a lawful
                            basis, and subject to
                            suitable safeguards.
                        </p>

                        <p class="mt-4 leading-8">
                            ApusFly should not sell
                            personal information
                            without a lawful basis
                            and appropriate disclosure.
                        </p>
                    </section>

                    {{-- 9. SECURITY --}}
                    <section id="security" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            9. Data Security
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly intends to implement
                            organizational, physical,
                            and technical measures
                            appropriate to the risks
                            associated with personal
                            information processing.
                        </p>

                        <p class="mt-4 leading-8">
                            Planned security controls
                            may include role-based
                            access restrictions,
                            protected communication
                            channels, secure
                            authentication, audit
                            logging, and controlled
                            access to verification
                            documents.
                        </p>

                        <p class="mt-4 leading-8">
                            No information system
                            can guarantee absolute
                            security. Security
                            procedures should be
                            periodically reviewed
                            and updated as necessary.
                        </p>
                    </section>

                    {{-- 10. RETENTION --}}
                    <section id="retention" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            10. Data Retention
                        </h2>

                        <p class="mt-5 leading-8">
                            Personal information
                            should be retained only
                            for as long as reasonably
                            necessary to fulfill
                            the disclosed processing
                            purposes or comply with
                            applicable legal
                            requirements.
                        </p>

                        <p class="mt-4 leading-8">
                            Retention periods may
                            differ for account
                            information, verification
                            documents, booking records,
                            transaction information,
                            and security logs.
                        </p>

                        <p class="mt-4 leading-8">
                            ApusFly must establish
                            documented retention
                            and secure deletion
                            procedures before
                            processing personal
                            information at scale.
                        </p>
                    </section>

                    {{-- 11. RIGHTS --}}
                    <section id="rights" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            11. Your Privacy Rights
                        </h2>

                        <p class="mt-5 leading-8">
                            Under applicable Philippine
                            data protection laws,
                            individuals may have
                            rights relating to their
                            personal information,
                            subject to legal
                            conditions and exceptions.
                        </p>

                        <ul class="mt-5 list-disc space-y-3 pl-6 leading-7">
                            <li>Right to be informed about personal data processing.</li>
                            <li>Right to access personal information.</li>
                            <li>Right to object to certain processing activities.</li>
                            <li>Right to request correction of inaccurate information.</li>
                            <li>Right to request blocking, removal, or destruction where legally applicable.</li>
                            <li>Right to data portability where applicable.</li>
                            <li>Right to seek damages where provided by law.</li>
                            <li>Right to lodge a complaint with the National Privacy Commission.</li>
                        </ul>

                        <p class="mt-5 leading-8">
                            Privacy-related requests
                            may be submitted through
                            ApusFly's official contact
                            email. Requests may require
                            reasonable identity
                            verification to prevent
                            unauthorized disclosure.
                        </p>
                    </section>

                    {{-- 12. COOKIES --}}
                    <section id="cookies" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            12. Cookies and Analytics
                        </h2>

                        <p class="mt-5 leading-8">
                            The ApusFly website may
                            use cookies or similar
                            technologies for essential
                            website functions,
                            session management,
                            security, and, if enabled,
                            usage analytics.
                        </p>

                        <p class="mt-4 leading-8">
                            Any non-essential
                            tracking or analytics
                            tools should be reviewed
                            for applicable notice
                            and consent requirements
                            before deployment.
                        </p>

                        <p class="mt-4 leading-8">
                            The final policy should
                            identify the categories
                            of cookies actually
                            deployed on the website.
                        </p>
                    </section>

                    {{-- 13. THIRD PARTIES --}}
                    <section id="third-parties" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            13. Third-Party Services
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly may integrate
                            external services for
                            hosting, infrastructure,
                            notifications, mapping,
                            analytics, or payment
                            processing.
                        </p>

                        <p class="mt-4 leading-8">
                            The final policy should
                            identify relevant
                            categories of service
                            providers and explain
                            material personal data
                            sharing or processing
                            arrangements.
                        </p>

                        <p class="mt-4 leading-8">
                            Cross-border processing
                            or storage arrangements,
                            if applicable, should
                            be assessed for compliance
                            with Philippine data
                            protection requirements.
                        </p>
                    </section>

                    {{-- 14. CHILDREN --}}
                    <section id="children" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            14. Children's Privacy
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly's marketplace
                            is intended for users
                            who can lawfully enter
                            into the relevant
                            service arrangements.
                        </p>

                        <p class="mt-4 leading-8">
                            Before launch, ApusFly
                            should establish
                            appropriate age
                            eligibility requirements
                            and procedures for
                            handling information
                            relating to minors,
                            if applicable.
                        </p>
                    </section>

                    {{-- 15. CHANGES --}}
                    <section id="changes" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            15. Changes to This Policy
                        </h2>

                        <p class="mt-5 leading-8">
                            ApusFly may revise
                            this Privacy Policy
                            to reflect changes
                            in its operations,
                            platform functionality,
                            service providers,
                            or legal requirements.
                        </p>

                        <p class="mt-4 leading-8">
                            Material changes should
                            be communicated through
                            appropriate channels
                            before or when they
                            take effect, as required
                            by applicable law.
                        </p>
                    </section>

                    {{-- 16. CONTACT --}}
                    <section id="contact" class="scroll-mt-28 border-t border-gray-100 pt-10">
                        <h2 class="text-2xl font-bold text-charcoal">
                            16. Contact Us
                        </h2>

                        <p class="mt-5 leading-8">
                            For privacy-related
                            questions, concerns,
                            or requests involving
                            personal information,
                            contact ApusFly:
                        </p>

                        <div class="mt-6 rounded-2xl border border-gray-200 bg-surface p-6">
                            <h3 class="font-bold text-charcoal">
                                ApusFly
                            </h3>

                            <p class="mt-2 text-sm text-gray-600">
                                Privacy Inquiries
                            </p>

                            <a href="mailto:contact@apusfly.com?subject=Privacy%20Inquiry"
                                class="mt-4 inline-flex items-center gap-2 break-all font-semibold text-primary-dark hover:underline">
                                <i data-lucide="mail" class="h-5 w-5 shrink-0"></i>
                                contact@apusfly.com
                            </a>
                        </div>

                        <p class="mt-5 leading-8">
                            Individuals may also
                            contact the Philippine
                            National Privacy Commission
                            regarding applicable
                            data privacy concerns.
                        </p>

                        <a href="https://privacy.gov.ph/" target="_blank" rel="noopener noreferrer"
                            class="mt-4 inline-flex items-center gap-2 font-semibold text-primary-dark hover:underline">
                            National Privacy Commission
                            <i data-lucide="external-link" class="h-4 w-4"></i>
                        </a>
                    </section>

                </div>

                {{-- DOCUMENT FOOTER --}}
                <div
                    class="mt-14 flex flex-col gap-5 border-t border-gray-200 pt-8 sm:flex-row sm:items-center sm:justify-between">

                    <p class="text-sm text-gray-500">
                        ApusFly Privacy Policy
                    </p>

                    <a href="{{ route('terms') }}"
                        class="inline-flex items-center gap-2 text-sm font-semibold text-primary-dark transition hover:underline">
                        View Terms of Service
                        <i data-lucide="arrow-up-right" class="h-4 w-4"></i>
                    </a>

                </div>

            </article>
        </div>
    </section>

@endsection