<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserloginController extends Controller
{
    public function index(){
        return view('form');
    }

    public function login(Request $request){
        $request->validate(
            [
                'login_email' => 'required|email',
                'login_password' => 'required|max:20|min:8',
            ]
        );
        
        echo "<pre>";
        print_r($request->all());
        echo "</pre>";
    }
}
