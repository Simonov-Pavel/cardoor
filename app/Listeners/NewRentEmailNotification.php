<?php

namespace App\Listeners;

use App\Events\RentCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use App\Mail\RentMail;

class NewRentEmailNotification implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  \App\Events\RentCreated  $event
     * @return void
     */
    public function handle(RentCreated $event)
    {
        Mail::to($event->email)->send(new RentMail($event));
    }
}
