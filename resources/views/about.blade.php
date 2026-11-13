@extends('layouts.app')

@section('title', 'About Aloflux | Custom Software, Automation and AI Solutions')
@section('meta_description', 'About Aloflux: who we are, how we work, and why growing businesses choose us as their technology partner.')
@section('og_title', 'About Aloflux')
@section('og_description', 'Meet Aloflux, the UK technology partner behind custom platforms, automation, and managed IT for growing businesses.')

@section('structured_data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "AboutPage",
    "name": "About Aloflux Ltd",
    "description": "Who Aloflux is, how the team works, and what clients can expect.",
    "url": "{{ url('/about') }}",
    "publisher": {
        "@@type": "Organization",
        "name": "Aloflux Ltd",
        "url": "{{ url('/') }}"
    }
}
</script>
@endsection

@php $activePage = 'about'; @endphp

@section('content')
    <!-- Page Header -->
    <section class="py-14 md:py-16 px-4 sm:px-6 lg:px-8 bg-navy">
        <div class="max-w-7xl mx-auto">
            <div class="inline-flex items-center gap-2 text-teal text-sm font-bold mb-4 tracking-wide uppercase">
                <i class='bx bx-check-circle text-lg'></i>
                <span>About Aloflux</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-5 max-w-3xl leading-tight">
                Engineering Depth for Growing Organisations
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl">
                A technology partner for SMEs, startups, and NGOs that want software done properly: scoped honestly, built to last, and supported after launch.
            </p>
        </div>
    </section>

    <!-- Story and Company Facts -->
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-5 gap-12 items-start">
            <div class="lg:col-span-3">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Story</h2>
                <div class="space-y-5 text-lg text-gray-600 leading-relaxed">
                    <p>
                        Aloflux exists to give smaller organisations the engineering depth usually reserved for large companies. We work with clients across the UK and Europe and take ownership of each system from the first workshop to long after launch.
                    </p>
                    <p>
                        Alongside client projects, we build and run our own software products, so we know what it takes to keep a platform reliable once real users depend on it. That experience shapes every system we deliver.
                    </p>
                    <p>
                        Our clients get more than code. They get a dependable technology partner that communicates clearly and stands behind its work.
                    </p>
                </div>
            </div>

            <aside class="lg:col-span-2 rounded-xl border border-gray-200 bg-gray-50 p-6 md:p-8">
                <h3 class="text-sm font-bold uppercase tracking-widest text-teal-ink mb-5">At a Glance</h3>
                @php
                    $facts = [
                        ['icon' => 'bx-buildings', 'label' => 'Company', 'value' => 'Aloflux Ltd, a UK private limited company'],
                        ['icon' => 'bx-map', 'label' => 'Registered office', 'value' => '128 City Road, London EC1V 2NX'],
                        ['icon' => 'bx-group', 'label' => 'Team', 'value' => 'London and Kampala'],
                        ['icon' => 'bx-world', 'label' => 'Clients', 'value' => 'SMEs, startups, and NGOs across the UK and Europe'],
                        // ['icon' => 'bx-file', 'label' => 'Contracts', 'value' => 'Governed by UK law'],
                        ['icon' => 'bx-envelope', 'label' => 'Contact', 'value' => 'info@aloflux.com'],
                    ];
                @endphp
                <dl class="divide-y divide-gray-200">
                    @foreach ($facts as $fact)
                        <div class="flex items-start gap-3 py-3 first:pt-0 last:pb-0">
                            <i class='bx {{ $fact['icon'] }} text-xl text-teal-ink mt-0.5 shrink-0'></i>
                            <div>
                                <dt class="text-xs font-semibold uppercase tracking-wide text-gray-600">{{ $fact['label'] }}</dt>
                                <dd class="text-gray-900 font-medium">{{ $fact['value'] }}</dd>
                            </div>
                        </div>
                    @endforeach
                </dl>
            </aside>
        </div>
    </section>

    <!-- Why Aloflux -->
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Why Aloflux</h2>
                <p class="text-lg text-gray-600">What you can expect when you work with us.</p>
            </div>
            @php
                $reasons = [
                    ['icon' => 'bx-flag', 'title' => 'UK Company, UK Contracts', 'text' => 'Registered in the UK, with contracts, invoicing, and legal jurisdiction under UK law.'],
                    ['icon' => 'bx-code-alt', 'title' => 'Senior Engineering', 'text' => 'Experienced engineers who write maintainable, documented code that is easy to hand over.'],
                    ['icon' => 'bx-pound', 'title' => 'Competitive Pricing', 'text' => 'Senior level engineering at rates well below typical UK and European agencies.'],
                    ['icon' => 'bx-support', 'title' => 'Support After Launch', 'text' => 'We stay on after go live with maintenance, hosting, and ongoing development.'],
                ];
            @endphp
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($reasons as $reason)
                    <div class="flex items-start gap-4 bg-white rounded-lg border border-gray-200 p-5">
                        <div class="w-10 h-10 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                            <i class='bx {{ $reason['icon'] }} text-xl text-teal-ink'></i>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-900 mb-1">{{ $reason['title'] }}</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">{{ $reason['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Who We Work With -->
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-10">Who We Work With</h2>
            @php
                $clients = [
                    ['title' => 'SMEs', 'text' => 'Businesses of 10 to 200 people that have outgrown spreadsheets and off the shelf tools and need systems built around how they work.'],
                    ['title' => 'Startups', 'text' => 'Founders who need a reliable engineering partner to build and grow a product without hiring a full team on day one.'],
                    ['title' => 'NGOs', 'text' => 'Development and community organisations that need dependable digital tools, hosting, and email on a sensible budget.'],
                ];
            @endphp
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($clients as $client)
                    <div class="border-t-2 border-teal pt-5">
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $client['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $client['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-teal">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy mb-1">Ready to Work With Us?</h2>
                <p class="text-navy">Tell us what you are building and we will come back with a clear next step.</p>
            </div>
            <a href="/quote" class="shrink-0 inline-flex items-center gap-2 px-8 py-3.5 bg-navy text-white rounded-lg font-semibold hover:bg-navy-light transition-colors">
                Get a Quote
                <i class='bx bx-right-arrow-alt text-xl'></i>
            </a>
        </div>
    </section>
@endsection
