<x-mail::message>
# Welcome, {{ $user->name }}!

Thank you for registering on our platform.

<x-mail::button :url="url('/dashboard')">
Visit Website
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>