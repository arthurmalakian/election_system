<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class BasicAuthController extends Controller
{

    public function login()
    {
        return view('auth');
    }

    public function auth(AuthRequest $request)
    {
        $user_data = $request->only('email','password');

        if(Auth::attempt($user_data)){
            return redirect()->route('candidates.index');
        }else{
            return redirect()->back()->with('danger','Dados incorretos.');
        }
    }
}
