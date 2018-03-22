<?php

namespace App\Listeners;

use App\Notifications\ProcessoCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendProcessoCreatedNotification implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * Handle the event.
     *
     * @param object $event
     *
     * @return void
     */
    public function handle($event)
    {
        Notification::send($event->processo->getNotifiableUsersFor($event), new ProcessoCreated($event->processo));
    }
}
