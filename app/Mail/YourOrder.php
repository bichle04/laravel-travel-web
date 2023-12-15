<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Tour;

class YourOrder extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'TravelWithU - Thông tin Tour bạn đã đặt',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $id_tour = $this->data['id_tour'];
        $tour = Tour::select('name')->where('id', $id_tour)->first();
        $tour_name = $tour->name;
        $dataWithTourName = array_merge($this->data, ['tour_name' => $tour_name]);
        return (new Content('mail.content'))->with($dataWithTourName);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
