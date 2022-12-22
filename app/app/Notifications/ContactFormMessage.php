<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use App\Http\Requests\ContactFormRequest;

class ContactFormMessage extends Notification
{
    use Queueable;

    protected $message;
    protected $email;
    protected $name;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ContactFormRequest $message)
    {
        $this->message = $message;
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

        $line = $this->message->fullname . "\n" . $this->message->email . "\n" . $this->message->message ;
        $subject = config('recipient.name') . ", you have a new message!";
        //print_r($this);
        return (new MailMessage)
            ->subject($subject)
            ->greeting(" ")
            ->salutation(" ")
            ->from($this->message->email, $this->message->name)
            ->line($line);
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
