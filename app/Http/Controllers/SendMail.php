<?php

namespace App\Http\Controllers;

use App\Mail\EmailClassName;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class SendMail extends Mailable
{
    public function sendEmail()
    {
        Mail::to('hello@example.com')->send(new Mailable());
    }
}
