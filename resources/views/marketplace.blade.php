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
    @php
        $products = [
            [
                'id' => 'school-management-system',
                'icon' => 'bx-book-reader',
                'name' => 'School Management System',
                'tagline' => 'A complete administration platform for schools, designed for everyday conditions including low or intermittent connectivity.',
                'tags' => ['Education', 'SaaS', 'Offline Ready'],
                'best_for' => 'Schools and school groups',
                'delivery' => 'Hosted, with offline support',
                'visit' => 'https://schoolms.aloflux.com/',
                'cta' => 'Request a Demo',
                'cta_type' => 'School Management System',
                'features' => [
                    ['Student Records', 'Enrolment, personal details, academic history, and document storage for every student.'],
                    ['Academic Tracking', 'Grades, assessments, report cards, and performance records for every term.'],
                    ['Attendance Management', 'Daily class attendance with absence alerts and reporting for teachers and administrators.'],
                    ['Timetable Scheduling', 'Class timetables, teacher allocation, and room scheduling managed in one place.'],
                    ['Fee Management', 'School fee billing, payment tracking, and outstanding balance reporting.'],
                    ['Parent Communication', 'Notices, announcements, and direct communication between parents and the school.'],
                ],
                'suited' => 'Primary and secondary schools, private academies, and school groups with several campuses looking for a single platform to manage administration without relying on constant internet connectivity.',
            ],
            [
                'id' => 'versefountain',
                'icon' => 'bx-pen',
                'name' => 'Versefountain',
                'tagline' => 'A creative platform built for writers, poets, and literary communities to publish, discover, and engage with original written work.',
                'tags' => ['Creative Platform', 'Community', 'SaaS'],
                'best_for' => 'Writers and literary communities',
                'delivery' => 'Hosted web platform',
                'visit' => 'https://versefountain.com',
                'cta' => 'Partner With Us',
                'cta_type' => 'Other',
                'features' => [
                    ['Publishing Tools', 'Writers can compose, format, and publish poetry, short stories, and longer pieces with a clean editor.'],
                    ['Discovery Feed', 'Readers browse new and trending work by genre, tag, or author with a personalised reading feed.'],
                    ['Community Engagement', 'Readers react, comment, and follow authors. Writers build an audience around their work.'],
                    ['Reading Lists', 'Readers save and organise work into collections to return to later.'],
                    ['Author Profiles', 'Each writer gets a public profile showcasing their published work, bio, and follower count.'],
                    ['Content Monetisation', 'Writers can gate premium content and earn from their audience directly on the platform.'],
                ],
                'suited' => 'Individual writers, poets, literary magazines, book clubs, writing communities, and publishers looking for a dedicated home for written creative work online.',
            ],
        ];

        $upcoming = [
            ['icon' => 'bx-store-alt', 'name' => 'POS and Inventory Management', 'best_for' => 'Retail shops and distributors', 'text' => 'A point of sale and stock management platform for retail shops, pharmacies, and small distributors. Tracks sales, stock levels, and supplier orders in real time.'],
            ['icon' => 'bx-building', 'name' => 'NGO Programme Management', 'best_for' => 'NGOs and development organisations', 'text' => 'Manage beneficiaries, track programme activities, handle grant reporting, and measure impact across multiple projects.'],
            ['icon' => 'bx-credit-card', 'name' => 'SACCO and Credit Union Platform', 'best_for' => 'Savings and credit cooperatives', 'text' => 'Member accounts, loan applications, repayments, savings, and financial reporting for savings and credit cooperatives.'],
        ];
    @endphp

    <!-- Page Header -->
    <section class="py-14 md:py-16 px-4 sm:px-6 lg:px-8 bg-navy">
        <div class="max-w-7xl mx-auto">
            <div class="inline-flex items-center gap-2 text-teal text-sm font-bold mb-4 tracking-wide uppercase">
                <i class='bx bx-store text-lg'></i>
                <span>Marketplace</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-5 max-w-3xl leading-tight">
                Ready to Use Software from Aloflux
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl">
                Platforms we have designed, built, and continue to improve. Instead of commissioning a custom build, adopt one directly for a straightforward subscription and be operational within days.
            </p>
        </div>
    </section>

    <!-- Compare -->
    <section class="py-14 md:py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">Compare at a Glance</h2>
            <div class="overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-left text-sm">
                    <thead class="bg-gray-50 text-gray-600 uppercase text-xs tracking-wide">
                        <tr>
                            <th scope="col" class="px-5 py-3 font-semibold">Product</th>
                            <th scope="col" class="hidden md:table-cell px-5 py-3 font-semibold">Best for</th>
                            <th scope="col" class="px-5 py-3 font-semibold">Status</th>
                            <th scope="col" class="px-5 py-3 font-semibold"><span class="sr-only">Action</span></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row" class="px-5 py-4 font-semibold text-gray-900">
                                    <a href="#{{ $product['id'] }}" class="inline-flex items-center gap-2 hover:text-teal-ink">
                                        <i class='bx {{ $product['icon'] }} text-lg text-teal-ink'></i>{{ $product['name'] }}
                                    </a>
                                </th>
                                <td class="hidden md:table-cell px-5 py-4 text-gray-700">{{ $product['best_for'] }}</td>
                                <td class="px-5 py-4"><span class="px-2.5 py-1 bg-teal/15 text-teal-ink text-xs font-semibold rounded-full whitespace-nowrap">Live</span></td>
                                <td class="px-5 py-4 text-right"><a href="#{{ $product['id'] }}" class="font-semibold text-navy hover:text-teal-ink whitespace-nowrap">View details</a></td>
                            </tr>
                        @endforeach
                        @foreach ($upcoming as $item)
                            <tr>
                                <th scope="row" class="px-5 py-4 font-semibold text-gray-900">
                                    <span class="inline-flex items-center gap-2"><i class='bx {{ $item['icon'] }} text-lg text-gray-600'></i>{{ $item['name'] }}</span>
                                </th>
                                <td class="hidden md:table-cell px-5 py-4 text-gray-700">{{ $item['best_for'] }}</td>
                                <td class="px-5 py-4"><span class="px-2.5 py-1 bg-amber-50 text-amber-800 text-xs font-semibold rounded-full whitespace-nowrap">In development</span></td>
                                <td class="px-5 py-4 text-right"><a href="/quote?type=Other" class="font-semibold text-navy hover:text-teal-ink whitespace-nowrap">Register interest</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Live Products -->
    <section class="py-14 md:py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto space-y-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900">Live Products</h2>

            @foreach ($products as $product)
                <article id="{{ $product['id'] }}" class="scroll-mt-28 bg-white rounded-xl border border-gray-200 overflow-hidden grid lg:grid-cols-3">
                    <div class="p-6 md:p-8 border-b lg:border-b-0 lg:border-r border-gray-200 flex flex-col">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-navy rounded-lg flex items-center justify-center shrink-0">
                                <i class='bx {{ $product['icon'] }} text-2xl text-teal'></i>
                            </div>
                            <h3 class="text-xl font-bold text-gray-900 leading-snug">{{ $product['name'] }}</h3>
                        </div>
                        <p class="text-gray-600 leading-relaxed mb-5">{{ $product['tagline'] }}</p>

                        <dl class="text-sm divide-y divide-gray-100 border-y border-gray-100 mb-6">
                            <div class="flex justify-between gap-4 py-2.5"><dt class="text-gray-600">Best for</dt><dd class="font-semibold text-gray-900 text-right">{{ $product['best_for'] }}</dd></div>
                            <div class="flex justify-between gap-4 py-2.5"><dt class="text-gray-600">Delivery</dt><dd class="font-semibold text-gray-900 text-right">{{ $product['delivery'] }}</dd></div>
                            <div class="flex justify-between gap-4 py-2.5"><dt class="text-gray-600">Status</dt><dd><span class="px-2.5 py-1 bg-teal/15 text-teal-ink text-xs font-semibold rounded-full">Live</span></dd></div>
                        </dl>

                        <div class="mt-auto flex flex-col gap-3">
                            <a href="{{ $product['visit'] }}" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-navy text-white rounded-lg font-semibold hover:bg-navy-light transition-colors text-sm">
                                Visit Platform
                                <i class='bx bx-link-external text-base'></i>
                            </a>
                            <a href="/quote?type={{ urlencode($product['cta_type']) }}" class="inline-flex items-center justify-center gap-2 px-6 py-3 border-2 border-gray-300 text-gray-900 rounded-lg font-semibold hover:border-navy transition-colors text-sm">
                                {{ $product['cta'] }}
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-2 p-6 md:p-8">
                        <h4 class="text-sm font-bold uppercase tracking-widest text-gray-600 mb-5">Key features</h4>
                        <ul class="grid sm:grid-cols-2 gap-x-8 gap-y-4 mb-6">
                            @foreach ($product['features'] as [$title, $text])
                                <li class="flex items-start gap-3">
                                    <i class='bx bx-check-circle text-lg text-teal-ink mt-0.5 shrink-0'></i>
                                    <div>
                                        <p class="font-semibold text-gray-900 text-sm">{{ $title }}</p>
                                        <p class="text-gray-600 text-sm leading-relaxed">{{ $text }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <div class="rounded-lg bg-gray-50 p-4 text-sm">
                            <span class="font-semibold text-gray-900">Best suited for: </span>
                            <span class="text-gray-700">{{ $product['suited'] }}</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-5">
                            @foreach ($product['tags'] as $tag)
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-semibold rounded-full">{{ $tag }}</span>
                            @endforeach
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-14 md:py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">How Adoption Works</h2>
            <ol class="grid md:grid-cols-3 gap-6">
                @foreach ([
                    ['Choose a product', 'Pick the platform that fits your organisation from the products above.'],
                    ['Get in touch', 'Tell us your setup and number of users, and we agree subscription terms.'],
                    ['Go live fast', 'We onboard your team and configure the platform, so you are running within days.'],
                ] as $i => [$title, $text])
                    <li class="flex items-start gap-4">
                        <span class="w-9 h-9 rounded-full bg-navy text-teal font-bold flex items-center justify-center shrink-0">{{ $i + 1 }}</span>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">{{ $title }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $text }}</p>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <!-- Coming Soon -->
    <section class="py-14 md:py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Coming Soon</h2>
                <p class="text-gray-600">These products are in active development. Register your interest and we will let you know when they launch.</p>
            </div>
            <div class="bg-white rounded-xl border border-gray-200 divide-y divide-gray-200">
                @foreach ($upcoming as $item)
                    <div class="flex flex-col sm:flex-row sm:items-center gap-4 p-5 md:p-6">
                        <div class="w-11 h-11 bg-gray-100 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx {{ $item['icon'] }} text-2xl text-gray-600'></i>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-2 mb-1">
                                <h3 class="font-bold text-gray-900">{{ $item['name'] }}</h3>
                                <span class="px-2 py-0.5 bg-amber-50 text-amber-800 text-xs font-semibold rounded-full">In development</span>
                            </div>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $item['text'] }}</p>
                        </div>
                        <a href="/quote?type=Other" class="shrink-0 inline-flex items-center gap-1 text-sm font-semibold text-navy hover:text-teal-ink">
                            Register interest <i class='bx bx-right-arrow-alt text-lg'></i>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-teal">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy mb-1">Need Something Not Listed Here?</h2>
                <p class="text-navy">If none of our products fits, we can scope and build exactly what you need.</p>
            </div>
            <a href="/services/custom-software-development" class="shrink-0 inline-flex items-center gap-2 px-8 py-3.5 bg-navy text-white rounded-lg font-semibold hover:bg-navy-light transition-colors">
                Custom Software
                <i class='bx bx-right-arrow-alt text-xl'></i>
            </a>
        </div>
    </section>
@endsection
