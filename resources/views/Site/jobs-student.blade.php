
@extends('site/master')

@section('title', 'Vagas')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">

    <main>

        <div class="text-area container">

            <div class="text-center">

                <h1 class="display-5">Vagas que você se candidatou  </h1>

            </div>

            <div class="card-area d-flex">

                @foreach ($candidaturas as $candidatura)

                    <div class="card container ">

                        <div class="info-space mb-4">

                            <h4>{{ $candidatura->vaga->titulo }}</h4>
                            <h5>{{ str_replace('.', ',', $candidatura->vaga->salario) }} (Bruto mensal)</h5>
                            <h6>{{ $candidatura->vaga->modalidade->nome . '  (' . $candidatura->vaga->periodo->nome . ')' }}</h6>

                        </div>


                        <div class="btn-space d-flex justify-content-around align-items-center">

                            <img class="w-25 img-fluid" src="../{{ $candidatura->vaga->empresa->user->nm_img }}" alt="Img da empresa">

                            <div class="p-4">

                                <h4>{{ $candidatura->vaga->empresa->nm_fantasia }}</h4>
                                <h5>{{ $candidatura->vaga->empresa->endereco }}</h5>
                                <h6>Publicado em: {{ $candidatura->vaga->created_at->format('d/m/Y') }}</h6>

                            </div>

                        </div>

                        <a href="{{ route('job.show', $candidatura->vaga->id) }}" class="btn-card btn bottom-0">Ver vaga</a>
                        
                    </div>

                @endforeach

            </div>

        </div>

        <nav aria-label="navigation" class="mt-5 d-flex justify-content-center">
            @if ($candidaturas->hasPages())
                <ul class="pagination justify-content-end pt-4 pb-2">
                    <li class="page-item @if ($candidaturas->onFirstPage()) disabled @endif">
                        <a class="page-link link border-dark link-light" style="color: #000;" href="{{ $candidaturas->previousPageUrl() }}" aria-label="Anterior">
                            Anterior
                        </a>
                    </li>
                    @foreach ($candidaturas->getUrlRange(1, $candidaturas->lastPage()) as $page => $url)
                        <li class="page-item @if ($page === $candidaturas->currentPage()) active @endif">
                            <a class="page-link link border-dark link-light" style="color: #000;" href="{{ $url }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach
                    <li class="page-item @if (!$candidaturas->hasMorePages()) disabled @endif">
                        <a class="page-link link border-dark link-light" style="color: #000;" href="{{ $candidaturas->nextPageUrl() }}" aria-label="Próximo">
                            Próximo
                        </a>
                    </li>
                </ul>
            @endif
        </nav>

    </main>

@endsection
