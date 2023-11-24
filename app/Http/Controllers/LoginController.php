<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        // Verificar se o usuário já está autenticado
        if (Auth::check()) {
            // Se sim, redirecionar para a página que estava
            return redirect()->route('index');
        }

        // Se não, exibir a página de login normalmente
        return view('site/login');
    }

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

            return redirect()->route('index');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index')->with('sucesso', 'Deslogado com sucesso!');
    }
}

