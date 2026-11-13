@if (session('success'))
    <div class="bg-green-50 text-green-800 px-4 py-3 rounded-lg text-sm font-medium animate-fade-in" role="status">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="bg-red-50 text-red-800 px-4 py-3 rounded-lg text-sm font-medium animate-fade-in" role="alert">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="bg-red-50 text-red-800 px-4 py-3 rounded-lg text-sm font-medium animate-fade-in" role="alert">
        Please fill in all required fields correctly.
    </div>
@endif
