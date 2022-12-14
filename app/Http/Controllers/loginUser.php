<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginUser extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function auth(Request $request)
    {
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect("servicos");
        } else {
            
            return redirect("login")->with('error','Usuário ou senha inválidos!');;
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect("login");
    }
}
