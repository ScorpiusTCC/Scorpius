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
    <link rel="stylesheet" href="{{ asset('css/index.css') }}"/>

    <main>

        <section id="first-area">

            <div id="search-area">

                <p>Encontre as melhores vagas de estágio</p>
                <p>Seu primeiro emprego é aqui!</p>

                <div id="search-job">

                    <form method="get" action="{{ route('filterNameVaga')}} ">

                        <input type="text" id="searchName" name="searchName" placeholder="Busca por cargos">
                        <button type="submit">Procurar</button>

                    </form>

                </div>
                
            </div>

            <div id="image-area">

                <img src="{{ asset('imgs/first-session-image.png') }}" alt="">

            </div>
            
        </section>

        <section id="second-area">

            <h1>Procure vagas baseado em categorias</h1>

              <!-- Swiper -->
              <div class="swiper">

                <div class="swiper-wrapper">

                    @foreach ($categorias as $categoria)

                        <div class="swiper-slide">

                            <a href="{{ route('filterCategoryVaga', $categoria->id) }}"> 
                                <img src="{{ $categoria->nm_img }}" alt="{{ $categoria->nm_img }}">
                                <h3>{{ $categoria->nome }}</h3>
                            </a>
                                
                        </div>

                    @endforeach

                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

        </section>

        <section id="third-area">

            <h1>Descubra o seu futuro profissional conosco. Explore as oportunidades, dê o primeiro passo em direção a uma carreira de sucesso!</h1>

            <iframe width="80%" height="500px" class="m-4" src="https://www.youtube.com/embed/flVr2QPuzfA" title="Animação TCC   Público alvo 1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        </section>

        <section id="fourth-area">

            <div id="fourth-area-main-division">

                <div id="fourth-area-first-division">

                    <h2>A Scorpius te ajuda com sua busca</h2>
                    <img src="{{ asset('imgs/fourth-session-image.png') }}" alt="">
    
                </div>
    
                <div id="fourth-area-second-division">
    
                    <h3>Aqui na Scorpius suas chances de encontrar seu estágio dos sonhos é muito maior!</h3>

                </div>

            </div>

        </section>
        
        @auth

            @if(auth()->user()->tipo != 'estudante')

                <section id="fifth-area">

                    <div id="fifth-area-main-division">

                        <img id="fifth-area-logo-image" src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        <h1>Seja premium e tenha acesso a vários benefícios:</h1>

                        <div id="fifth-area-first-division">

                            <div class="fifth-area-plans-division ">

                                <h2>Grátis</h2>
            
                                <div class="plan-info">

                                    <span class="plan-span">Anunciar suas vagas</span>
                                    <i class="fa-solid fa-check" style="color: #69d72d;"></i>

                                </div>

                                <div class="plan-info">

                                    <span class="plan-span">Criação de perfil para sua empresa</span>
                                    <i class="fa-solid fa-check" style="color: #69d72d;"></i>

                                </div>

                                <div class="plan-info">

                                    <span class="plan-span">Visibilidade privile    giada do seu perfil e vagas</span>
                                    <i class="fa-solid fa-xmark" style="color: #c32c2c;"></i>
                                    
                                </div>
            
                            </div>
            
                            <div class="fifth-area-plans-division">
            
                                <h2>Premium</h2>
            
                                <div class="plan-info">

                                    <span class="plan-span">Anunciar suas vagas</span>
                                    <i class="fa-solid fa-check" style="color: #69d72d;"></i>

                                </div>

                                <div class="plan-info">

                                    <span class="plan-span">Criação de perfil para sua empresa</span>
                                    <i class="fa-solid fa-check" style="color: #69d72d;"></i>

                                </div>

                                <div class="plan-info">

                                    <span class="plan-span">Visibilidade privilégiada do seu perfil e vagas</span>
                                    <i class="fa-solid fa-check" style="color: #69d72d;"></i>

                                </div>

                                <div id="fifth-area-plans-buy">

                                    <span>R$ 39,99</span>
                                    <a href=""><button>Assine já</button></a>
                    
                                </div>
            
                            </div>

                        </div>

                    </div>

                </section>
                
            @endif

        @endauth

    </main>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/index_swiper.js') }}"></script>

@endsection
