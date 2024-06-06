<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PaymentCompletedNotification extends Notification
{
    use Queueable;

    public $student;

    /**
     * Create a new notification instance.
     *
     * @param  $student
     * @return void
     */
    public function __construct($student)
    {
        $this->student = $student;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail']; // You can choose other channels like 'database' here
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $student = $this->student;
        $name = $student->name;
        $email = $student->email; // Assuming there's an email field in the student model

        return (new MailMessage)
                    ->line('Congratulations! Your student payment is complete.')
                    ->line('Student Name: ' . $name)
                    ->to($email)
                    ->subject('Payment Completed Notification');
    }
}
