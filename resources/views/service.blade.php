@extends('layouts.app')

@section('title', $service['title'] . ' | Aloflux')
@section('meta_description', $service['meta_description'])
@section('og_title', $service['title'] . ' | Aloflux')
@section('og_description', $service['subtitle'])

@section('structured_data')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "{{ $service['title'] }}",
    "description": "{{ $service['description'] }}",
    "provider": {
        "@@type": "Organization",
        "name": "Aloflux Ltd",
        "url": "{{ url('/') }}"
    },
    "areaServed": ["GB", "EU"],
    "url": "{{ url()->current() }}"
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
                {{ $service['title'] }}
            </h1>
            <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                {{ $service['subtitle'] }}
            </p>
        </div>
    </section>

    <!-- Service Detail -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="w-20 h-20 bg-teal/15 rounded-lg flex items-center justify-center mb-8">
                        <i class='bx {{ $service['icon'] }} text-5xl text-teal-ink'></i>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        {{ $service['heading'] }}
                    </h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {{ $service['description'] }}
                    </p>
                    <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                        {{ $service['description_extended'] }}
                    </p>
                    <a href="/#contact" class="inline-flex items-center gap-2 px-8 py-3.5 bg-teal text-navy rounded-lg font-semibold hover:bg-teal-dark transition-colors">
                        Get Started
                        <i class='bx bx-right-arrow-alt text-xl'></i>
                    </a>
                </div>
                <div>
                    <img src="{{ $service['image'] }}" alt="{{ $service['title'] }}" class="rounded-lg shadow-lg w-full aspect-[4/3] object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Key Features</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    What makes our {{ $service['title'] }} service stand out.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach ($service['features'] as $feature)
                    <div class="bg-white rounded-lg p-8 shadow-lg">
                        <div class="w-14 h-14 bg-teal/15 rounded-lg flex items-center justify-center mb-6">
                            <i class='bx {{ $feature['icon'] }} text-3xl text-teal-ink'></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 mb-3">{{ $feature['title'] }}</h3>
                        <p class="text-gray-600 leading-relaxed">{{ $feature['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 md:py-24 px-4 sm:px-6 lg:px-8 bg-teal">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-navy mb-6">
                Ready to Get Started?
            </h2>
            <p class="text-lg text-navy/80 mb-8">
                Let's discuss how our {{ $service['title'] }} service can help transform your business.
            </p>
            <a href="/#contact" class="inline-flex items-center gap-2 px-8 py-3.5 bg-navy text-white rounded-lg font-semibold hover:bg-white hover:text-navy transition-colors">
                Contact Us Today
                <i class='bx bx-right-arrow-alt text-xl'></i>
            </a>
        </div>
    </section>
@endsection
