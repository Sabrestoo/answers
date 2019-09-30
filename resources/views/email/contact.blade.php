@component('mail::message')
# New Contact Message

Hello!
@component('mail::panel')
{{ $message }}
@endcomponent

@component('mail::button', ['url' => route('contact')])
Reply to email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
