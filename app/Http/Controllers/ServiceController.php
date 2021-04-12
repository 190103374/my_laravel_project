<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServiceController extends Controller
{
    function save(Request $request) {
        //print_r($request->input());
        $service = new Service;
        $service->user_name = $request->user_name;
        $service->user_email = $request->user_email;
        $service->message = $request->message;
        echo $service->save();
    }
}
