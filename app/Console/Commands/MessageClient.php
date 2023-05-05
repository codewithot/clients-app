<?php

namespace App\Console\Commands;

use App\Mail\PictureMail;
use App\Models\Client;
use Illuminate\Console\Command;
use DB;

class MessageClient extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:message-client';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Message clients every three days';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $clients = Client::where('profile_image', null)->get(['first_name', 'email']);


        if ($clients->count() > 0) {
            foreach ($clients as $client) {
                Mail::to($client->email)->send(new PictureMail($client));
            }
        }

        return 0;
    }
}
