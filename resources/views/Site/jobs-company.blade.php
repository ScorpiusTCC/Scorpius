
@extends('site/master')

@section('title', 'Vagas')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/job.css') }}">

    <main>

        <div class="text-area container">

            <div class="text-center">

                <h1 class="display-5">Suas vagas</h1>

            </div>

            <div class="card-area d-flex">

                @foreach ($vagas as $vaga)

                    <div class="card container ">

                        <div class="info-space mb-4">

                            <h4>{{ $vaga->titulo }}</h4>
                            <h5>{{ str_replace('.', ',', $vaga->salario) }} (Bruto mensal)</h5>
                            <h6>{{ $vaga->modalidade->nome . '  (' . $vaga->periodo->nome . ')' }}</h6>

                        </div>


                        <div class="btn-space d-flex justify-content-around align-items-center">

                            <img class="w-25 img-fluid" src="../{{ $vaga->empresa->user->nm_img }}" alt="Img da empresa">

                            <div class="p-4">

                                <h4>{{ $vaga->empresa->nm_fantasia }}</h4>
                                <h5>{{ $vaga->empresa->endereco }}</h5>
                                <h6>Publicado em: {{ $vaga->created_at->format('d/m/Y') }}</h6>
                                @if($vaga->id_status == 2)
                                    <h6 style="color: rgb(236, 11, 11)">Finalizada em: {{ $vaga->updated_at->format('d/m/Y') }}</h6>
                                @else
                                    <h6 style="color: rgb(6, 243, 85)">Em aberto</h6>
                                @endif

                            </div>

                        </div>
                        
                        {{-- <a href="#" class="btn-card btn bottom-0 delete-btn" data-job-id="{{ $vaga->id }}">Excluir</a> --}}
                        <a href="{{ route('profile.job', $vaga->id) }}" class="btn-card btn bottom-0">Ver mais</a>    

                    </div>

                @endforeach

            </div>

        </div>

        {{-- <!-- Modal de confirmação de exclusão -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Confirmação de Exclusão</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir esta vaga?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="#" id="confirmDelete" class="btn btn-danger">Excluir</a>
                    </div>
                </div>
            </div>
        </div> --}}

    </main>

@endsection
