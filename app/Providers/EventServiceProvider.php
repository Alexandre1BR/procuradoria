<?php

namespace App\Providers;

use App\Events\ProcessoUpdated;
use App\Listeners\SendProcessoUpdatedNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        ProcessoUpdated::class => [SendProcessoUpdatedNotification::class],

        //        Registered::class => [
        //            SendEmailVerificationNotification::class,
        //        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
