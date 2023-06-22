<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User ;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginUser extends Controller
{
    //

    public function index(){
        return view("user.login");
    }
    public function dash(){
        return view("user.dash");
    }
     public function save(Request $req){

        $credentials=$req->only("email","password");
       if(Auth::attempt($credentials)){
           session()->regenerate();
           return redirect("/dash-user");
       }


       return back()->withErrors([
            "email"=>"Invalid Credentials"]);


     }


    public function showcreate(){
        return view("user.register");
    }
    public function create(Request $req){

       User::create(
        [
            "name"=>$req->nom,
            "email"=>$req->email,
            "password"=>Hash::make($req->pass),
            ]
        );

        return "created successfully";

    }
}
