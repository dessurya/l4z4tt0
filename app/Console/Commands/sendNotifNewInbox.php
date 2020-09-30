<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Model\User;
use App\Model\Inbox;
use App\Mail\NotifNewInbox;
use Illuminate\Support\Facades\Mail;

class SendNotifNewInbox extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notif:newinbox';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'send mail notif new inbox';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $users = User::where('flag_send_notif','Y')->get();
        $inbox = Inbox::where(['flag_read'=>'N','flag_send'=>'Y'])->get();
        if (count($inbox) > 0) {
            foreach ($users as $user) { Mail::to($user->email)->send(new NotifNewInbox($user,$inbox)); }
            $inbox->each->flagSendNotif();
        }
    }
}
