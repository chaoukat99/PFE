<?php

namespace App\Http\Controllers\ExpertAuth;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Expert;


class LoginController extends Controller
{
    public function login()
    {
        return view('Experts.login');

    }

    public function save(Request $request)
    {
        // $credencials= $request->only('email','password');
        $inputs=$request->all();
        $this->validate($request,[
            'email'=>'required',
            'password' =>'required'
        ]);

        if(Auth::guard('experts')->attempt(['email'=>$inputs['email'],'password'=>$inputs['password']]))
        {

            $request->session()->regenerate();
            return redirect()->route('expertSpace.index');

        }
        else{
            return abort(404,'ikhaaan');
        }

    }

    public function logout(Request $request){

        Auth::guard('experts')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('expert.login');
    }

}
