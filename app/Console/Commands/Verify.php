<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class Verify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'post:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all();
        foreach ($users as $user){
            if ($user->isVerify == 1) {
                $user->updateOrFail(['isVerify' => 0]);
            }
        }
    }
}
