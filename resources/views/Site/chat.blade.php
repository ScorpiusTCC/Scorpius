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

<link rel="stylesheet" href="{{ asset('css/cha.css') }}">

    <main class="container">

        <div class="chat">
        
            <div class="user-list">

                <div class="user container">

                    <div class="img-user">

                        <img class="img-fluid" src="{{ asset('imgs/profile/microsoft.png')}}" alt="">

                    </div>


                    <div class="info-user">

                        <h2 class="conversa-item" data-conversa-id="1">Microsoft</h2>

                    </div>
                    
                </div>

            </div>
        
            <div class="chat-box" id="chat-box">
        
                <div class="message-area" id="mensagem-chat">

                    <div class="other-msg">

                        <img src="{{ asset('imgs/profile/microsoft.png')}}" alt="">
                        <h4>
                            
                            Olá, vimos que você se candidatou a nossa vaga, aguarde por mais informações no seu email ou telefone de contato.
                            Boa sorte!

                        </h4>

                    </div>

                </div>

                <form class="" id="message-chat">
        
                    <div class="message-chat">

                        
                        <input class="msg-input form-control" type="text" name="mensagem" id="mensagem" placeholder="Insira sua mensagem aqui">
                        <input type="hidden" name="id_user" id="id_user" value="{{ $user->id }}">
                        <button class="send-btn" id="enviar-btn">

                            <i  class="fa-solid fa-share" style="color: #30599E;"></i>

                        </button>


                    </div>

                </form>
        
            </div>
        
        </div>

    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const mensagemInput = document.getElementById('mensagem');
        const mensagemForm = document.getElementById('message-chat');
        const mensagemChat = document.getElementById('mensagem-chat');

        function enviar() {
            const mensagem = mensagemInput.value.trim();

            if (mensagem !== '') {
                adicionarMensagemUsuario(mensagem);
                mensagemInput.value = ''; // Limpar o campo de entrada após o envio da mensagem
            }
        }

        function adicionarMensagemUsuario(mensagem) {
            const mensagemDiv = document.createElement('div');
            mensagemDiv.classList.add('user-msg');
            mensagemDiv.innerHTML = `<h4>${mensagem}</h4>`;
            mensagemChat.appendChild(mensagemDiv);
        }

        mensagemForm.addEventListener('submit', function (e) {
            e.preventDefault();
            enviar();
        });

        document.getElementById('enviar-btn').addEventListener('click', enviar);
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="{{ asset('js/custom-chat.js') }}"></script>
    
@endsection