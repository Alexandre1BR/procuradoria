<?php

namespace App\Data\Repositories;

use App\Data\Models\Notification;

class Notifications extends Base
{
    private function createHash($notifiable, $subject)
    {
        return sha1($this->toString($notifiable).$this->toString($subject));
    }

    public function storeAsSent($notifiable, $subject)
    {
        return Notification::create(['hash' => $this->createHash($notifiable, $subject)]);
    }

    public function findByHash($notifiable, $subject)
    {
        return Notification::where('hash', $this->createHash($notifiable, $subject))->first();
    }

    private function toString($subject)
    {
        if (is_string($subject)) {
            return $subject;
        }

        return $subject->toJson();
    }
}
