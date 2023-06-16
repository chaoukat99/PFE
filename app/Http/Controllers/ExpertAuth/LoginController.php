<?php

namespace App\Http\Controllers\ExpertAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('Experts.login');

    }

    public function save(Request $request)
    {
        $credencials= $request->only('email','password');

        if(Auth::guard('experts')->attempt($credencials))
        {

            $request->session()->regenerate();
            return view('welcome');

        }

    }


}
