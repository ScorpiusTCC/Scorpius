@extends('site/master')

@section('title', 'Perfil')

@section('content')

    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset("css/student-profile.css") }}"/>

    <main>

        <div id="user-information">

            <div id="user-info-container">

                <div id="profile-img">

                    <img src="{{ '../../' . $user->nm_img }}" alt="foto fornecida pelo usuário">

                </div>
    
                <div id="profile-text">
    
                    <h1>{{ $user->nome }}</h1>
    
                    <h2>{{ $user->estudante->idade }} Anos</h2>
    
                    <h3>{{ $enderecoData['bairro'] . ' - ' . $enderecoData['localidade'] . ' - ' . $enderecoData['uf'] }}</h3>
    
                </div>

            </div>

        </div>

        <div id="about-me">

            <div id="about-text">

                <h2>Sobre Mim</h2>

                <h3>{{ $user->estudante->sobre }}</h3>

            </div>

        </div>

        <div id="professional-info">

            <div id="user-formations">

                <div class="professional-text">

                    <span>Formação</span>
    
                </div>
    
                <div class="card-area">
                
                    @foreach ($datacursos as $datacurso)

                    <div class="card">

                        <div class="card-text">

                            <h1>{{ $datacurso->curso }}</h1>
                            <h2>{{ $datacurso->escola }}</h2>
                            <h3>{{ $datacurso->periodo }}</h3>
                            <h4>{{ $datacurso->ano_inicio . ' - ' . $datacurso->ano_fim }}</h4>

                        </div>

                    @endforeach
    
                </div>

            </div>

            <div id="user-experiences">

                <div class="professional-text">

                    <span>Experiências</span>
    
                </div>
    
                <div class="card-area">
    
                    @foreach ($experiencias as $experiencia)

                        <div  class="card">

                            <div class="card-text">

                                <h1>{{ $experiencia->empregador }}</h1>
                                <h2>{{ $experiencia->descricao }}</h2>
                                <h3>{{ $experiencia->modalidade }}</h3>
                                <h4>{{ $experiencia->tempo }}</h4>

                            </div>

                        </div>

                    @endforeach
    
                </div>

            </div>
        
        </div>

    </main>

@endsection