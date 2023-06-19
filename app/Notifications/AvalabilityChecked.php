<?php

namespace App\Notifications;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class QuoteRequested extends Notification
{
    use Queueable;
    var $request;
    var $subjectTitle;
    /**
     * Create a new notification instance.
     */
    public function __construct(Request $request, $subjectTitle)
    {
        $this->request = $request;
        $this->subjectTitle = $subjectTitle;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject($this->subjectTitle)
                    ->greeting('Casa Bonita Guesthouse')
                    ->line('Find Bellow the information of the person who is checking the rooms avalibility:')
                    ->line('Nome: ' . $this->request->name)
                    ->line('Email: ' . $this->request->email)
                    ->line('Check In' . $this->request->CheckIn)
                    ->line('Check Out: ' . $this->request->CheckOut)
                    ->line('Adults: ' . $this->request->Adults)
                    ->line('Children' . $this->request->Children)
                    ->line('Rooms: ' . $this->request->Rooms)
                    >line('Room Type: ' . $this->request->RoomType)
                    ->action('Visit the Website', url('/'))
                    ->salutation('Thank you!!!');

    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
