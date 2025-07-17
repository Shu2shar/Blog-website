@if (Session::has('success'))
    <div class="bg-green-100 border-green-600 text-green-800 p-4 rounded-sm mb-3 shadow-sm">
        {{ Session::get('success') }}
    </div>
@endif

@if (Session::has('error'))
    <div class="bg-red-100 border-red-600 text-red-800 p-4 rounded-sm mb-3 shadow-sm">
        {{ Session::get('error') }}
    </div>
@endif
