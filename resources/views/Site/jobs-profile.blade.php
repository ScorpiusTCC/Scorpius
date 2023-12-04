
@extends('site/master')

@section('title', 'Perfil vaga')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs_profile.css') }}">

    <main>

        <div class="container">

            <div class="profile-info mb-5">

                <img class="img-fluid" src="../{{ $vaga->empresa->user->nm_img }}" alt="">

                <div class="text-space">

                    <h3>{{ $vaga->titulo }}</h3>
                    <h4><a href="{{ route('company.show', $vaga->empresa->user->id) }}" > {{ $vaga->empresa->nm_fantasia }} </a></h4>
                    <h5>Guilhermina - Praia Grande - São Paulo</h5>
                    <h6>{{ $vaga->modalidade->nome . '(' . $vaga->periodo->nome . ')' }}</h6>
                    <span>{{ $vaga->categoria->nome }}</span>

                </div>

                <div>

                    <div class="d-flex align-items-center">
                        
                        <a href="{{ route('candidatura.student', $vaga->id) }}">

                            <button class="btn main-btn m-2">Candidatar-se</button>

                        </a>

                    </div>

                </div>

            </div>

            <div class="profile-about p-4 mb-3">

                <h3 class="leads mb-3">Descrição da vaga</h3>

                <h5>{{ $vaga->descricao }}</h5>

            </div>

            <div class="profile-date">

                <div class="salary">

                    <h5 class="lead">R$ {{ str_replace('.', ',', $vaga->salario) }}  (Bruto mensal)</h5>

                </div>

                <div class="date">

                    <h5 class="lead">Publicada em {{ $vaga->created_at->format('d/m/Y') }}</h5>

                </div>

            </div>

        </div>

    </main>

@endsection
