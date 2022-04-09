@component('mail::message')
# Introduction

Bienvenue sur l'application

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
