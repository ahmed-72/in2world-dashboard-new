<?php

namespace App\Notifications;

use App\Models\Member;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class groupReplyNotification extends Notification
{
    use Queueable;
    protected $member;
    protected $messageBody;

    /**
     * Create a new notification instance.
     *
     * @return void  
     */  
    public function __construct($messageBody,Member $member)
    {
        $this->member=$member;
        $this->messageBody=$messageBody;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
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
        ->subject('in2world company')
        ->greeting("Hi {$notifiable->name}")
            ->line('This is in2world company')
            ->line($this->messageBody)
            ->action('Visit our site', url('https://in2world.net/index.html'));
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
}
