@extends('layouts.app')

@section('title', 'Our Services | Custom Software, Automation, AI and Digital Commerce | Aloflux')
@section('meta_description', 'Aloflux services: custom software development, enterprise automation, AI powered SaaS solutions, digital commerce infrastructure, IT managed services, systems integration, and digital marketing.')
@section('og_title', 'Aloflux Services | Custom Software, Automation and AI Solutions')
@section('og_description', 'From custom builds to fully managed services. See where Aloflux can help your business.')

@section('structured_data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "CollectionPage",
    "name": "Aloflux Services",
    "description": "Custom software development, enterprise automation, AI powered SaaS solutions, digital commerce infrastructure, IT managed services, and marketing for UK and European businesses.",
    "url": "{{ url('/services') }}",
    "publisher": {
        "@@type": "Organization",
        "name": "Aloflux Ltd",
        "url": "{{ url('/') }}"
    }
}
</script>
@endsection

@php $activePage = 'services'; @endphp

@section('content')
    <!-- Page Header -->
    <section class="py-14 md:py-16 px-4 sm:px-6 lg:px-8 bg-navy">
        <div class="max-w-7xl mx-auto">
            <div class="inline-flex items-center gap-2 text-teal text-sm font-bold mb-4 tracking-wide uppercase">
                <i class='bx bx-check-circle text-lg'></i>
                <span>Our Services</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-5 max-w-3xl leading-tight">
                What We Offer
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl">
                From custom builds to fully managed services, we deliver technology that helps UK and European businesses run better.
            </p>
        </div>
    </section>

    <!-- Core Offerings -->
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="max-w-2xl mb-10">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Our Core Offerings</h2>
                <p class="text-lg text-gray-600">
                    The services that define what Aloflux does best, delivered with engineering depth and clear communication.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach (\App\Support\ServiceCatalog::core() as $slug => $coreService)
                    <x-core-service-card :slug="$slug" :service="$coreService" />
                @endforeach
            </div>
        </div>
    </section>

    <!-- Other Services -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <div class="inline-flex items-center gap-2 text-teal-ink text-sm font-semibold mb-4">
                    <i class='bx bx-grid-alt text-lg'></i>
                    <span>Other Services</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Specialist Services</h2>
                <p class="text-lg text-gray-600 max-w-2xl">
                    Focused support that works alongside a core project or on its own.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- AI Solutions -->
                <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-teal hover:shadow-lg transition-all flex items-start gap-5">
                    <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                        <i class='bx bx-brain text-3xl text-teal-ink'></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">AI Solutions</h3>
                        <p class="text-gray-600 mb-3 text-sm leading-relaxed">
                            AI powered solutions designed to help businesses streamline operations and boost productivity. Custom AI models, predictive analytics, and intelligent process automation.
                        </p>
                        <a href="/services/ai-solutions" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                            Learn more <i class='bx bx-right-arrow-alt text-lg'></i>
                        </a>
                    </div>
                </div>

                <!-- Offline First Development -->
                <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-teal hover:shadow-lg transition-all flex items-start gap-5">
                    <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                        <i class='bx bx-shield text-3xl text-teal-ink'></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Offline First Development</h3>
                        <p class="text-gray-600 mb-3 text-sm leading-relaxed">
                            Software for teams that cannot rely on a constant connection. Applications sync automatically when connectivity returns, so your operations never stop.
                        </p>
                        <a href="/services/offline-first-development" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                            Learn more <i class='bx bx-right-arrow-alt text-lg'></i>
                        </a>
                    </div>
                </div>

                <!-- Systems Integration -->
                <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-teal hover:shadow-lg transition-all flex items-start gap-5">
                    <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                        <i class='bx bx-transfer text-3xl text-teal-ink'></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Systems Integration</h3>
                        <p class="text-gray-600 mb-3 text-sm leading-relaxed">
                            Seamless integration of disparate systems to create unified, efficient workflows. We connect legacy systems with modern applications and build custom middleware solutions.
                        </p>
                        <a href="/services/systems-integration" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                            Learn more <i class='bx bx-right-arrow-alt text-lg'></i>
                        </a>
                    </div>
                </div>

                <!-- Digital Marketing -->
                <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-teal hover:shadow-lg transition-all flex items-start gap-5">
                    <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                        <i class='bx bx-line-chart text-3xl text-teal-ink'></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Digital Marketing</h3>
                        <p class="text-gray-600 mb-3 text-sm leading-relaxed">
                            Content, social media, and search engine optimisation planned together, so every channel works towards the same leads and revenue goals.
                        </p>
                        <a href="/services/digital-marketing" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                            Learn more <i class='bx bx-right-arrow-alt text-lg'></i>
                        </a>
                    </div>
                </div>

                <!-- IT Managed Services -->
                <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-teal hover:shadow-lg transition-all flex items-start gap-5">
                    <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                        <i class='bx bx-server text-3xl text-teal-ink'></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">IT Managed Services</h3>
                        <p class="text-gray-600 mb-3 text-sm leading-relaxed">
                            Web hosting, email infrastructure management, domain administration, and IT support for organisations that need reliable managed services without building an internal IT team.
                        </p>
                        <a href="/services/it-managed-services" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                            Learn more <i class='bx bx-right-arrow-alt text-lg'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-12 px-4 sm:px-6 lg:px-8 bg-teal">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-navy mb-1">Not Sure Which Service You Need?</h2>
                <p class="text-navy">Tell us the problem you are solving and we will point you to the right starting place.</p>
            </div>
            <a href="/quote" class="shrink-0 inline-flex items-center gap-2 px-8 py-3.5 bg-navy text-white rounded-lg font-semibold hover:bg-navy-light transition-colors">
                Get a Quote
                <i class='bx bx-right-arrow-alt text-xl'></i>
            </a>
        </div>
    </section>
@endsection
