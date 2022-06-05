<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RentCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $rent;
    public $email;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($rent, $email)
    {
        $this->email = $email;
        $this->rent = $rent;
    }
}
