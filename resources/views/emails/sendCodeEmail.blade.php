@component('mail::message')

Hello {{$matric_number->name}},

You have requested for a one time forgot voting code.

Below is your Voting Code. Please note you can only request for this once. If in incase you misplace or forgot your Voting Code again, please contact your institution IT Team.

Best Regards.

<hr>

@component('mail::panel')

<h5>Voting Code : {{$matric_number->voting_code}}</h5>
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
