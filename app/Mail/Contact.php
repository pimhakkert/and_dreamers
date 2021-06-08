<?php

namespace App\Mail;

use App\Models\HatStory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /** @var Request $to */
    protected $request;

    /**
     * Create a new message instance.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
//        return $this->from('mail@and-dreamers.com')
        return $this->from($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME'])
        ->subject('Contact form filled in!')->view('website.emails.contact', ['request' => $this->request]);
    }
}
