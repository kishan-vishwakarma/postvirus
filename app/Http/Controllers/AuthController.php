<?php

namespace App\Http\Controllers;

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('auth/login');
    }
    public function authenticate(Request $request)
    {
        $validate = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }

        $user = User::where('email',$request->email)->first();

        if($user){
            if(Hash::check($request->password,$user->password))
            {
                return  redirect()->to('dashboard.index')->with('message', 'Successfully logged in.');
            }else{
                return back()->with('exception','Incorrect Password')->withInput();
            }
        }else{
            return back()->with('exception','User ID Invalid.')->withInput();
        }

    }

}
