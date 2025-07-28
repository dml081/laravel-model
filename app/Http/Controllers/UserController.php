<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(Request $request){
        $username = $request->input("username");
        $password = $request->input("password");

        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $isLogin = Auth::attempt(["email" => $username, 
        "password" => $password]);
        
        if( $isLogin ){
            return redirect()->intended("dashboard");
        } else {
            return back()->withErrors(["error" => "Invalid Credentials"]);
        }
    }

    public function register(Request $request){
        $username = $request->input("username");
        $email = $request->input("email");
        $password = $request->input("password");
        $name = $request->input("name");

        $exists = User::where("username", $username) ->first();//retrieve all records that aligns with the where

        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'name' => 'required'
        ]);

        $isLogin = Auth::attempt(["email" => $username, 
        "password" => $password]);
        
        if( $isLogin ){
            return redirect()->intended("dashboard");
        } else {
            return back()->withErrors(["error" => "Invalid Credentials"]);
        }
      
    }


}