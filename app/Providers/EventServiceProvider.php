<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\MessageCreated;
use App\Events\NewPasswordMail;
use App\Events\RentCreated;
use App\Listeners\NewMessageEmailNotification;
use App\Listeners\NewPasswordEmailNotification;
use App\Listeners\NewRentEmailNotification;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        MessageCreated::class => [
            NewMessageEmailNotification::class,
        ],
        NewPasswordMail::class => [
            NewPasswordEmailNotification::class,
        ],
        RentCreated::class => [
            NewRentEmailNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
