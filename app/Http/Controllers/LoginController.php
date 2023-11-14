<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function auth(Request $request)
    {
        $credenciais = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $credenciais['email'])->first();

        if (!$user || !Hash::check($credenciais['password'], $user->senha)) {
            return redirect()->back()->with('erro', 'Usuário ou senha Inválido');
        } else {
            Auth::login($user);
            $request->session()->regenerate();
            return redirect()->route('vagas');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index')->with('sucesso', 'Deslogado com sucesso!');
    }
}
