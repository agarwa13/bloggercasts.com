@component('mail::message')
# Introduction

You have received a request to eliminate spam from a Google Analytics Property. <br>
The user has already been charged. <br>

<br>

Email: {{$email}} <br>
Google Analytics Property: {{$gaProperty}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
