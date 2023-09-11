<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function store(Request $request)
    {
        $user = $request->except('_token');
        if(!Auth::attempt($user)){
            return redirect()->back()->withErrors('Usuário ou senha inválidos');
        }

        return redirect()->route('serie.index', compact('user'));
    }
}
