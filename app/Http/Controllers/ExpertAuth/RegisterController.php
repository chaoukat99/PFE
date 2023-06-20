<?php

namespace App\Http\Controllers\ExpertAuth;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Support\

class RegisterController extends Controller
{
    public function register()
    {
        return view('Experts.register');
    }

    public function save(Request $request, Expert $expert)
    {
        $validatedExpert = $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $validatedExpert['password'] = Hash::make($request->input('password'));

        Expert::create($validatedExpert);

        return redirect()->route('expertSpace.index');
    }

}
