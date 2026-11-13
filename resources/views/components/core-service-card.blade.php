@props(['slug', 'service'])

{{-- Core offering card, shared by the home page and the services page. The whole card is the link. --}}
<a href="/services/{{ $slug }}" class="group flex flex-col bg-white rounded-xl border border-gray-200 p-7 hover:border-teal hover:shadow-lg transition-all">
    <div class="flex items-center gap-4 mb-4">
        <div class="w-12 h-12 bg-navy rounded-lg flex items-center justify-center shrink-0">
            <i class='bx {{ $service['icon'] }} text-2xl text-teal'></i>
        </div>
        <h3 class="text-lg font-bold text-gray-900 leading-snug">{{ $service['title'] }}</h3>
    </div>

    <p class="text-gray-600 leading-relaxed mb-5">{{ $service['summary'] }}</p>

    <ul class="mt-auto space-y-2 border-t border-gray-100 pt-5 mb-6">
        @foreach ($service['highlights'] as $highlight)
            <li class="flex items-start gap-2 text-sm text-gray-700">
                <i class='bx bx-check text-lg text-teal-ink leading-5 shrink-0'></i>
                <span>{{ $highlight }}</span>
            </li>
        @endforeach
    </ul>

    <span class="inline-flex items-center gap-1 text-sm font-semibold text-navy group-hover:text-teal-ink group-hover:gap-2 transition-all">
        Explore this service
        <i class='bx bx-right-arrow-alt text-lg'></i>
    </span>
</a>
