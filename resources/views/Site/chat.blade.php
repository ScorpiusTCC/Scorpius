{{-- @extends('site/master')

@section('content')
    
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">

    <h1>Chat</h1>
    
    <h3>Bem vindo <span id="usuario">{{ $user->nome }}</span></h3>

    <div class="chat-container">

        <div class="user-list">
            <h2>Usuários</h2>
            <ul id="user-list">
                <!-- A lista de conversas será preenchida dinamicamente com JavaScript -->
            </ul>
        </div>

        <div class="chat-box" id="chat-box">

            <div class="chat-header">
                <h2>Conversa com <span id="nome_usuario"></span></h2>
            </div>

            <div class="mensagem-chat" id="mensagem-chat">
                <!-- Aqui exibirá as mensagens da conversa -->
            </div>

            <form class="message-chat" id="message-chat">
                <input type="text" name="mensagem" id="mensagem" placeholder="Digite a mensagem...">
                <input type="hidden" name="id_user" id="id_user" value="{{ $user->id }}">
                <input type="button" onclick="enviar()" value="Enviar">
            </form>

        </div>
        
    </div>

    <script src="{{ asset('js/custom-chat.js') }}"></script>

@endsection --}}

@extends('site/master')

@section('content')

<link rel="stylesheet" href="{{ asset('css/chat.css') }}">

<h1>Chat</h1>

<h3>Bem-vindo <span id="usuario">{{ $user->nome }}</span></h3>

<div class="chat-container">

    <div class="user-list">
        <h2>Usuários</h2>
        <ul id="user-list">
            <li class="conversa-item" data-conversa-id="1">Usuário 1</li>
            <li class="conversa-item" data-conversa-id="2">Usuário 2</li>
            <li class="conversa-item" data-conversa-id="3">Usuário 3</li>
        </ul>
    </div>

    <div class="chat-box" id="chat-box">

        <div class="chat-header">
            <h2>Conversa com <span id="nome_usuario">Usuario 1</span></h2>
        </div>

        <div class="mensagem-chat" id="mensagem-chat">
            <p>Usuário 1: Olá! Como você está?</p>
            <p>Seu Nome: Oi! Estou bem, obrigado.</p>
            <p>Usuário 1: Que bom ouvir isso.</p>
        </div>

        <form class="message-chat" id="message-chat">
            <input type="text" name="mensagem" id="mensagem" placeholder="Digite a mensagem...">
            <input type="hidden" name="id_user" id="id_user" value="{{ $user->id }}">
            <input type="button" id="enviar-btn" value="Enviar">
        </form>

    </div>

</div>

@endsection