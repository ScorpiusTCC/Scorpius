@extends('site/master')

@section('title', 'Sobre nós')

@section('content')
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset('css/about.css') }}"/>

    <main>

        <section id="first-area">

            <div id="first-area-image">

                <img src="{{ asset('imgs/about-us/first-area-image.svg') }}" alt="">

            </div>

            <div id="first-area-text">

                <h1>O que fazemos?</h1>
                <h3>Nós da Scorpius Enterprise desenvolvemos plataformas online com o intuito de alcançar grandes e pequenas empresas para mostrar nossos projetos e buscar oportunidades no mercado de trabalho.</h3>

            </div>

        </section>

        <section id="second-area"> 

            <div id="second-area-text">

                <h1>Quem Somos</h1>

            </div>

        </section>

    </main>
    
@endsection
