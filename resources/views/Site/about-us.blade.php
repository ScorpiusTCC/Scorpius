@extends('site/master')

@section('title', 'Sobre nós')

@section('content')

    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset('css/sobre-nos.css') }}"/>

    <main>

        <section class="">

            <div class="text-area">

                <h1>O que fazemos?</h1>

            </div>

            <div class="scorpius d-flex justify-content-center align-items-center">

                <h3>Nós da Scorpius Enterprise desenvolvemos plataformas on-line com o intuito de conseguir alcançar grandes e pequenas empresas para mostrar nossos projetos e conseguir oportunidades no mercado de trabalho.</h3>
                <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

            </div>

        </section>

        <section>

            <div class="text-area">

                <h1>Quem somos</h1>

            </div>

            <!-- Slider main container -->
            <div class="swiper">

                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <!-- Slides -->
                    <div class="swiper-slide">

                        <h2>Rodrigo Torres do Nascimento</h2>
                        <img src="{{ asset('imgs/about-us/torres.svg') }}" alt="">
                        <h2>É responsável pelo Front-end da plataforma Scorpius.
                            Deseja atuar como programador front-end e aprender mais sobre back-end.</h2>

                    </div>

                    <div class="swiper-slide">

                        <h2>Mateus Pereira Firmino Sampaio</h2>
                        <img src="{{ asset('imgs/about-us/mateus.svg') }}" alt="">
                        <h2>É reponsável pelo back-end e banco de dados do projeto Scorpius. Tem como objetivo atuar em engenharia de dados e back-end no futuro. </h2>

                    </div>

                    <div class="swiper-slide">

                        <h2>Bouneval Resende Alencar Júnior</h2>
                        <img src="{{ asset('imgs/about-us/bone.svg') }}" alt="">
                        <h2>Atua como design, documentador e ajuda os outros integrantes.
                            Deseja atuar na área de economia.</h2>

                    </div>

                    <div class="swiper-slide">

                        <h2>Rodrigo Lourenço Pena</h2>
                        <img src="{{ asset('imgs/about-us/pena.svg') }}" alt="">
                        <h2>Responsável pela documentação da plataforma e marketing digital. Deseja atuar na área de gastronomia.</h2>

                    </div>

                    <div class="swiper-slide">

                        <h2>Guilherme Henrique Santana de Amorim</h2>
                        <img src="{{ asset('imgs/about-us/amorim.svg') }}" alt="">
                        <h2>Responsável pela documentação da plafaforma, mas também possui interesse em back-end e front-end. Pretente trabalhar futuramente com foco no Back-end</h2>

                    </div>


                </div>

                <!-- If we need pagination -->
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
                
            </div>

            

        </section>

        <section>

            <div class="text-area">

                <h1>SAC</h1>

            </div>

            <div class="SAQ">

                <form action="">

                    <div>
                        
                        <label for="">Digite seu nome:</label>
                        <input class="SAQ-input" type="text">

                    </div>

                    <div>

                        <label for="">Digite seu e-mail:</label>
                        <input class="SAQ-input" type="text">

                    </div>

                    <div>

                        <label for="">Digite aqui sua dúvida ou reclamação:</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>

                    </div>


                    <div class="d-flex justify-content-center" >

                        <button type="submit" class="">Confirmar</button>
                        
                    </div>

                </form>

            </div>

        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/about-us.js') }}"></script>
    
@endsection
