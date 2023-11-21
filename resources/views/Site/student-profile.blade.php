@extends('site/master')

@section('title', 'Perfil')

@section('content')

    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset("css/student-profile.css") }}"/>

    <main>

        <div id="user-information">

            <div id="user-info-container">

                <div id="profile-img">

                    <img src="{{ asset('imgs/profile/photo-test.svg') }}" alt="foto fornecida pelo usuário">
    
                </div>
    
                <div id="profile-text">
    
                    <h1>Rodrigo Nascimento</h1>
    
                    <h2>Escola ou faculdade atual </h2>
    
                    <h3>Esmeralda - Praia Grande - São Paulo</h3>
    
                </div>

            </div>

        </div>

        <div id="about-me">

            <div id="about-text">

                <h2>Sobre Mim</h2>

                <h3>Estudante de Ensino Médio apaixonado por tecnologia desde muito jovem. Interessado em linguagens de programação, desenvolvimento web e soluções tecnológicas. Meu objetivo é continuar aprofundando meu conhecimento em T.I e buscar oportunidades práticas para aplicar o que aprendo. Adoraria me conectar com profissionais e estudantes que compartilham os mesmos interesses por esse campo de atuação. Estou em busca da minha primeira oportunidade de emprego na área.</h3>

            </div>

        </div>

        <div id="professional-info">

            <div id="user-formations">

                <div class="professional-text">

                    <span>Formação</span>
    
                </div>
    
                <div class="card-area">
    
                    <div class="card">
    
                        <div class="card-text">

                            <h1>informática para internet </h1>
                            <h2>Etec de Praia Grande</h2>
                            <h3>Integral</h3>
                            <h4>2020 - 2023</h4>

                        </div>
    
                    </div>

                    <div class="card">
    
                        <div class="card-text">

                            <h1>informática para internet </h1>
                            <h2>Etec de Praia Grande</h2>
                            <h3>Integral</h3>
                            <h4>2020 - 2023</h4>

                        </div>
    
                    </div>

                    <div class="card">
    
                        <div class="card-text">

                            <h1>informática para internet </h1>
                            <h2>Etec de Praia Grande</h2>
                            <h3>Integral</h3>
                            <h4>2020 - 2023</h4>

                        </div>
    
                    </div>
    
                </div>

            </div>

            <div id="user-experiences">

                <div class="professional-text">

                    <span>Empresas que já trabalhou</span>
    
                </div>
    
                <div class="card-area">
    
                    <div class="card">

                        <div class="card-text">

                            <h1>Nome da empresa</h1>
                            <h2>O que você fazia na empresa</h2>
                            <h3>Formato no qual você trabalhava</h3>
                            <h4>Tempo na empresa</h4>

                        </div>
    
    
                    </div>
    
                </div>

            </div>
        


        </div>


    </main>

@endsection