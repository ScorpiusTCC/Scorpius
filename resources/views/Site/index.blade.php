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

@section('title', 'Home')

@section('content')
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset('css/indexes.css') }}"/>

    <main>

        <section id="first-area">

            <div id="search-area">

                <p>Encontre as melhores vagas de estágio.</p>
                <p>Seu primeiro emprego é aqui!</p>

                <div id="search-job">

                    <form action="">

                        <input type="text" placeholder="Busca por cargos">
                        <button type="submit">Procurar</button>

                    </form>

                </div>
                
            </div>

            <div id="image-area">

                <img src="{{ asset('imgs/first-session-image.png') }}" alt="">

            </div>
            
        </section>

        <section id="second-area">

            <h1>Cargos em sua área de atuação</h1>

              <!-- Swiper -->
              <div class="swiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">

                        <a href="">
                            <img src="{{ asset('imgs/index/tecno-image.jpg') }}" alt="Imagem da área de T.I">
                            <h2>Tecnologia</h2>
                        </a>
                            
                    </div>

                    <div class="swiper-slide">

                        <a href="">
                            <img src="{{ asset('imgs/index/marketing-image.jpg') }}" alt="Imagem da área de Marketing">
                            <h2>Marketing</h2>
                        </a>
                            
                    </div>

                    <div class="swiper-slide">

                        <a href="">
                            <img src="{{ asset('imgs/index/adm-image.jpg')}} " alt="Imagem da área de Administração">
                            <h2>Administração</h2>
                        </a>
                            
                    </div>

                    <div class="swiper-slide">

                        <a href="">
                            <img src="{{ asset('imgs/index/seg-image.jpg')}} " alt="Imagem da área de Segurança de trabalho">
                            <h2>Segurança do trabalho</h2>
                        </a>
                            
                    </div>

                    <div class="swiper-slide">

                        <a href="">
                            <img src="{{ asset('imgs/index/log-image.jpg')}}" alt="Imagem da área de Logistica">
                            <h2>Logistica</h2>
                        </a>
                            
                    </div>

                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>


            <div id="second-area-button">

                <a href="{{ route('vagas') }}"><button>Encontrar todas as vagas</button></a>
                
            </div>

        </section>

        <section id="third-area">

            <h1>Descubra o seu futuro profissional conosco. Explore as oportunidades, dê o primeiro passo em direção a uma carreira de sucesso!</h1>

            <video src=""></video>

        </section>

        <section id="fourth-area">

            <div id="fourth-area-main-division">

                <div id="fourth-area-first-division">

                    <h2>A Scorpius te ajuda com sua busca</h2>
                    <img src="{{ asset('imgs/fourth-session-image.png') }}" alt="">
    
                </div>
    
                <div id="fourth-area-second-division">
    
                    <h3>Antes de se candidatar a uma oportunidade de estágio, avalie sua pontuação em várias competências em comparação com a dos outros candidatos e veja os principais requisitos exigidos pelas empresas.</h3>
                    <a href="{{ route('vagas') }}"><button>Buscar vagas de estágio</button></a>
    
                </div>

            </div>

        </section>

        <section id="fifth-area">

            <div id="fifth-area-main-division">

                <img id="fifth-area-logo-image" src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                <h1>Seja premium e tenha acesso a vários benefícios:</h1>

                <div id="fifth-area-first-division">

                    <div class="fifth-area-plans-division">

                        <h2>Grátis</h2>
    
                        <p>Acesso a diversas vagas de estágio<img id="fds" src="{{ asset('imgs/check.png') }}" alt=""></p>
                        <p>Área para colocar suas informações pessoais<img src="{{ asset('imgs/check.png') }}" alt=""></p>
                        <p>Maior visibilidade na plataforma<img src="{{ asset('imgs/close.png') }}" alt=""></p>
    
                    </div>
    
                    <div class="fifth-area-plans-division">
    
                        <h2>Premium</h2>
    
                        <p>Acesso a diversas vagas de estágio<img src="{{ asset('imgs/check.png') }}" alt=""></p>
                        <p>Área para colocar suas informações pessoais<img src="{{ asset('imgs/check.png') }}" alt=""></p>
                        <p>Maior visibilidade na plataforma<img src="{{ asset('imgs/check.png') }}" alt=""></p>


                        <div id="fifth-area-plans-buy">

                            <span>R$ 39,99</span>
                            <a href=""><button>Assine já</button></a>
            
                        </div>
    
                    </div>

                </div>

            </div>

        </section>

    </main>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/index-swiper.js') }}"></script>

@endsection
