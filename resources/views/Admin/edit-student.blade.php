@extends('admin/master')

@section('title', 'Atualizar Dados')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/edit-page.css') }}"/>

    <main>

        <div class="card container mt-5 mb-5">

            <div class="row justify-content-center">

                <div class="col-md-6">

                    <form action="{{ route('admin.student.data-store') }}" method="post">
                        @csrf
                        <h1 class="mt-5 mb-5 display-4">Editar dados do estudante</h1>


                        <input type="hidden" name="id_estudante" value="{{ $estudante->id }}">
                        <div class="form-group">

                            <label for="">Nome Completo</label>
                            <input class="edit-input form-control" type="text" name="nome" id="nome" value="{{ $estudante->nome }}">

                        </div>

                        <div class="form-group">

                            <label for="">E-mail principal</label>
                            <input class="edit-input form-control" type="email" name="email" id="email" value="{{ $estudante->contato->email }}">

                        </div>

                        <div class="form-group">

                            <label for="">Telefone</label>
                            <input class="edit-input form-control" type="text" name="telefone" id="telefone" value="{{ $estudante->contato->telefone_celular }}">

                        </div>

                        <div class="form-group">

                            <label for="">CPF</label>
                            <input class="edit-input form-control" type="text" name="cpf" id="cpf" value="{{ $estudante->cpf }}" disabled>

                        </div>

                        <div class="form-group">

                            <label for="">Data de nascimento </label>
                            <input class="edit-input form-control" type="date" name="data_nasc" id="data_nasc" value="{{ $estudante->data_nasc }}">

                        </div>

                        <div class="form-group">

                            <label for="">Gênero</label>
                            <select class="edit-input form-control" name="sexo" id="sexo">

                                @foreach ($sexos as $sexo)
                            
                                    <option value="{{ $sexo->id }}"
                                        @if ($sexo->id === $estudante->sexo->id)
                                            selected
                                        @endif
                                    >{{ $sexo->nome }}</option>

                                @endforeach
                                
                            </select>

                        </div>

                        <div class="form-group">

                            <label for=""> <p>CEP</p> </label>
                            <input class="edit-input form-control" name="cep" type="text" id="cep" value="{{ $estudante->cep }}" size="10" maxlength="9" onblur="pesquisacep(this.value);">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Bairro</p> </label>
                            <input class="edit-input form-control" name="bairro" type="text" id="bairro" value="{{ $endereco['bairro'] }}" size="40">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Cidade</p> </label>
                            <input class="edit-input form-control" name="cidade" type="text" id="cidade" value="{{ $endereco['localidade'] }}" size="40">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Estado</p> </label>
                            <input class="edit-input form-control" name="uf" type="text" id="uf" value="{{ $endereco['uf'] }}" size="2">

                        </div>  

                        <div class="buttons-division mb-5">

                            <a href="{{ route('admin.students') }}" class="btn edit-button"><</a>
                            <button class="edit-button btn btn-lg btn-block mb-2">Alterar senha</button>
                            <button class="edit-button btn btn-lg btn-block mb-2" type="submit">Concluir</button>
                            
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>

    <script src="{{ asset('js/register-user-script.js') }}"></script>
    <script src="{{ asset('js/student-scripts.js') }}"></script>

@endsection