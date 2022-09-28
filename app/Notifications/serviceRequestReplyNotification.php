<?php

namespace App\Notifications;

use App\Models\Member;
use App\Models\ServiceRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class serviceRequestReplyNotification extends Notification
{
    use Queueable;
    protected $serviceRequest;
    protected $member;
    protected $replyMessageBody;

    /**
     * Create a new notification instance.
     *
     * @return void serviceRequest
     */
    public function __construct(ServiceRequest $serviceRequest ,$replyMessageBody,Member $member)
    {
        $this->serviceRequest=$serviceRequest;
        $this->member=$member;
        $this->replyMessageBody=$replyMessageBody;
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
        ->subject('in2world reply for your service request')
        ->greeting("hello{$notifiable->name}")
            ->line($this->replyMessageBody)
            ->action('Visit our site', url('https://in2world.net/index.html'))
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
        return [
            //
        ];
    }
}
