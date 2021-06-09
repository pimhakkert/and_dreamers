<?php

namespace App\Mail;

use App\Models\HatStory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Backup extends Mailable
{
    use Queueable, SerializesModels;

    /** @var string $backupPath */
    protected $backupPath;

    /**
     * Create a new message instance.
     *
     * @param string $backupPath
     */
    public function __construct(string $backupPath)
    {
        $this->backupPath = $backupPath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME'])
        ->subject('Weekly and.dreamers backup')->view('website.emails.backup')
            ->attach($this->backupPath);
    }
}
