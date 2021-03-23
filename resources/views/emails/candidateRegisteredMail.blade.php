@component('mail::panel')

Hello {{$candidate->name}}

You have successfully registered for the post of <h4>{{$candidate->position}}</h4>.

Please note that your application will be  thorougly screened. If successful, you will get a notification mail from us for the next stage.

Thank you for your time!

Best Regards.

<hr>

Thanks,<br>
{{ config('app.name') }}
@endcomponent