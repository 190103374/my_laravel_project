<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupEmail;

class MailController extends Controller
{
    public function send() {
        $objDemo = new \stdClass();
        $objDemo->sender = 'Nurzhakhan';
        $objDemo->receiver = 'Nurzhakhan';

        Mail::to("190103374@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }

    public static function sendSignupEmail($name, $email, $verification_code){
        $data = [
            'name' => $name,
            'verification_code' => $verification_code
        ];
        Mail::to($email)->send(new SignupEmail($data));
    }
    

}
