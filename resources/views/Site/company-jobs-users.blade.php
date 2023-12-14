@extends('site/master')

@section('title', 'Candidatos para vaga')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/company-jobs-users.css') }}">

    <main>

        <div class="container">

            <div class="text-center mb-4">

                <h1 class="display-5">Candidatos a sua vaga</h1>

                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pesquise candidatos por bairro 
                    </button>
                    <ul class="dropdown-menu" style="max-height: 200px; overflow-y: auto;">
                        @foreach ($bairros as $bairro)
                            <li><a class="dropdown-item" href="{{ route('show.candidatos.bairro', ['id_vaga' => $id_vaga, 'id_bairro' => $bairro->id]) }}">{{ $bairro->nome }}</a></li>
                        @endforeach
                    </ul>
                </div>
                

            </div>

            <div class="card-area">

                @foreach ($candidatos as $candidato)
                    
                    <div class="card mb-4"> 

                        <div class="mb-3">

                            <h3>{{ $candidato->estudante->nome}}</h3>
                            <span>Email: {{ $candidato->estudante->contato->email}}</span>
                            <br>
                            <span>Telefone: {{ $candidato->estudante->contato->telefone_celular}}</span>

                        </div>

                        <div class="text-center mb-2">

                            <img class="img-fluid" src="@if(isset($ajuste)){{$ajuste}}@endif{{ $candidato->estudante->user->nm_img }}" alt="">
                            <h6 class="">Se candidatou em {{ $candidato->created_at->format('d/m/Y') }}</h6>

                        </div>

                        <div class="d-flex justify-content-evenly align-items-center">

                            <a href="{{ route('student.show', $candidato->estudante->user->id) }}"><button class="btn btn-card">Abrir perfil</button></a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </main>

@endsection
