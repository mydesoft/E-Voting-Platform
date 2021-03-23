<?php

namespace App\Listeners;

use App\Events\adminCreatedEvent;
use App\Models\Role;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class adminCreatedListener
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
     * @param  adminCreatedEvent  $event
     * @return void
     */
    public function handle(adminCreatedEvent $event)
    {
        $adminRole = Role::where('name', 'admin')->firstOrFail();

        $event->admin->roles()->attach($adminRole->id);
    }
}
