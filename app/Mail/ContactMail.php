<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ContactMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $payload; // Data to be accessed in the email view

    /**
     * Create a new message instance.
     *
     * @param  array  $payload
     * @return void
     */
    public function __construct($payload)
    {
        $this->payload = $payload;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        // Send acknowledgment email to the user
        Mail::to($this->payload['email'])->queue(new AcknowledgmentMail($this->payload));


        return $this->view('emails.contact') // View file for the email content
            ->with([
                'name' => $this->payload['name'],
                'email' => $this->payload['email'],
                'company' => $this->payload['company'],
                'website' => $this->payload['website'],
                'country' => $this->payload['country'],
                'phone' => $this->payload['phone'],
                'type' => $this->payload['type'],
                'text' => $this->payload['message']
            ])
            ->subject('New Contact Message Received'); // Email subject
    }
}
