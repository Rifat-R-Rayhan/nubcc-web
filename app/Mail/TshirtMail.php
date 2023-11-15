<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TshirtMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $name = '';
    public $size = '';

    public function __construct($name, $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'NUBCC Jersy Order Confirmation',
        );
    }



    public function build()
    {
        return $this->view('mail')->with([
            'Name' => $this->name,
            'Size' => $this->size,
        ]);
    }


 

    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'view.name',
    //     );
    // }


    // public function attachments(): array
    // {
    //     return [];
    // }
}
