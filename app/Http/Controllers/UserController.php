<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('second_page');
    }

    public function page($name) {
        return view('second_page');
    }
       
    public function check(Request $request)
    {  
        $user = $request->username;
        $pass  = $request->password;
 
        if (auth()->attempt(array('name' => $user, 'password' => $pass)))
        {
            return response()->json([ [1] ]);
        } 
        else
         {  
            return response()->json([ [3] ]);
         }  
    }
    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('user.login');
    }
}
