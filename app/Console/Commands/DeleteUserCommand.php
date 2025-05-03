<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:delete {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete a user by email (case-insensitive)';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $email = $this->argument('email');
        
        $user = User::whereRaw('LOWER(email) = ?', [strtolower($email)])->first();
        
        if (!$user) {
            $this->error("User with email {$email} not found.");
            return 1;
        }
        
        if ($this->confirm("Are you sure you want to delete user {$user->email}?")) {
            $user->delete();
            $this->info("User {$user->email} has been deleted successfully.");
        }
        
        return 0;
    }
}
