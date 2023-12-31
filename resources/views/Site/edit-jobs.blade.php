@extends('site/master')

@section('title', 'Atualizar Dados')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/edit-page.css') }}"/>

    <main>

        <div class="card container mt-5 mb-5">

            <div class="row justify-content-center">

                <div class="col-md-6">

                    <form action="{{ route('job.update', $vaga->id) }}" method="post">
                        @csrf
                        <h1 class="mt-5 mb-5 display-4">Edite seus dados pessoais</h1>

                        <div class="form-group">

                            <label for="">Titulo da vaga:</label>
                            <input class="edit-input form-control" type="text" name="titulo" id="titulo" value="{{ $vaga->titulo }}">

                        </div>

                        <div class="form-group">

                            <label for="">Descrição da vaga:</label>
                            <textarea class="text-camp form-control" name="descricao" id="descricao" cols="65" rows="10">{{ $vaga->descricao }}</textarea>

                        </div>

                        <div class="form-group">

                            <label for="">Período de estágio:</label>
                            <select name="periodo" id="periodo">

                                <option disabled selected hidden>Selecionar</option>

                                @foreach ($periodos as $periodo)
                                        
                                    <option value="{{ $periodo->id }}"
                                        @if ($periodo->id === $vaga->periodo->id)
                                        selected
                                        @endif
                                    >{{ $periodo->nome }}</option>

                                @endforeach

                            </select>

                        </div>

                        <div class="form-group">

                            <label for="">Local de trabalho:</label>
                            <select name="modalidade" id="modalidade">

                                <option disabled selected hidden>Selecionar</option>

                                @foreach ($modalidades as $modalidade)
                                        
                                    <option value="{{ $modalidade->id }}"
                                        @if ($modalidade->id === $vaga->modalidade->id)
                                        selected
                                        @endif
                                    >{{ $modalidade->nome }}</option>

                                @endforeach

                            </select>

                        </div>
                        
                        <div class="form-group">

                            <label for="">Categoria do estágio:</label>
                            <select name="categoria" id="categoria">

                                <option value="" disabled selected hidden>Selecionar</option>

                                @foreach ($categorias as $categoria)
                                        
                                    <option value="{{ $categoria->id }}"
                                        @if ($categoria->id === $vaga->categoria->id)
                                        selected
                                        @endif
                                    >{{ $categoria->nome }}</option>

                                @endforeach

                            </select>

                        </div>

                        <div class="form-group">

                            <div>

                                <label for="">Valor do salário: </label>

                                <div class="checkb">

                                    <input type="checkbox">
                                    <label for="">Não mostrar</label>

                                </div>

                            </div>

                            <input class="edit-input form-control" type="number" name="salario" id="salario" value="{{ $vaga->salario }}">

                        </div>

                        <div class="buttons-division mb-5">

                            <button class="btn edit-button"><a href="{{ route('company.jobs') }}"><</a></button>
                        
                            <button class="edit-button btn btn-lg btn-block mb-2" type="submit">Concluir</button>
                            
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>

    <script src="{{ asset('js/register-user_script.js') }}"></script>
    <script src="{{ asset('js/student-scripts.js') }}"></script>

@endsection