@extends('layouts.app')

@section('title', 'Aloflux | Custom Software, Automation and AI Solutions')
@section('meta_description', 'Aloflux is a UK software company. We design, build, and support web platforms, workflow automation, AI tools, and commerce infrastructure for growing businesses.')
@section('og_title', 'Aloflux | Custom Software, Automation and AI Solutions')
@section('og_description', 'Software built around how your business works. Senior engineering, clear communication, and pricing that makes serious projects viable.')

@section('structured_data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebSite",
    "name": "Aloflux",
    "url": "{{ url('/') }}",
    "description": "UK software company building web platforms, workflow automation, AI tools, and commerce infrastructure.",
    "publisher": {
        "@@type": "Organization",
        "name": "Aloflux Ltd"
    }
}
</script>
@endsection

@php $activePage = 'home'; @endphp

@section('content')
    <!-- Hero Section -->
    <section id="home" class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <div>
                <div class="inline-flex items-center gap-2 text-teal-ink text-sm md:text-base font-bold mb-4 tracking-wide uppercase">
                    <i class='bx bx-check-circle text-xl'></i>
                    <span>UK Software and Automation Partner</span>
                </div>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Software Built Around How Your Business Works
                </h1>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed max-w-xl">
                    We design, build, and support the systems growing companies depend on: web platforms, workflow automation, AI tools, and commerce infrastructure. Senior engineering, clear communication, and pricing that makes serious projects viable.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="/quote" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-navy text-white rounded-lg font-semibold hover:bg-navy-light transition-colors">
                        Get a Quote
                        <i class='bx bx-right-arrow-alt text-xl'></i>
                    </a>
                    <a href="/services" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-white text-gray-900 border-2 border-gray-300 rounded-lg font-semibold hover:border-navy hover:text-navy transition-colors">
                        Our Services
                    </a>
                </div>
            </div>

            {{-- Illustration: separate business systems connected by one Aloflux build --}}
            <div class="bg-navy rounded-2xl p-6 md:p-8" role="img" aria-label="Diagram showing sales, payments, and inventory systems connected through one Aloflux build into dashboards, automated workflows, and a customer portal">
                <p class="text-xs font-bold uppercase tracking-widest text-teal mb-5">Your systems, connected</p>
                <div class="grid grid-cols-3 gap-3">
                    @foreach (['bx-user-pin' => 'Sales and CRM', 'bx-credit-card' => 'Payments', 'bx-package' => 'Inventory'] as $icon => $label)
                        <div class="bg-white/5 border border-white/10 rounded-lg p-3 text-center">
                            <i class='bx {{ $icon }} text-2xl text-gray-300'></i>
                            <p class="text-xs text-gray-300 mt-1">{{ $label }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="flex justify-around py-2 text-teal" aria-hidden="true">
                    <i class='bx bx-down-arrow-alt text-2xl'></i><i class='bx bx-down-arrow-alt text-2xl'></i><i class='bx bx-down-arrow-alt text-2xl'></i>
                </div>
                <div class="bg-white rounded-lg p-4 flex items-center gap-3 shadow-lg shadow-black/20">
                    <img src="/images/brand/logo.png" alt="" class="h-10 w-auto">
                    <div>
                        <p class="font-bold text-navy">One connected platform</p>
                        <p class="text-sm text-gray-600">Built, integrated, and supported by Aloflux</p>
                    </div>
                </div>
                <div class="flex justify-around py-2 text-teal" aria-hidden="true">
                    <i class='bx bx-down-arrow-alt text-2xl'></i><i class='bx bx-down-arrow-alt text-2xl'></i><i class='bx bx-down-arrow-alt text-2xl'></i>
                </div>
                <div class="grid grid-cols-3 gap-3">
                    @foreach (['bx-line-chart' => 'Live dashboards', 'bx-cog' => 'Automated workflows', 'bx-window-alt' => 'Customer portal'] as $icon => $label)
                        <div class="bg-white rounded-lg p-3 text-center">
                            <i class='bx {{ $icon }} text-2xl text-teal-ink'></i>
                            <p class="text-xs font-semibold text-gray-900 mt-1">{{ $label }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Core Services -->
    <section id="services" class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-10">
                <div class="max-w-2xl">
                    <div class="inline-flex items-center gap-2 text-teal-ink text-sm font-semibold mb-4">
                        <i class='bx bx-check-circle text-lg'></i>
                        <span>What We Do</span>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Three Core Services</h2>
                    <p class="text-lg text-gray-600">Most of our work falls into one of these areas, backed by specialist support when a project needs it.</p>
                </div>
                <a href="/services" class="shrink-0 inline-flex items-center gap-2 text-navy font-semibold hover:text-teal-ink transition-colors">
                    View all services
                    <i class='bx bx-right-arrow-alt text-xl'></i>
                </a>
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-8">
                @foreach (\App\Support\ServiceCatalog::core() as $slug => $coreService)
                    <x-core-service-card :slug="$slug" :service="$coreService" />
                @endforeach
            </div>

            <div class="flex flex-wrap items-center gap-3">
                <span class="text-gray-600 text-sm font-semibold mr-1">Specialist services:</span>
                @foreach (array_diff_key(\App\Support\ServiceCatalog::all(), \App\Support\ServiceCatalog::core()) as $slug => $specialist)
                    <a href="/services/{{ $slug }}" class="px-3 py-1.5 bg-white border border-gray-200 text-gray-700 text-sm rounded-full hover:border-teal hover:text-teal-ink transition-colors">{{ $specialist['title'] }}</a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- How We Work -->
    <section id="how-we-work" class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-12">
                <div class="inline-flex items-center gap-2 text-teal-ink text-sm font-semibold mb-4">
                    <i class='bx bx-check-circle text-lg'></i>
                    <span>How We Work</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Start Small, Scale When It Works</h2>
                <p class="text-lg text-gray-600">A clear path from first conversation to a live system, with costs you can see at every stage.</p>
            </div>

            @php
                $steps = [
                    ['title' => 'Discovery Sprint', 'text' => 'A paid two week scoping engagement. You receive a technical proposal, an architecture recommendation, and a fixed quote for the build.', 'note' => 'From £1,200'],
                    ['title' => 'Project Build', 'text' => 'Fixed scope delivery against agreed milestones. Payments follow progress: 30% upfront, 40% at the midpoint, and 30% on completion.', 'note' => 'Milestone billing'],
                    ['title' => 'Ongoing Support', 'text' => 'Once you are live, a monthly retainer covers continued development, maintenance, hosting, and automation management.', 'note' => 'Monthly retainer'],
                ];
            @endphp

            <div class="relative">
                <div class="hidden md:block absolute top-5 left-5 right-[30%] h-0.5 bg-teal/40" aria-hidden="true"></div>
            <ol class="relative grid md:grid-cols-3 gap-10 md:gap-8">
                @foreach ($steps as $i => $step)
                    <li class="relative">
                        <span class="relative z-10 w-10 h-10 rounded-full bg-navy text-teal font-bold flex items-center justify-center mb-5 ring-4 ring-white">{{ $i + 1 }}</span>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $step['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">{{ $step['text'] }}</p>
                        <span class="inline-block px-3 py-1 bg-teal/15 text-teal-ink text-xs font-semibold rounded-full">{{ $step['note'] }}</span>
                    </li>
                @endforeach
            </ol>
            </div>
        </div>
    </section>

    <!-- Selected Work -->
    <section id="projects" class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-10">
                <div class="inline-flex items-center gap-2 text-teal-ink text-sm font-semibold mb-4">
                    <i class='bx bx-check-circle text-lg'></i>
                    <span>Our Work</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Selected Work</h2>
                <p class="text-lg text-gray-600">Products we build and run ourselves, and organisations whose infrastructure we manage day to day.</p>
            </div>

            @php
                $work = [
                    'Products we run' => [
                        ['icon' => 'bx-book-reader', 'title' => 'School Management System', 'text' => 'School administration covering records, attendance, timetables, fees, and parent communication. Works offline.', 'link' => '/marketplace#school-management-system', 'label' => 'View in marketplace'],
                        ['icon' => 'bx-pen', 'title' => 'Versefountain', 'text' => 'A publishing and community platform where writers, poets, and readers share and discover original work.', 'link' => '/marketplace#versefountain', 'label' => 'View in marketplace'],
                    ],
                    'Client work' => [
                        ['icon' => 'bx-server', 'title' => 'CONSENT', 'text' => 'Managed web hosting and email infrastructure, with ongoing administration and technical support.', 'link' => '/services/it-managed-services', 'label' => 'IT Managed Services'],
                        ['icon' => 'bx-envelope', 'title' => 'FoSCU', 'text' => 'Managed hosting and staff email, keeping the organisation online without an internal IT team.', 'link' => '/services/it-managed-services', 'label' => 'IT Managed Services'],
                    ],
                ];
            @endphp

            <div class="grid lg:grid-cols-2 gap-10">
                @foreach ($work as $group => $items)
                    <div>
                        <h3 class="text-sm font-bold uppercase tracking-widest text-gray-600 mb-4">{{ $group }}</h3>
                        <div class="space-y-4">
                            @foreach ($items as $item)
                                <a href="{{ $item['link'] }}" class="group flex items-start gap-4 bg-white border border-gray-200 rounded-xl p-5 hover:border-teal hover:shadow-md transition-all">
                                    <div class="w-11 h-11 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                                        <i class='bx {{ $item['icon'] }} text-2xl text-teal-ink'></i>
                                    </div>
                                    <div class="flex-1">
                                        <p class="font-bold text-gray-900 mb-1">{{ $item['title'] }}</p>
                                        <p class="text-gray-600 text-sm leading-relaxed mb-2">{{ $item['text'] }}</p>
                                        <span class="inline-flex items-center gap-1 text-sm font-semibold text-navy group-hover:text-teal-ink">
                                            {{ $item['label'] }}
                                            <i class='bx bx-right-arrow-alt text-lg'></i>
                                        </span>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-teal">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy mb-1">Tell Us What You Are Building</h2>
                <p class="text-navy">Share your project and we will come back with questions or a proposal.</p>
            </div>
            <div class="shrink-0">
                <a href="/quote" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-navy text-white rounded-lg font-semibold hover:bg-navy-light transition-colors">
                    Get a Quote
                    <i class='bx bx-right-arrow-alt text-xl'></i>
                </a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    document.getElementById('mobile-menu')?.classList.add('hidden');
                }
            });
        });
@endsection
