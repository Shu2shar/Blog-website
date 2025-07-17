{{-- Success Alert --}}
@if(session('success'))
<div id="alert-success" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
  ✅ <span class="ml-3 text-sm font-medium">{{ session('success') }}</span>
</div>
@endif

{{-- Error Alert --}}
@if(session('error'))
<div id="alert-error" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50" role="alert">
  ❌ <span class="ml-3 text-sm font-medium">{{ session('error') }}</span>
</div>
@endif

{{-- Info Alert --}}
@if(session('info'))
<div id="alert-info" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50" role="alert">
  ℹ️ <span class="ml-3 text-sm font-medium">{{ session('info') }}</span>
</div>
@endif

{{-- Warning Alert --}}
@if(session('warning'))
<div id="alert-warning" class="flex items-center p-4 mb-4 text-yellow-800 rounded-lg bg-yellow-50" role="alert">
  ⚠️ <span class="ml-3 text-sm font-medium">{{ session('warning') }}</span>
</div>
@endif
