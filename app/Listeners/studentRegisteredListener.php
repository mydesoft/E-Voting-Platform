<?php

namespace App\Listeners;

use App\Events\studentRegisteredEvent;
use App\Mail\studentDetailsEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class studentRegisteredListener
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
     * @param  studentRegisteredEvent  $event
     * @return void
     */
    public function handle(studentRegisteredEvent $event)
    {
        Mail::to($event->user->email)->send(new studentDetailsEmail($event->user));
    }
}
