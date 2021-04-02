@component('mail::message')
# Bienvenue
Ceci est un mail test


@component('mail::button', ['url' => ''])
Connecter-vous
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
