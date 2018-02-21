@component('mail::message')
<img src="{{asset('img/logo.png')}}" alt="Fodds Capital"  align="center">

# Welcome to {{ config('app.name') }} {{ $user->profile->first_name }}!

Please click on the button below to activate your account.

@component('mail::button', ['url' => url('activation', $user->verifyUser->token)])
Activate
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent
