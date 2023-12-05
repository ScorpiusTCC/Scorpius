
@extends('site/master')

@section('title', 'Perfil vaga')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs_profile.css') }}">

    <main>

        <div class="container">

            <div class="profile-info mb-5">

                <img class="img-fluid" src="../../{{ $vaga->empresa->user->nm_img }}" alt="">

                <div class="text-space">

                    <h3>{{ $vaga->titulo }}</h3>
                    <h4><a href="{{ route('company.show', $vaga->empresa->user->id) }}" > {{ $vaga->empresa->nm_fantasia }} </a></h4>
                    <h5>{{ $enderecoData['bairro'] . ' - ' . $enderecoData['localidade'] . ' - ' . $enderecoData['uf']}}</h5>
                    <h6>{{ $vaga->modalidade->nome . '(' . $vaga->periodo->nome . ')' }}</h6>
                    <span>{{ $vaga->categoria->nome }}</span>

                </div>

                <div>

                    <a href="{{ route('company-jobs-users') }}"><button class="btn main-btn">Ver candidatos</button></a>
                    
                    <div class="d-flex align-items-center">
                        
                        <i class="fa-solid fa-trash-can" style="color: #30599E;" data-bs-toggle="modal" data-bs-target=".exampleModalExit"></i>
                        <a href="{{ route('job.edit', $vaga->id) }}"><button class="btn main-btn m-2">Editar vaga</button></a>

                    </div>

                </div>

            </div>

            <div class="profile-about p-4 mb-3">

                <h3 class="leads mb-3">Descrição da vaga</h3>

                <h5>{{ $vaga->descricao }}</h5>

            </div>

            <div class="profile-date">

                <div class="salary">

                    <h5 class="lead">R$ {{ str_replace('.', ',', $vaga->salario) }} (Bruto mensal)</h5>

                </div>

                <div class="date">

                    <h5 class="lead">Publicada em {{ $vaga->created_at->format('d/m/Y') }}</h5>

                </div>

            </div>

        </div>


        @extends('site/master')

        @section('title', 'Perfil vaga')
        
        @section('content')
        
            <link rel="stylesheet" href="{{ asset('css/jobs_profile.css') }}">
        
            <main>
        
                <div class="container">
        
                    <div class="profile-info mb-5">
        
                        <img class="img-fluid" src="../../{{ $vaga->empresa->user->nm_img }}" alt="">
        
                        <div class="text-space">
        
                            <h3>{{ $vaga->titulo }}</h3>
                            <h4><a href="{{ route('company.show', $vaga->empresa->user->id) }}" > {{ $vaga->empresa->nm_fantasia }} </a></h4>
                            <h5>{{ $enderecoData['bairro'] . ' - ' . $enderecoData['localidade'] . ' - ' . $enderecoData['uf']}}</h5>
                            <h6>{{ $vaga->modalidade->nome . '(' . $vaga->periodo->nome . ')' }}</h6>
                            <span>{{ $vaga->categoria->nome }}</span>
        
                        </div>
        
                        <div>
        
                            <a href="{{ route('company-jobs-users') }}"><button class="btn main-btn">Ver candidatos</button></a>
                            
                            <div class="d-flex align-items-center">
                                
                                <i class="fa-solid fa-trash-can" style="color: #30599E;" data-bs-toggle="modal" data-bs-target=".exampleModalExit"></i>
                                <a href="{{ route('job.edit', $vaga->id) }}"><button class="btn main-btn m-2">Editar vaga</button></a>
        
                            </div>
        
                        </div>
        
                    </div>
        
                    <div class="profile-about p-4 mb-3">
        
                        <h3 class="leads mb-3">Descrição da vaga</h3>
        
                        <h5>{{ $vaga->descricao }}</h5>
        
                    </div>
        
                    <div class="profile-date">
        
                        <div class="salary">
        
                            <h5 class="lead">R$ {{ str_replace('.', ',', $vaga->salario) }} (Bruto mensal)</h5>
        
                        </div>
        
                        <div class="date">
        
                            <h5 class="lead">Publicada em {{ $vaga->created_at->format('d/m/Y') }}</h5>
        
                        </div>
        
                    </div>
        
                </div>
        
                
@extends('site/master')

@section('title', 'Perfil vaga')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs_profile.css') }}">

    <main>

        <div class="container">

            <div class="profile-info mb-5">

                <img class="img-fluid" src="../../{{ $vaga->empresa->user->nm_img }}" alt="">

                <div class="text-space">

                    <h3>{{ $vaga->titulo }}</h3>
                    <h4><a href="{{ route('company.show', $vaga->empresa->user->id) }}" > {{ $vaga->empresa->nm_fantasia }} </a></h4>
                    <h5>{{ $enderecoData['bairro'] . ' - ' . $enderecoData['localidade'] . ' - ' . $enderecoData['uf']}}</h5>
                    <h6>{{ $vaga->modalidade->nome . '(' . $vaga->periodo->nome . ')' }}</h6>
                    <span>{{ $vaga->categoria->nome }}</span>

                </div>

                <div>

                    <a href="{{ route('show.candidatos', $vaga->id) }}"><button class="btn main-btn">Ver candidatos</button></a>
                    
                    <div class="d-flex align-items-center">
                        
                        <i class="fa-solid fa-trash-can" style="color: #30599E; cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModalExit"></i>
                        <a href="{{ route('job.edit', $vaga->id) }}"><button class="btn main-btn m-2">Editar vaga</button></a>

                    </div>

                </div>

            </div>

            <div class="profile-about p-4 mb-3">

                <h3 class="leads mb-3">Descrição da vaga</h3>

                <h5>{{ $vaga->descricao }}</h5>

            </div>

            <div class="profile-date">

                <div class="salary">

                    <h5 class="lead">R$ {{ str_replace('.', ',', $vaga->salario) }} (Bruto mensal)</h5>

                </div>

                <div class="date">

                    <h5 class="lead">Publicada em {{ $vaga->created_at->format('d/m/Y') }}</h5>

                </div>

            </div>

        </div>

        <div class="modal fade" id="exampleModalExit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content p-4">
                    <div class="modal-body text-center">
                        <h2 class="display-6">Tem certeza que deseja excluir essa vaga?</h2>
                        <div class="mt-5">
                            <form action="{{ route('job.destroy', $vaga->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-lg btn-success">Sim</button>
                                <button class="btn btn-lg btn-danger m-4" data-bs-dismiss="modal">Não</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

    </main>

@endsection

        
            </main>
        
        @endsection
        
    </main>

@endsection
