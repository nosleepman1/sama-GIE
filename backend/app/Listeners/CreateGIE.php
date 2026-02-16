<?php

namespace App\Listeners;

use App\Events\CreateGIE as EventsCreateGIE;
use App\Notifications\CreateGIENotification;


class CreateGIE
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EventsCreateGIE $event): void
    {
        $event->gie->notify(new CreateGIENotification());
    }
}
