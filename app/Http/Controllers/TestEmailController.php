<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

class TestEmailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function sendTestEmail()
    {
        Mail::raw('This is a test email from OnePieceBattles!', function($message) {
            $message->to('test@example.com')
                    ->subject('Test Email from OnePieceBattles');
        });
        
        return 'Test email sent! Check your Mailtrap inbox.';
    }
}
