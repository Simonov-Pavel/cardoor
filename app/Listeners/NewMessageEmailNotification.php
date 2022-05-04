<?php

namespace App\Listeners;

use App\Events\MessageCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mail;
use App\Mail\MessageMail;

class NewMessageEmailNotification  implements ShouldQueue
{

    /**
     * Handle the event.
     *
     * @param  \App\Events\MessageCreated  $event
     * @return void
     */
    public function handle(MessageCreated $event)
    {
        Mail::to(env(MAIL_FROM_ADDRESS))->send(new MessageMail($event));
    }
}
