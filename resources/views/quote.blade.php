@extends('layouts.app')

@section('title', 'Request a Quote | Aloflux')
@section('meta_description', 'Request a quote from Aloflux. Tell us about your software, automation, or commerce project and we will reply with questions or a Discovery Sprint proposal.')
@section('og_title', 'Request a Quote from Aloflux')
@section('og_description', 'Tell us about your project and we will come back with questions or a fixed price proposal.')

@php $activePage = 'quote'; @endphp

@section('content')
    <!-- Page Header -->
    <section class="py-14 md:py-16 px-4 sm:px-6 lg:px-8 bg-navy">
        <div class="max-w-7xl mx-auto">
            <div class="inline-flex items-center gap-2 text-teal text-sm font-bold mb-4 tracking-wide uppercase">
                <i class='bx bx-file text-lg'></i>
                <span>Request a Quote</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-5 max-w-3xl leading-tight">
                Tell Us About Your Project
            </h1>
            <p class="text-lg text-gray-300 max-w-2xl">
                Share what you need and we will come back with questions or a proposal for a Discovery Sprint, the paid scoping stage that gives you a fixed price for the build.
            </p>
        </div>
    </section>

    <section class="py-14 md:py-16 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-7xl mx-auto grid lg:grid-cols-3 gap-10 items-start">
            <!-- Quote Form -->
            <div id="quote-form" class="lg:col-span-2 scroll-mt-28 rounded-xl border border-gray-200 bg-gray-50 p-6 md:p-10">
                <form action="{{ route('quote.send') }}" method="POST" class="space-y-6" data-submit-once>
                    @csrf
                    @include('partials.form-protection')
                    @include('partials.form-alerts')

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="form-label">Full Name <span class="text-teal-ink" aria-hidden="true">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Jane Smith" class="form-field">
                        </div>
                        <div>
                            <label for="email" class="form-label">Email Address <span class="text-teal-ink" aria-hidden="true">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="jane@company.com" class="form-field">
                        </div>
                    </div>

                    <div>
                        <label for="company" class="form-label">Company or Organisation</label>
                        <input type="text" id="company" name="company" value="{{ old('company') }}" autocomplete="organization" placeholder="Your company name" class="form-field">
                    </div>

                    <div class="border-t border-gray-200 pt-6">
                        <p class="text-sm font-bold text-gray-600 uppercase tracking-widest mb-5">Project Details</p>

                        <div class="grid md:grid-cols-3 gap-6">
                            <div>
                                <label for="project_type" class="form-label">Project Type <span class="text-teal-ink" aria-hidden="true">*</span></label>
                                <select id="project_type" name="project_type" required class="form-field">
                                    @php $chosenType = old('project_type', $selectedType); @endphp
                                    <option value="" disabled @selected(! $chosenType)>Select a service</option>
                                    @foreach (\App\Support\QuoteForm::projectTypes() as $type)
                                        <option value="{{ $type }}" @selected($chosenType === $type)>{{ $type }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="proposed_budget" class="form-label">Budget <span class="text-teal-ink" aria-hidden="true">*</span></label>
                                <select id="proposed_budget" name="proposed_budget" required class="form-field">
                                    <option value="" disabled @selected(! old('proposed_budget'))>Select a range</option>
                                    @foreach (\App\Support\QuoteForm::BUDGETS as $budget)
                                        <option value="{{ $budget }}" @selected(old('proposed_budget') === $budget)>{{ $budget }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="timeline" class="form-label">Timeline</label>
                                <select id="timeline" name="timeline" class="form-field">
                                    <option value="" @selected(! old('timeline'))>Not sure yet</option>
                                    @foreach (\App\Support\QuoteForm::TIMELINES as $timeline)
                                        <option value="{{ $timeline }}" @selected(old('timeline') === $timeline)>{{ $timeline }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div>
                        <label for="project_description" class="form-label">Project Description <span class="text-teal-ink" aria-hidden="true">*</span></label>
                        <textarea id="project_description" name="project_description" rows="7" required
                            placeholder="What are you looking to build or solve? Include any existing systems, deadlines, or constraints."
                            class="form-field resize-y">{{ old('project_description') }}</textarea>
                    </div>

                    <button type="submit" class="w-full px-8 py-4 bg-navy text-white rounded-lg font-semibold hover:bg-navy-light transition-colors">
                        Request a Quote
                    </button>
                </form>
            </div>

            <!-- Next Steps -->
            <aside class="space-y-6">
                <div class="rounded-xl border border-gray-200 p-6">
                    <h2 class="text-lg font-bold text-gray-900 mb-5">What Happens Next</h2>
                    <ol class="space-y-5">
                        @foreach ([
                            ['We read your brief', 'Someone from our team reviews what you have shared.'],
                            ['We follow up', 'We reply with any questions, or suggest a short call to understand your needs.'],
                            ['You get a proposal', 'We send a Discovery Sprint proposal with a fixed price and timeline.'],
                        ] as $i => [$title, $text])
                            <li class="flex items-start gap-4">
                                <span class="w-8 h-8 rounded-full bg-navy text-teal text-sm font-bold flex items-center justify-center shrink-0">{{ $i + 1 }}</span>
                                <div>
                                    <p class="font-semibold text-gray-900">{{ $title }}</p>
                                    <p class="text-sm text-gray-600 leading-relaxed">{{ $text }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>

                <div class="rounded-xl bg-gray-50 border border-gray-200 p-6">
                    <h2 class="text-lg font-bold text-gray-900 mb-2">Prefer Email?</h2>
                    <p class="text-sm text-gray-600 leading-relaxed mb-3">You can also write to us directly with your brief or any questions.</p>
                    <a href="mailto:info@aloflux.com" class="inline-flex items-center gap-2 font-semibold text-navy hover:text-teal-ink">
                        <i class='bx bx-envelope text-lg'></i>info@aloflux.com
                    </a>
                </div>
            </aside>
        </div>
    </section>
@endsection
