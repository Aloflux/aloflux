<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Core SEO --}}
    <title>@yield('title', 'Aloflux | Custom Software, Automation and AI Solutions')</title>
    <meta name="description" content="@yield('meta_description', 'Aloflux builds custom software, enterprise automation, and AI powered solutions for UK and European businesses. High quality engineering at competitive rates.')">
    <meta name="keywords" content="@yield('meta_keywords', 'custom software development, enterprise automation, AI solutions, offshore software development, UK technology company, Laravel development, digital commerce infrastructure, IT managed services')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Aloflux Ltd">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:site_name" content="Aloflux">
    <meta property="og:title" content="@yield('og_title', 'Aloflux | Custom Software, Automation and AI Solutions')">
    <meta property="og:description" content="@yield('og_description', 'Aloflux builds custom software, enterprise automation, and AI powered solutions for UK and European businesses. High quality engineering at competitive rates.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="@yield('og_image', url('/images/brand/og-image.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="en_GB">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Aloflux | Custom Software, Automation and AI Solutions')">
    <meta name="twitter:description" content="@yield('og_description', 'Aloflux builds custom software, enterprise automation, and AI powered solutions for UK and European businesses. High quality engineering at competitive rates.')">
    <meta name="twitter:image" content="@yield('og_image', url('/images/brand/og-image.png'))">

    {{-- Organization JSON-LD --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@@type": "Organization",
        "name": "Aloflux Ltd",
        "alternateName": "Aloflux",
        "url": "{{ url('/') }}",
        "logo": "{{ url('/images/brand/icon-512.png') }}",
        "description": "Aloflux Ltd is a UK private limited company building custom software, enterprise automation, and AI powered solutions for UK and European businesses.",
        "address": [
            {
                "@@type": "PostalAddress",
                "streetAddress": "128 City Road",
                "addressLocality": "London",
                "postalCode": "EC1V 2NX",
                "addressCountry": "GB"
            },
            {
                "@@type": "PostalAddress",
                "addressLocality": "Kampala",
                "addressCountry": "UG"
            }
        ],
        "contactPoint": {
            "@@type": "ContactPoint",
            "email": "info@aloflux.com",
            "contactType": "customer service",
            "availableLanguage": "English"
        },
        "knowsAbout": [
            "Custom Software Development",
            "Enterprise Automation",
            "AI Powered SaaS Solutions",
            "Digital Commerce Infrastructure",
            "IT Managed Services",
            "Offline First Development",
            "Systems Integration"
        ],
        "areaServed": ["GB", "EU"]
    }
    </script>

    {{-- Page-specific structured data --}}
    @yield('structured_data')

    {{-- Brand icons --}}
    <link rel="icon" href="/favicon.ico" sizes="48x48">
    <link rel="icon" type="image/png" href="/images/brand/icon-512.png" sizes="512x512">
    <link rel="apple-touch-icon" href="/images/brand/apple-touch-icon.png">
    <meta name="theme-color" content="#05213E">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-gray-900 antialiased">
    <!-- Navigation -->
    <nav class="sticky top-0 bg-white shadow-sm z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="/" class="flex items-center gap-3" aria-label="Aloflux home">
                    <img src="/images/brand/logo.png" alt="" width="31" height="44" class="h-11 w-auto">
                    <span class="text-2xl font-bold text-navy tracking-tight">Aloflux</span>
                </a>
                <div class="hidden lg:flex items-center gap-8">
                    @php $activePage = $activePage ?? ''; @endphp
                    <a href="/" class="{{ $activePage === 'home' ? 'text-teal-ink' : 'text-gray-700 hover:text-navy' }} font-medium transition-colors">Home</a>
                    <a href="/about" class="{{ $activePage === 'about' ? 'text-teal-ink' : 'text-gray-700 hover:text-navy' }} font-medium transition-colors">About Us</a>
                    <a href="/services" class="{{ $activePage === 'services' ? 'text-teal-ink' : 'text-gray-700 hover:text-navy' }} font-medium transition-colors">Services</a>
                    <a href="/marketplace" class="{{ $activePage === 'marketplace' ? 'text-teal-ink' : 'text-gray-700 hover:text-navy' }} font-medium transition-colors">Marketplace</a>
                    <a href="/#projects" class="text-gray-700 hover:text-navy font-medium transition-colors">Projects</a>
                    <a href="/#contact" class="text-gray-700 hover:text-navy font-medium transition-colors">Contact</a>
                    <a href="/#contact" class="px-6 py-2.5 bg-teal text-navy rounded-full font-semibold hover:bg-teal-dark transition-colors">
                        Get A Quote
                    </a>
                </div>
                <button id="mobile-menu-button" class="lg:hidden text-gray-700 p-2">
                    <i class='bx bx-menu text-2xl'></i>
                </button>
            </div>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t">
            <div class="px-4 py-4 space-y-2">
                <a href="/" class="block px-4 py-2 {{ $activePage === 'home' ? 'text-teal-ink bg-teal/10 font-semibold' : 'text-gray-700 hover:bg-gray-50' }} rounded-lg">Home</a>
                <a href="/about" class="block px-4 py-2 {{ $activePage === 'about' ? 'text-teal-ink bg-teal/10 font-semibold' : 'text-gray-700 hover:bg-gray-50' }} rounded-lg">About Us</a>
                <a href="/services" class="block px-4 py-2 {{ $activePage === 'services' ? 'text-teal-ink bg-teal/10 font-semibold' : 'text-gray-700 hover:bg-gray-50' }} rounded-lg">Services</a>
                <a href="/marketplace" class="block px-4 py-2 {{ $activePage === 'marketplace' ? 'text-teal-ink bg-teal/10 font-semibold' : 'text-gray-700 hover:bg-gray-50' }} rounded-lg">Marketplace</a>
                <a href="/#projects" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg">Projects</a>
                <a href="/#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-50 rounded-lg">Contact</a>
                <a href="/#contact" class="block px-4 py-2 bg-teal text-navy rounded-lg font-semibold text-center">Get A Quote</a>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-navy text-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-4 gap-10 mb-8">
                <!-- Brand -->
                <div class="md:col-span-1">
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/images/brand/logo-reverse.png" alt="" width="31" height="44" class="h-11 w-auto">
                        <span class="text-2xl font-bold tracking-tight">Aloflux</span>
                    </div>
                    <p class="text-gray-400 leading-relaxed text-sm">
                        We build custom software, enterprise automation, AI powered solutions, and digital commerce infrastructure for businesses in the UK and Europe. Aloflux Ltd is a UK private limited company.
                    </p>
                </div>

                <!-- Major Services -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-widest text-teal mb-4">Major Services</h4>
                    <ul class="space-y-2.5 text-gray-300 text-sm">
                        <li>
                            <a href="/#contact" class="hover:text-teal transition-colors flex items-center gap-2">
                                <i class='bx bx-code-alt text-base'></i>
                                Custom Software Development
                            </a>
                        </li>
                        <li>
                            <a href="/services/enterprise-automation" class="hover:text-teal transition-colors flex items-center gap-2">
                                <i class='bx bx-cog text-base'></i>
                                Enterprise Automation
                            </a>
                        </li>
                        <li>
                            <a href="/services/digital-commerce" class="hover:text-teal transition-colors flex items-center gap-2">
                                <i class='bx bx-store text-base'></i>
                                Digital Commerce
                            </a>
                        </li>
                        <li>
                            <a href="/marketplace" class="hover:text-teal transition-colors flex items-center gap-2">
                                <i class='bx bx-package text-base'></i>
                                Products and SaaS
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Other Services -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-widest text-gray-500 mb-4">Other Services</h4>
                    <ul class="space-y-2.5 text-gray-400 text-sm">
                        <li><a href="/services/ai-solutions" class="hover:text-teal transition-colors">AI Solutions</a></li>
                        <li><a href="/services/offline-first-development" class="hover:text-teal transition-colors">Offline First Development</a></li>
                        <li><a href="/services/systems-integration" class="hover:text-teal transition-colors">Systems Integration</a></li>
                        <li><a href="/services/it-managed-services" class="hover:text-teal transition-colors">IT Managed Services</a></li>
                        <li><a href="/services/marketing" class="hover:text-teal transition-colors">Marketing</a></li>
                        <li><a href="/services/search-engine-optimization" class="hover:text-teal transition-colors">SEO</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-sm font-bold uppercase tracking-widest text-gray-500 mb-4">Contact</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-center gap-2">
                            <i class='bx bx-envelope text-lg text-teal'></i>
                            info@aloflux.com
                        </li>
                        <li class="flex items-start gap-2">
                            <i class='bx bx-map text-lg text-teal'></i>
                            <span>128 City Road, London, United Kingdom, EC1V 2NX</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class='bx bx-map text-lg text-teal'></i>
                            <span>Kampala, Uganda</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-700 pt-8 text-center text-gray-500 text-sm">
                <p>&copy; {{ date('Y') }} Aloflux Ltd. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        @hasSection('scripts')
            @yield('scripts')
        @endif
    </script>

    <script defer src="https://analytics.aloflux.com/tracker.js" data-site="aloflux.com"></script>
</body>

</html>
