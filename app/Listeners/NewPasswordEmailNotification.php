<?php

namespace App\Listeners;

use App\Events\NewPasswordMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use App\Mail\PasswordMail;

class NewPasswordEmailNotification implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  App\Events\NewPasswordMail  $event
     * @return void
     */
    public function handle(NewPasswordMail $event)
    {
        Mail::to($event->email)->send(new PasswordMail($event));
    }
}
