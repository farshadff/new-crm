<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;
use phplusir\smsir\Smsir;

class ClientAdded extends Notification
{
    use Queueable;
    protected $user;
    protected $clientId;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($clientId, $userId)
    {
        $this->clientId = $clientId;
        $this->userId = $userId;
    }
    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }


    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
//        sms to users
            Smsir::send([$this->userId.'یک کاربر جدید به شما ارجاع شده لطفا صفحه کاربران من را مشاهده کنید'],['09192244689']);

        return [
            'client_id' => $this->clientId,
            'user_id' => $this->userId,
        ];
    }
}
