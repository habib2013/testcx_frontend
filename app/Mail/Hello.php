<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Subscription;

class Hello extends Mailable
{
    use Queueable, SerializesModels;
    public $subscriber;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Subscription $subscriber)
    {
        $this->subscriber = $subscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.hello');
    }
}
