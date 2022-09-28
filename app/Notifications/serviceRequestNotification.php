<?php

namespace App\Notifications;

use App\Models\Member;
use App\Models\ServiceRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class serviceRequestNotification extends Notification
{
    use Queueable;
    protected $serviceRequest;
    protected $member;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ServiceRequest $serviceRequest, Member $member)
    {
        $this->serviceRequest = $serviceRequest;
        $this->member = $member;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        $channels = ['database', 'mail'];
        if (in_array('mail', $notifiable->notification_options?:[]))
            $channels[] = 'mail';
        return  $channels;
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
        ->subject('new message')
        ->greeting("hello{$notifiable->name}")
            ->line($this->member->name ."send a new service request")
            ->line($this->serviceRequest->name)
            ->action('Visit our site', url('https://in2world.net/index.html'))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the Database representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toDatabase($notifiable)
    {
        return [
            'title' => __('New serviceRequest'),
            'body' => __(':name ask for a new service request', [
                'name' => $this->member->name,
            ]),
            'url' => route('dashboard.messages'),
        ];
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
