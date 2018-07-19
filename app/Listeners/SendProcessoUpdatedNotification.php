<?php
namespace App\Listeners;

use App\Notifications\ProcessoUpdated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendProcessoUpdatedNotification implements ShouldQueue
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
        Notification::send($event->processo->getNotifiableUsersFor($event), new ProcessoUpdated($event->processo));
    }
}
