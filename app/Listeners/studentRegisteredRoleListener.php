<?php

namespace App\Listeners;

use App\Events\studentRegisteredEvent;
use App\Models\Role;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class studentRegisteredRoleListener
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
        $status = Role::where('name', 'student')->firstOrFail();

        $event->user->roles()->attach($status->id);
    }
}
