<?php


namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\PiecesRechange;

class LowStockNotification extends Notification
{
    use Queueable;

    protected $piece;

    public function __construct(PiecesRechange $piece)
    {
        $this->piece = $piece;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Stock faible pour la pièce: ' . $this->piece->nom)
                    ->line('Il reste ' . $this->piece->stock . ' unités en stock.')
                    ->action('Reapprovisionner', url('/rechange/' . $this->piece->id . '/edit'))
                    ->line('Merci de vérifier le stock.');
    }
}

