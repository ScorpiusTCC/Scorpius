@extends('site/master')

@section('title', 'Registro Empresa')

@section('content')
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset('css/register-user.css') }}"/>
    
    <main>

        <div id="first-division">

            <form action="">

                <div id="form-logo-area">
    
                    <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">
                    <h1>Dados de Contato</h1>
    
                </div>
    
                <label for="cnpj">CNPJ <span>*</span> </label>
                <input type="text" name="cnpj" id="cnpj" required>
    
                <label for="nome_fantasia">Nome Fantasia <span>*</span> </label>
                <input type="text" name="nome_fantasia" id="nome_fantasia" required>
    
                <label for="nome_completo">Nome Completo <span>*</span> </label>
                <input type="text" name="nome_completo" id="nome_completo" required>
    
                <div id="login-area">
    
                    <button type="submit">Continuar</button>
                    <a href="{{ route('login') }}">Já possuo uma conta Scorpius</a>
    
                </div>
    
            </form>

        </div>

    </main>
    
@endsection
