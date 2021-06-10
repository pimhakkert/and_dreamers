<?php

namespace App\Listeners;

use App\Mail\Backup;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Spatie\Backup\Events\BackupZipWasCreated;

class MailSuccessfulBackup
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param BackupZipWasCreated $event
     * @return void
     * @throws \Exception
     */
    public function handle(BackupZipWasCreated $event)
    {
        $this->mailBackupFile($event->pathToZip);
    }

    public function mailBackupFile($path)
    {
        try {
            Mail::to($_ENV['MAIL_TO_ADDRESS'])->send(new Backup($path));

        } catch (\Exception $exception) {
            throw $exception;
        }

    }
}
