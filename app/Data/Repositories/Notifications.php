<?php
namespace App\Data\Repositories;

use App\Data\Models\Notification;

class Notifications extends Base
{
    private function createHash($notifiable, $subject)
    {
        return sha1($this->toString($notifiable) . $this->toString($subject));
    }

    public function storeAsSent($via, $notifiable, $subject)
    {
        return Notification::create([
            'hash' => $this->createHash($notifiable, $subject),
            'via' => $via,
            'to' => is_object($notifiable) ? $notifiable->preferredEmail : $notifiable,
            'subject_id' => $subject->id,
            'subject' => get_class($subject),
        ]);
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
