@extends('site/master')

@section('title', 'Perfil Empresa')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/company-profile.css') }}"/>

    <main>

        <div id="information-container">

            <div id="profile-area">

                <div class="text-image">

                    <img src="" alt="logotipo da empresa">

                    <div>

                        <p>MICROSOFT INFORMÁTICA LTDA.</p>
                        <span>Guilhermina - Praia Grande</span>

                    </div>

                </div>

                <div id="job-integration">

                    <div class="text-image">

                        <a href=""><button>+</button></a>
                        <h3>Anunciar Vagas</h3>

                    </div>

                    <h4>Divulgue aqui suas vagas de estágio de forma simples e eficaz. Encontre centenas de pessoas.</h4>

                </div>

            </div>

            <div id="info-area">

                    <h2>Olá, Microsoft. Boas-vindas à Scorpius!</h2>

                    <div class="text-info">

                        <span>Melhore o processo de seleção de candidatos</span>

                        <div id="text-separation">

                            <h3>Conheça nosso plano para ter acesso a recursos adicionais, bem como para aumentar a visibilidade de suas oportunidades. Destaque suas vagas de estágio e atraia pessoas qualificadas. </h3>
                            <img src="{{ asset('imgs/company-profile/jornal.svg') }}" alt="imagem de um jornal com uma lupa">

                        </div>

                        <a href="{{ route('index') }}"><button>Saiba Mais</button></a>
                        
                    </div>

            </div>


        </div>

        <div id="resources-area">

            <h1>Mais dos nossos recursos</h1>

            <div id="resources-container">

                <div class="resource-card">

                    <h2>Minhas Vagas</h2>

                    <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis quibusdam iste molestias iure assumenda voluptate debitis, ad aperiam aut ab, voluptas vel, delectus magni id fugiat. Animi doloribus voluptatibus enim.</h3>

                </div>

                <div class="resource-card">

                    <h2>Procurar Candidatos</h2>

                    <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet a nostrum deserunt dolorem ipsa amet nemo ea nisi non molestias. Ex corporis fuga nemo eius error quaerat similique culpa aut?</h3>

                </div>

                <div class="resource-card">

                    <h2>Dados da Empresa</h2>

                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque voluptatibus consectetur inventore tenetur corrupti dolorum eius in adipisci voluptas at officiis, nemo ipsum, sapiente, fugit ex corporis quae et perspiciatis.</h3>

                </div>

            </div>

        </div>

    </main>
@endsection
