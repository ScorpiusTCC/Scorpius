@extends('site/master')

@section('title', 'Registro')

@section('content')
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset('css/register.css') }}"/>

    <main>

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">

                    <p>Para</p>
                    <p>Candidatos</p>
                    
                    <h4>Descubra as melhores oportunidades</h4>

                    <a href="{{ route('student-register') }}"><button>Cadastre-se já</button></a>

                    <div id="login-area">

                        <p>Já possui uma conta? <a href="{{ route('login') }}">Entrar</a></p>

                    </div>

                </div>

                <div class="swiper-slide">

                    <p>Para</p>
                    <p>Empresas</p>
                    
                    <h4>Encontre os melhores estagiários da Praia Grande!</h4>

                    <a href="{{ route('empresa.create') }}"><button>Cadastre-se já</button></a>

                    <div id="login-area">

                        <p>Já possui uma conta? <a href="{{ route('login') }}">Entrar</a></p>

                    </div>

                </div>

            </div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/registerswiper.js') }}"></script>
    
@endsection
