<?php

namespace App\Events;

use App\Data\Models\Processo;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ProcessoUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $processo;

    /**
     * Create a new event instance.
     *
     * @param $processo
     */
    public function __construct(Processo $processo)
    {
        $this->processo = $processo;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
