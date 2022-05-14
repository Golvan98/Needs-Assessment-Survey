<?php

namespace App\Http\Controllers;
use illuminate\Support\Facades\Auth;
use illuminate\Contracts\Auth\user as Authenticatable;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function testlogin()
    {
        return view('login');
    }

    public function sessionlogin()
    {
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
        ]);


        if (auth()->attempt($data)) {
            
            return redirect('/home');
                                          }

       return view('/home')->withErrors(['email' => 'Wrong Email Boie']);
    
    }

}
