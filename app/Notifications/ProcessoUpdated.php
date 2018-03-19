<?php

namespace App\Notifications;

use App\Data\Models\Processo;
use App\Data\Repositories\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ProcessoUpdated extends Notification implements ShouldQueue
{
    use Queueable;

    protected $notificationsRepository;

    /**
     * @var Processo
     */
    protected $processo;

    public function __construct(Processo $processo)
    {
        $this->processo = $processo;

        $this->notificationsRepository = app(Notifications::class);
    }

    private function getManagers()
    {
        return $this->processo->responsaveis;
    }

    private function getMessage()
    {
        return 'Os dados do processo '.$this->processo->numero_judicial.' sofreram alterações';
    }

    /**
     * @return \Illuminate\Config\Repository|mixed
     */
    private function getSlackNotifiable()
    {
        $notifiable = config('services.slack.webhook_url');

        return $notifiable;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        $via = ['mail'];

        if (is_null($this->notificationsRepository->findByHash($this->getSlackNotifiable(), $this->processo))) {
            $via[] = 'slack';
        }

        return $via;
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $message = (new MailMessage)
                    ->line($this->getMessage());

        $this->getManagers()->each(function ($manager) use ($message) {
            $message->line("Responsável ({$manager->type}): {$manager->name}");
        });

        $message->action('Ver processo', route('processos.show', $this->processo->id));

        return $message;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }

    /**
     * Get the Slack representation of the notification.
     *
     * @return SlackMessage
     */
    public function toSlack()
    {
        $this->notificationsRepository->storeAsSent($this->getSlackNotifiable(), $this->processo);

        $message = (new SlackMessage($this->getSlackNotifiable()))
            ->success()
            ->content($this->getMessage())
            ->attachment(function ($attachment) {
                $attachment->title('Ver processo', route('processos.show', $this->processo->id));
            });

        $this->getManagers()->each(function ($manager) use ($message) {
            $message->attachment(function ($attachment) use ($manager) {
                $attachment->title("Responsável ({$manager->type}): {$manager->name}");
            });
        });

        return $message;
    }
}
