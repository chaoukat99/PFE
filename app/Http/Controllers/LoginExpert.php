<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginExpert extends Controller
{

    public function index(){
        return view("expert.Auth.login");
    }
    public function showcreate(){
        return view("expert.register");
    }
    public function dash(){
        return view("expert.Dash.dashboard");
    }
 public function save(Request $req){
      $credentials=$req->only("email","password");
      if(Auth::guard('experts')->attempt($credentials)){
        session()->regenerate();
        return redirect("/dash-expert");
      }

 }

 public function deconn(){
    Auth::logout();
    session()->invalidate();
    session()->regenerateToken();
  return redirect("/");


 }


    public function create(Request $req){
        $expert=Expert::create([
            "fullname"=>$req->fullname,
            "email"=>$req->email,
            "password"=>Hash::make($req->pass)

            ]);
            Auth::guard('experts')->login($expert);
            return redirect("/dash-expert");

    }
}
