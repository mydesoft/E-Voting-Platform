@component('mail::message')

Hello {{$user->name}},

Thank You for registering for the voting exercise.

Below are your Voting details including your voting code needed to log in during the voting day.

We however, advise to keep this details safe.

Best Regards.

<hr>

@component('mail::panel')
<h4>Your Login Credentials:</h4>

<h5>Matric Number: {{$user->matric_number}}</h5>

<h5>Voting Code : {{$user->voting_code}}</h5>
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
