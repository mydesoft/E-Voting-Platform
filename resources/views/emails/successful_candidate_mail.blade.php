
@component('mail::message')

Hello {{$candidate->name}},

I am glad to inform you that your application for the post of {{strtoupper($candidate->position)}} 
was successful.

Please see below the date, time and venue for your final interview with the electoral committee.

<hr>

	@if($candidate->position  === 'president')

		Date: 6th of March, 2021.

		Venue: Administrative block.

		Time: 10am.

		Please bring with you this mail notification.
	@endif	


	@if($candidate->position === 'vice-president')

		Date: 6th of March, 2021.

		Venue: Administrative block.

		Time: 12pm

		Please bring with you this mail notification.

	@endif


	@if($candidate->position === 'general-secretary')

		Date: 6th of March, 2021.

		Venue: Administrative block.

		Time: 2pm

		Please bring with you this mail notification.

	@endif


	@if($candidate->position === 'treasurer')

		Date: 7th of March, 2021.

		Venue: Administrative block.

		Time: 10am

		Please bring with you this mail notification.

	@endif


	@if($candidate->position === 'DO-Sports')

		Date: 7th of March, 2021.

		Venue: Administrative block.

		Time: 11am

		Please bring with you this mail notification.

	@endif


	@if($candidate->position === 'DO-Socials')

		Date: 7th of March, 2021.

		Venue: Administrative block.

		Time: 12pm

		Please bring with you this mail notification.

	@endif


	@if($candidate->position === 'welfare')

		Date: 7th of March, 2021.

		Venue: Administrative block.

		Time: 1pm

		Please bring with you this mail notification.

	@endif

Accept my Congratulations!<br>
{{ config('app.name') }}
@endcomponent
