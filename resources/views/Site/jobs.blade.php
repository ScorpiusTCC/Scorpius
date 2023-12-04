
@extends('site/master')

@section('title', 'Vagas')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/jobs.css') }}">

    <main>

        <div class="filter-area container mb-4 ">

            <form id="filtroForm" class="d-flex" action="{{ route('filter.jobs') }}" method="get">

                <input class="search form-control flex-grow-1" placeholder="Buscar vaga" type="text" name="searchName" id="searchName" value="{{ request('searchName') }}">

                <div class="dropdown">

                    <button class="dropdown-toggle btn btn-large" data-bs-toggle="dropdown" aria-expanded="false">Mais filtros</button>
                    
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    
                        <div class="filters container d-flex flex-column justify-content-center align-items-center">
    
                            <div class="form-group text-center mb-3 mt-4">
    
                                <h3>Período de estágio:</h3>

                                <div class="d-flex flex-wrap">

                                    <div class="d-flex mb-2">

                                        @foreach ($periodos as $periodo)
                                            
                                            <input type="checkbox" class="check-input form-check-input" id="periodo{{ $periodo->id }}" name="periodos[]" value="{{ $periodo->id }}" {{ in_array($periodo->id, (array) request('periodos', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label lead filter-label" for="periodo{{ $periodo->id }}">{{ $periodo->nome }}</label>

                                        @endforeach

                                    </div>
                                
                                </div>

                            </div>

                            <div class="form-group text-center mb-3 mt-4">
    
                                <h3>Período de estágio:</h3>

                                <div class="d-flex flex-wrap">

                                    <div class="d-flex mb-2">

                                        @foreach ($modalidades as $modalidade)
                                            
                                            <input type="checkbox" class="check-input form-check-input" id="modalidade{{ $modalidade->id }}" name="modalidades[]" value="{{ $modalidade->id }}" {{ in_array($modalidade->id, (array) request('modalidades', [])) ? 'checked' : '' }}>
                                            <label class="form-check-label lead filter-label" for="modalidade{{ $modalidade->id }}">{{ $modalidade->nome }}</label>

                                        @endforeach

                                    </div>
                                
                                </div>

                            </div>
                            
                            <div class="form-group mb-3">
                                <h4>Categoria do estágio:</h4>

                                <select name="categoria" id="categoria">

                                    <option disabled selected hidden>Selecionar</option>

                                    @foreach ($categorias as $categoria)
                                            
                                        <option value="{{ $categoria->id }}" @if(request('categoria') == $categoria->id) selected @endif>{{ $categoria->nome }}</option>

                                    @endforeach

                                </select>

                            </div>
                    
                            <div class="form-group text-center mb-3">

                                <div class="mb-3">

                                    <label class="form-check-label lead filter-label" for="dropdownCheck">Valor mínimo:</label>
                                    <input type="number" class="form-control" id="valorMinimo" name="valor_minimo" value="{{ request('valor_minimo') }}">

                                </div>

                                <div>

                                    <label class="form-check-label lead filter-label" for="dropdownCheck">Valor máximo:</label>
                                    <input type="number" class="form-control" id="valorMaximo" name="valor_maximo" value="{{ request('valor_maximo') }}">

                                </div>

                            </div>
                            
                            <button type="reset" class="filter-btn btn btn-lg" onclick="resetCheckboxes()">Limpar</button>

                        </div>
    
                    </div>

                </div>

                <button type="submit" class="filter-btn btn btn-lg">Pesquisar</button>

            </form>

        </div>

        <div class="text-area container">

            <div class="text-center">

                <h1 class="display-5">Vagas Disponíves</h1>

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

                            <img class="w-25 img-fluid" src="@if(isset($ajuste_vaga))../@endif{{ $vaga->empresa->user->nm_img }}" alt="Img da empresa">

                            <div class="p-4">

                                <h4>{{ $vaga->empresa->nm_fantasia }}</h4>
                                <h5>{{ $vaga->empresa->endereco }}</h5>
                                <h6>Publicado em: {{ $vaga->created_at->format('d/m/Y') }}</h6>

                            </div>

                        </div>

                        <a href="{{ route('job.show', $vaga->id) }}" class="btn-card btn bottom-0">Mais sobre</a>

                    </div>

                @endforeach

            </div>

        </div>


        <nav aria-label="navigation" class="mt-5 d-flex justify-content-center">

            @if ($vagas->hasPages())
        
                <ul class="pagination justify-content-end pt-4 pb-2"> 
        
                    <li class="page-item @if ($vagas->onFirstPage()) disabled @endif">
                        <a class="page-link link border-dark link-light" style="color: #000;" href="{{ $vagas->previousPageUrl() }}" aria-label="Anterior">
                            Anterior
                        </a>
                    </li>
        
                    @foreach (range(1, $vagas->lastPage()) as $page)
                        <li class="page-item @if ($page === $vagas->currentPage()) active @endif">
                            <a class="page-link link border-dark link-light" style="color: #000;" href="{{ $vagas->url($page) }}">
                                {{ $page }}
                            </a>
                        </li>
                    @endforeach
        
                    <li class="page-item @if (!$vagas->hasMorePages()) disabled @endif">
                        <a class="page-link link border-dark link-light" style="color: #000;" href="{{ $vagas->nextPageUrl() }}" aria-label="Próximo">
                            Próximo
                        </a>
                    </li>
        
                </ul>
        
            @endif
        
        </nav>
        
    </main>

@endsection
