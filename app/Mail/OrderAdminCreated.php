<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderAdminCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Order data for the mail
     * @var
     */
    public $data;

    /**
     * Create a new message instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('SITE_EMAIL'))
            ->subject('New Order')
            ->markdown('emails.admin_order');
    }
}
