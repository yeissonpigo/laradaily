<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InfoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('yeissonpigo@unisabana.edu.co')
            ->view('mailable/collaborate_plain')
            /*->attach(public_path('/images') . '/demo.jpg', [
                'as' => 'demo.jpg',
                'mime' => 'image/jpeg',
            ])*/;
    }
}
