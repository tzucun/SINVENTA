<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    use Queueable;

    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        $url = url(route('password.reset', [
            'token' => $this->token,
            'email' => $notifiable->getEmailForPasswordReset(),
        ], false));

        return (new MailMessage)
<<<<<<< HEAD
            ->subject('Permintaan Reset Password - SINVENTA')
=======
            ->subject('Reset Password - Inventaris Telkom')
>>>>>>> f68f6cdbc853c53cc75033861251d15a729cc2f5
            ->greeting('Halo,')
            ->line('Anda menerima email ini karena ada permintaan reset password akun Inventaris Telkom Anda.')
            ->action('Reset Password Sekarang', $url)
            ->line('Link ini akan kedaluwarsa dalam 60 menit.')
            ->line('Jika tombol "Reset Password Sekarang" tidak dapat diklik, silakan salin dan tempel link berikut ke browser Anda:')
            ->line($url)
            ->line('Jika Anda tidak merasa melakukan permintaan ini, silakan abaikan email ini.')
<<<<<<< HEAD
            ->salutation('Hormat kami, Tim SINVENTA')
=======
            ->salutation('Hormat kami, Tim Inventaris Telkom')
>>>>>>> f68f6cdbc853c53cc75033861251d15a729cc2f5
            
            ->withSymfonyMessage(function ($message) {
            $message->getHeaders()->remove('X-Mailer');
        });
    }
}