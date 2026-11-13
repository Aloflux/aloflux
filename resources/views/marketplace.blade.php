@extends('layouts.app')

@section('title', 'Marketplace | Aloflux Products and SaaS Platforms')
@section('meta_description', 'Browse Aloflux commercial products available as a service. Ready to use, continuously improved platforms you can adopt directly for a simple subscription fee.')
@section('og_title', 'Aloflux Marketplace')
@section('og_description', 'Browse Aloflux commercial products. Ready to use SaaS platforms built and maintained by Aloflux, available for direct adoption.')

@section('structured_data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "Aloflux Marketplace",
    "description": "Commercial products and SaaS platforms built and maintained by Aloflux, available for direct adoption.",
    "url": "{{ url('/marketplace') }}",
    "publisher": {
        "@@type": "Organization",
        "name": "Aloflux Ltd",
        "url": "{{ url('/') }}"
    }
}
</script>
@endsection

@php $activePage = 'marketplace'; @endphp

@section('content')

    <!-- Page Header -->
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-navy">
        <div class="max-w-7xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 text-teal text-base font-bold mb-4 tracking-wide uppercase">
                <i class='bx bx-store text-xl'></i>
                <span>Marketplace</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                Products Built by Aloflux
            </h1>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                These are platforms we have designed, built, and continue to improve. Instead of commissioning a custom build from scratch, you can adopt any of these products directly for a straightforward subscription fee and be operational within days.
            </p>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-white border-b border-gray-100">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="w-10 h-10 bg-teal/15 rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-teal-ink font-bold text-sm">1</span>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">Choose a product</h3>
                    <p class="text-gray-500 text-sm">Browse the platforms below and pick what fits your organisation.</p>
                </div>
                <div>
                    <div class="w-10 h-10 bg-teal/15 rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-teal-ink font-bold text-sm">2</span>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">Get in touch</h3>
                    <p class="text-gray-500 text-sm">Contact us to discuss your setup, the number of users, and subscription terms.</p>
                </div>
                <div>
                    <div class="w-10 h-10 bg-teal/15 rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="text-teal-ink font-bold text-sm">3</span>
                    </div>
                    <h3 class="font-bold text-gray-900 mb-1">Go live fast</h3>
                    <p class="text-gray-500 text-sm">We onboard your team, configure the platform to your needs, and you are up and running.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">

            <div class="mb-12">
                <div class="inline-flex items-center gap-2 text-teal-ink text-sm font-semibold mb-4">
                    <i class='bx bx-package text-lg'></i>
                    <span>Available Now</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Live Products</h2>
            </div>

            <!-- School Management System -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-10">
                <div class="grid md:grid-cols-5">
                    <div class="md:col-span-2 bg-navy p-10 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 bg-teal/20 rounded-xl flex items-center justify-center mb-6">
                                <i class='bx bx-book-reader text-4xl text-teal'></i>
                            </div>
                            <h2 class="text-2xl font-bold text-white mb-2">School Management System</h2>
                            <p class="text-gray-400 text-sm mb-6">A complete administration platform for schools, designed for everyday conditions including low or intermittent connectivity.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-teal/20 text-teal text-xs font-semibold rounded-full">Education</span>
                                <span class="px-3 py-1 bg-white/10 text-gray-300 text-xs font-semibold rounded-full">SaaS</span>
                                <span class="px-3 py-1 bg-white/10 text-gray-300 text-xs font-semibold rounded-full">Offline Ready</span>
                            </div>
                        </div>
                        <div class="mt-8 flex flex-col gap-3">
                            <a href="https://schoolms.aloflux.com/" target="_blank"
                                class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-teal text-navy rounded-lg font-semibold hover:bg-teal-dark transition-colors text-sm">
                                Visit Platform
                                <i class='bx bx-link-external text-base'></i>
                            </a>
                            <a href="/#contact"
                                class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white/10 text-white rounded-lg font-semibold hover:bg-white/20 transition-colors text-sm">
                                Request a Demo
                            </a>
                        </div>
                    </div>
                    <div class="md:col-span-3 p-10">
                        <h3 class="text-lg font-bold text-gray-900 mb-6">What it does</h3>
                        <div class="grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Student Records</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Enrolment, personal details, academic history, and document storage for every student.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Academic Tracking</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Grades, assessments, report cards, and performance records for every term.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Attendance Management</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Daily class attendance with absence alerts and reporting for teachers and administrators.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Timetable Scheduling</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Class timetables, teacher allocation, and room scheduling managed in one place.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Fee Management</p>
                                    <p class="text-gray-500 text-xs mt-0.5">School fee billing, payment tracking, and outstanding balance reporting.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Parent Communication</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Notices, announcements, and direct communication between parents and the school.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-5">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Best suited for</p>
                            <p class="text-gray-700 text-sm">Primary and secondary schools, private academies, and school groups with several campuses looking for a single platform to manage administration without relying on constant internet connectivity.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Versefountain -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-10">
                <div class="grid md:grid-cols-5">
                    <div class="md:col-span-2 bg-teal p-10 flex flex-col justify-between">
                        <div>
                            <div class="w-14 h-14 bg-white/45 rounded-xl flex items-center justify-center mb-6">
                                <i class='bx bx-pen text-4xl text-navy'></i>
                            </div>
                            <h2 class="text-2xl font-bold text-navy mb-2">Versefountain</h2>
                            <p class="text-navy/75 text-sm mb-6">A creative platform built for writers, poets, and literary communities to publish, discover, and engage with original written work.</p>
                            <div class="flex flex-wrap gap-2">
                                <span class="px-3 py-1 bg-white/45 text-navy text-xs font-semibold rounded-full">Creative Platform</span>
                                <span class="px-3 py-1 bg-white/45 text-navy text-xs font-semibold rounded-full">Community</span>
                                <span class="px-3 py-1 bg-white/45 text-navy text-xs font-semibold rounded-full">SaaS</span>
                            </div>
                        </div>
                        <div class="mt-8 flex flex-col gap-3">
                            <a href="https://versefountain.com" target="_blank"
                                class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-navy text-white rounded-lg font-semibold hover:bg-navy-light transition-colors text-sm">
                                Visit Platform
                                <i class='bx bx-link-external text-base'></i>
                            </a>
                            <a href="/#contact"
                                class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white/45 text-navy rounded-lg font-semibold hover:bg-white/65 transition-colors text-sm">
                                Partner With Us
                            </a>
                        </div>
                    </div>
                    <div class="md:col-span-3 p-10">
                        <h3 class="text-lg font-bold text-gray-900 mb-6">What it does</h3>
                        <div class="grid sm:grid-cols-2 gap-4 mb-8">
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Publishing Tools</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Writers can compose, format, and publish poetry, short stories, and longer pieces with a clean editor.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Discovery Feed</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Readers browse new and trending work by genre, tag, or author with a personalised reading feed.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Community Engagement</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Readers react, comment, and follow authors. Writers build an audience around their work.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Reading Lists</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Readers save and organise work into collections to return to later.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Author Profiles</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Each writer gets a public profile showcasing their published work, bio, and follower count.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Content Monetisation</p>
                                    <p class="text-gray-500 text-xs mt-0.5">Writers can gate premium content and earn from their audience directly on the platform.</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-5">
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Best suited for</p>
                            <p class="text-gray-700 text-sm">Individual writers, poets, literary magazines, book clubs, writing communities, and publishers looking for a dedicated home for written creative work online.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Coming Soon -->
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="mb-10">
                <div class="inline-flex items-center gap-2 text-gray-400 text-sm font-semibold mb-4">
                    <i class='bx bx-time text-lg'></i>
                    <span>In Development</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900">Coming Soon</h2>
                <p class="text-gray-500 mt-3 max-w-2xl">These products are actively being built and will be available for early adoption. Register your interest and we will notify you when they launch.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="border border-gray-200 rounded-xl p-6 relative overflow-hidden">
                    <span class="absolute top-4 right-4 px-2 py-0.5 bg-amber-50 text-amber-600 text-xs font-semibold rounded-full">In Development</span>
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-store-alt text-2xl text-gray-500'></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">POS and Inventory Management</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-4">A point of sale and stock management platform for retail shops, pharmacies, and small distributors. Tracks sales, stock levels, and supplier orders in real time.</p>
                    <a href="/#contact" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Register interest <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <div class="border border-gray-200 rounded-xl p-6 relative overflow-hidden">
                    <span class="absolute top-4 right-4 px-2 py-0.5 bg-amber-50 text-amber-600 text-xs font-semibold rounded-full">In Development</span>
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-building text-2xl text-gray-500'></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">NGO Programme Management</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-4">A platform for NGOs and development organisations to manage beneficiaries, track programme activities, handle grant reporting, and measure impact across multiple projects.</p>
                    <a href="/#contact" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Register interest <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>

                <div class="border border-gray-200 rounded-xl p-6 relative overflow-hidden">
                    <span class="absolute top-4 right-4 px-2 py-0.5 bg-amber-50 text-amber-600 text-xs font-semibold rounded-full">In Development</span>
                    <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center mb-4">
                        <i class='bx bx-credit-card text-2xl text-gray-500'></i>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-2">SACCO and Credit Union Platform</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-4">A member management and loan processing platform for savings and credit cooperatives. Handles member accounts, loan applications, repayments, savings, and financial reporting.</p>
                    <a href="/#contact" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                        Register interest <i class='bx bx-right-arrow-alt'></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-navy">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                Need something not listed here?
            </h2>
            <p class="text-lg text-gray-400 mb-8 max-w-2xl mx-auto">
                We build custom software for businesses that need something specific. If none of our existing products fits your situation, we can scope and build exactly what you need.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/services" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-teal text-navy rounded-lg font-semibold hover:bg-teal-dark transition-colors">
                    View Our Services
                    <i class='bx bx-right-arrow-alt text-xl'></i>
                </a>
                <a href="/#contact" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-white/10 text-white rounded-lg font-semibold hover:bg-white/20 transition-colors">
                    Get in Touch
                </a>
            </div>
        </div>
    </section>

@endsection
