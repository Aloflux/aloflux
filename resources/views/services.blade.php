@extends('layouts.app')

@section('title', 'Our Services | Custom Software, Automation, AI and Digital Commerce | Aloflux')
@section('meta_description', 'Aloflux services: custom software development, enterprise automation, AI powered SaaS solutions, digital commerce infrastructure, IT managed services, systems integration, and marketing for UK and European businesses.')
@section('og_title', 'Aloflux Services | Custom Software, Automation and AI Solutions')
@section('og_description', 'From custom builds to fully managed services. Aloflux builds custom software, automation, AI solutions, and digital commerce infrastructure for UK and European businesses.')

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
    <section class="py-16 md:py-20 px-4 sm:px-6 lg:px-8 bg-navy">
        <div class="max-w-7xl mx-auto text-center">
            <div class="inline-flex items-center gap-2 text-teal text-base font-bold mb-4 tracking-wide uppercase">
                <i class='bx bx-check-circle text-xl'></i>
                <span>Our Services</span>
            </div>
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6">
                What We Offer
            </h1>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                From custom builds to fully managed services, we deliver technology that helps UK and European businesses run better.
            </p>
        </div>
    </section>

    <!-- Major Services -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="mb-12">
                <div class="inline-flex items-center gap-2 text-teal-ink text-sm font-semibold mb-4">
                    <i class='bx bx-star text-lg'></i>
                    <span>Major Services</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Core Offerings</h2>
                <p class="text-lg text-gray-600 max-w-2xl">
                    The services that define what Aloflux does best, delivered with engineering depth and clear communication.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Enterprise Automation -->
                <div class="group relative bg-navy rounded-xl p-8 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-1 flex flex-col">
                    <div class="w-16 h-16 bg-teal/20 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-cog text-4xl text-teal'></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Enterprise Automation</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed flex-1">
                        Workflow automation, approval chains, document processing, and operational tooling for SMEs and growing organisations. We remove manual work, cut errors, and give you clear visibility of how your operations perform.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-teal/20 text-teal text-xs font-semibold rounded-full">Automation</span>
                        <span class="px-3 py-1 bg-white/10 text-gray-300 text-xs font-semibold rounded-full">Workflows</span>
                        <span class="px-3 py-1 bg-white/10 text-gray-300 text-xs font-semibold rounded-full">Reporting</span>
                    </div>
                    <a href="/services/enterprise-automation" class="inline-flex items-center gap-2 px-6 py-3 bg-teal text-navy rounded-lg font-semibold hover:bg-teal-dark transition-colors text-sm">
                        Learn More
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Digital Commerce Infrastructure -->
                <div class="group relative bg-navy rounded-xl p-8 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-1 flex flex-col">
                    <div class="w-16 h-16 bg-teal/20 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-store text-4xl text-teal'></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-3">Digital Commerce Infrastructure</h3>
                    <p class="text-gray-400 mb-6 leading-relaxed flex-1">
                        Ecommerce platforms, POS and inventory management, and payment gateway integrations with Pesapal, DusuPay, SeerBit, Tazapay, and Dodo Payments, including tooling for cross border transactions.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-teal/20 text-teal text-xs font-semibold rounded-full">Ecommerce</span>
                        <span class="px-3 py-1 bg-white/10 text-gray-300 text-xs font-semibold rounded-full">Payments</span>
                        <span class="px-3 py-1 bg-white/10 text-gray-300 text-xs font-semibold rounded-full">POS</span>
                    </div>
                    <a href="/services/digital-commerce" class="inline-flex items-center gap-2 px-6 py-3 bg-teal text-navy rounded-lg font-semibold hover:bg-teal-dark transition-colors text-sm">
                        Learn More
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>

                <!-- Software Development -->
                <div class="group relative bg-teal rounded-xl p-8 shadow-xl hover:shadow-2xl transition-all hover:-translate-y-1 flex flex-col">
                    <div class="w-16 h-16 bg-white/45 rounded-xl flex items-center justify-center mb-6">
                        <i class='bx bx-code-alt text-4xl text-navy'></i>
                    </div>
                    <h3 class="text-2xl font-bold text-navy mb-3">Software Development</h3>
                    <p class="text-navy/80 mb-6 leading-relaxed flex-1">
                        Custom software built around how your business works. From a first MVP to large enterprise systems, our engineers design, build, and deploy scalable web, mobile, and desktop applications that are easy to maintain and hand over.
                    </p>
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-white/45 text-navy text-xs font-semibold rounded-full">Custom Build</span>
                        <span class="px-3 py-1 bg-white/45 text-navy text-xs font-semibold rounded-full">Web and Mobile</span>
                        <span class="px-3 py-1 bg-white/45 text-navy text-xs font-semibold rounded-full">Enterprise</span>
                    </div>
                    <a href="/#contact" class="inline-flex items-center gap-2 px-6 py-3 bg-navy text-white rounded-lg font-semibold hover:bg-white hover:text-navy transition-colors text-sm">
                        Get a Quote
                        <i class='bx bx-right-arrow-alt text-lg'></i>
                    </a>
                </div>
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
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">More Ways We Can Help</h2>
                <p class="text-lg text-gray-600 max-w-2xl">
                    Complementary technology and marketing services to support every stage of your business growth.
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
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

                <!-- Marketing -->
                <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-teal hover:shadow-lg transition-all flex items-start gap-5">
                    <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                        <i class='bx bx-line-chart text-3xl text-teal-ink'></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Marketing</h3>
                        <p class="text-gray-600 mb-3 text-sm leading-relaxed">
                            Strategic digital marketing to grow your brand. Data driven planning combined with creative storytelling, from brand strategy and market research to campaign execution.
                        </p>
                        <a href="/services/marketing" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                            Learn more <i class='bx bx-right-arrow-alt text-lg'></i>
                        </a>
                    </div>
                </div>

                <!-- Content Marketing -->
                <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-teal hover:shadow-lg transition-all flex items-start gap-5">
                    <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                        <i class='bx bx-edit text-3xl text-teal-ink'></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Content Marketing</h3>
                        <p class="text-gray-600 mb-3 text-sm leading-relaxed">
                            Compelling content strategies that engage your audience, build trust, and drive results. Blog posts, articles, video content, and infographics that build brand authority.
                        </p>
                        <a href="/services/content-marketing" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                            Learn more <i class='bx bx-right-arrow-alt text-lg'></i>
                        </a>
                    </div>
                </div>

                <!-- Social Media Marketing -->
                <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-teal hover:shadow-lg transition-all flex items-start gap-5">
                    <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                        <i class='bx bx-share-alt text-3xl text-teal-ink'></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Social Media Marketing</h3>
                        <p class="text-gray-600 mb-3 text-sm leading-relaxed">
                            Build and grow your social media presence with targeted campaigns and community management. Content calendars, paid campaigns, and engagement across all major platforms.
                        </p>
                        <a href="/services/social-media-marketing" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
                            Learn more <i class='bx bx-right-arrow-alt text-lg'></i>
                        </a>
                    </div>
                </div>

                <!-- Search Engine Optimisation -->
                <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-teal hover:shadow-lg transition-all flex items-start gap-5">
                    <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center shrink-0">
                        <i class='bx bx-search-alt text-3xl text-teal-ink'></i>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Search Engine Optimisation</h3>
                        <p class="text-gray-600 mb-3 text-sm leading-relaxed">
                            Improve your search rankings and drive organic traffic with data driven SEO. Keyword research, technical audits, on page optimisation, and link building.
                        </p>
                        <a href="/services/search-engine-optimization" class="text-teal-ink font-semibold text-sm inline-flex items-center gap-1 hover:gap-2 transition-all">
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

    <!-- CTA Section -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-teal">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-navy mb-6">
                Not Sure Which Service You Need?
            </h2>
            <p class="text-lg text-navy/80 mb-8">
                Get in touch and we'll help you find the right solution for your business.
            </p>
            <a href="/#contact" class="inline-flex items-center gap-2 px-8 py-3.5 bg-navy text-white rounded-lg font-semibold hover:bg-white hover:text-navy transition-colors">
                Get A Free Quote
                <i class='bx bx-right-arrow-alt text-xl'></i>
            </a>
        </div>
    </section>
@endsection
