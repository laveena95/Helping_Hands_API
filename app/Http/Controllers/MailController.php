<?php

namespace App\Http\Controllers;

use App\Mail\Mailverify;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public static function sendVerificationMail($name, $email, $verification_code)
    {
        $data = [
            'name' => $name,
            'verification_code' => $verification_code
        ];
        Mail::to($email)->send(new MailVerify($data));
    }
}
