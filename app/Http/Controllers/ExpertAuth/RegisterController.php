<?php

namespace App\Http\Controllers\ExpertAuth;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('Experts.register');
    }

    public function save(Request $request,Expert $expert)
    {
      $validatedExpert= $request ->validate(
        [
            'fullname' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]
        );
      Expert::create($validatedExpert);
      return redirect()->route('index');

    }
}
