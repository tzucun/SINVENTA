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
            ->subject('Permintaan Reset Password - SINVENTA')
            ->greeting('Halo,')
            ->line('Anda menerima email ini karena ada permintaan reset password akun Inventaris Telkom Anda.')
            ->action('Reset Password Sekarang', $url)
            ->line('Link ini akan kedaluwarsa dalam 60 menit.')
            ->line('Jika tombol "Reset Password Sekarang" tidak dapat diklik, silakan salin dan tempel link berikut ke browser Anda:')
            ->line($url)
            ->line('Jika Anda tidak merasa melakukan permintaan ini, silakan abaikan email ini.')
            ->salutation('Hormat kami, Tim SINVENTA')
            
            ->withSymfonyMessage(function ($message) {
            $message->getHeaders()->remove('X-Mailer');
        });
    }
}