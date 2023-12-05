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

                        <img class="img-fluid" src="{{ asset('imgs/profile/venom.png')}}" alt="">

                    </div>


                    <div class="info-user">

                        <h2 class="conversa-item" data-conversa-id="1">Usuário 1</h2>

                    </div>
                    
                </div>

            </div>
        
            <div class="chat-box" id="chat-box">
        
                <div class="message-area" id="mensagem-chat">

                    <div class="other-msg">

                        <img src="{{ asset('imgs/profile/venom.png')}}" alt="">
                        <h4>
                            
                            Seja bem-vindo à nossa plataforma! Estamos empolgados por você ter se juntado à nossa comunidade de talentos em busca de oportunidades profissionais emocionantes. 

                            Aqui, você terá acesso a uma ampla variedade de estágios que podem ser o primeiro passo em sua jornada profissional.
                            
                            Nossa missão é ajudar estudantes e jovens talentos a encontrar oportunidades de estágio que se alinhem com seus objetivos acadêmicos e profissionais. Queremos que você aproveite ao máximo a sua experiência conosco.
                            
                            Estamos ansiosos para sermos parte do seu sucesso profissional e para ajudá-lo a encontrar o estágio dos seus sonhos. Explore as oportunidades, aprenda e cresça conosco!
                            
                            
                            Atenciosamente, 
                            A Equipe da Scorpius Enterprises.

                        </h4>

                    </div>

                    <div class="user-msg">

                        <h4>
                            
                            Obrigado!

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


@endsection