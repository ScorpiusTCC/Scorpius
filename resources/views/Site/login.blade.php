@extends('site/master')

@if($mensagem = Session::get('erro'))
    <div class="alert alert-danger">
        {{ $mensagem }}
    </div>
@elseif($mensagem = Session::get('sucesso'))
    <div class="alert alert-danger">
        {{ $mensagem }}
    </div>
@endif

@section('title', 'Login')

@section('content')

    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"/>

    <main>

        <div id="first-division">

            <form action="{{ route('auth') }}" method="get" >

                <div id="form-logo-area">
    
                    <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">
                    <h1>Acesse sua conta</h1>
    
                </div>
    
    
                <input type="text" name="email" id="email" placeholder="E-mail" required>
    
                <input type="text" name="password" id="password" placeholder="Senha" required>

                <a href="">Esqueceu sua senha</a>

    
                <div id="login-area">
    
                    <button type="submit">Entrar</button>
                    <span>Não tem uma conta <a href="">Cadastre-se</a></span>
    
                </div>
    
            </form>

        </div>

    </main>
    
@endsection