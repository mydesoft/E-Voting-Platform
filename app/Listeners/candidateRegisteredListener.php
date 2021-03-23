<?php

namespace App\Listeners;

use App\Events\candidateRegisteredEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\candidateRegisteredMail;


class candidateRegisteredListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  candidateRegisteredEvent  $event
     * @return void
     */
    public function handle(candidateRegisteredEvent $event)
    {
        Mail::to($event->candidate->email)->send(new candidateRegisteredMail($event->candidate));
    }
}
