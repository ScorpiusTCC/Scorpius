@extends('site/master')

@section('title', 'Perfil Empresa')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/company-profile.css') }}"/>

    <main>

        <div class="information-container container">

            <div class="profile-area p-4">

                <div class="text-image">

                    <img src="../../{{ $user->nm_img}}" alt="logotipo da empresa">

                    <div>

                        <p>{{ $empresa->nm_fantasia }}</p>
                        <span>{{ $enderecoData['bairro'] . ' - ' . $enderecoData['localidade'] }}</span>
                        <br>
                        <span>{{ $empresa->endereco }}</span>

                    </div>

                </div>

                <a class="text-decoration-none" href="">

                    <div class="job-integration mt-4 p-2">

                        <h4 class="lead">Acesse o chat com a empresa clicando aqui</h4>

                    </div>

                </a>

            </div>

            <div class="info-area">

                    <h2 class="display-6">Seja bem-vindo a {{ $empresa->nm_fantasia }}</h2>

                    <div class="text-info p-3">

                        <span class="h5 text-nowrap">Tenha acesso as vagas disponiblizadas por essa empresa</span>
                        
                        <a href="{{ route('index.job') }}"><button class="btn info-btn btn-lg lead">Acessar vagas</button></a>
                        
                    </div>

            </div>


        </div>

        <div class="about-area container mt-5">

            <div>

                <h2 class=" display-5 mb-3">Sobre a empresa</h2>
                <h3 class="lead">{{ $empresa->descricao }}</h3>

            </div>

        </div>

    </main>

    <script src="{{ asset('js/register-user-script.js') }}"></script>

@endsection
