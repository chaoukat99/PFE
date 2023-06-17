<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginExpert extends Controller
{

    public function index(){
        return view("expert.login");
    }
    public function showcreate(){
        return view("expert.register");
    }
    public function dash(){
        return view("expert.dash");
    }
 public function save(Request $req){
      $credentials=$req->only("email","password");
      if(Auth::guard('experts')->attempt($credentials)){
        session()->regenerate();
        return redirect("/dash-expert");
      }

 }


    public function create(Request $req){
        Expert::create([
            "nom"=>$req->nom,
            "email"=>$req->email,
            "password"=>Hash::make($req->pass)

            ]);
            return "expert created successfully";
    }
}
