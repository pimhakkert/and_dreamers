<?php

namespace App\Mail;

use App\Models\HatStory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HatStoryContact extends Mailable
{
    use Queueable, SerializesModels;

    /** @var Request $request */
    protected $request;

    /** @var HatStory $hatStory */
    protected $hatStory;

    /**
     * Create a new message instance.
     *
     * @param Request $request
     * @param HatStory $hatStory
     */
    public function __construct(Request $request, HatStory $hatStory)
    {
        $this->request = $request;
        $this->hatStory = $hatStory;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME'])
        ->subject('Contact form filled in!')->view('website.emails.hatstory-contact', ['request' => $this->request, 'hatStory' => $this->hatStory]);
    }
}
