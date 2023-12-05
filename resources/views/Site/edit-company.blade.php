@extends('site/master')

@section('title', 'Edição de dados empresa')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/edit-page.css') }}"/>

    <main>

        <div class="card container mt-5 mb-5">

            <div class="row justify-content-center">

                <div class="col-md-6">

                    <form action="{{ route('empresa.data-store') }}" method="post">
                        @csrf
                        <h1 class="mt-5 mb-5 display-4">Editar os dados da empresa</h1>

                        <div class="form-group">

                            <label for="">Nome fantasia</label>
                            <input class="edit-input form-control" type="text" name="nm_fantasia" id="nm_fantasia" value="{{ $empresa->nm_fantasia}}">

                        </div>

                        <div class="form-group">

                            <label for="">Razão social</label>
                            <input class="edit-input form-control" type="text" name="razao_social" id="razao_social" value="{{ $empresa->razao_social}}">

                        </div>

                        <div class="form-group">

                            <label for="">CNPJ</label>
                            <input class="edit-input form-control" type="text" name="cnpj" id="cnpj" value="{{ $empresa->cnpj}}" disabled>

                        </div>

                        <div class="form-group">

                            <label for="">E-mail</label>
                            <input class="edit-input form-control" type="email" name="email" id="email" value="{{ $empresa->representante->email}}">

                        </div>

                        <div class="form-group">

                            <label for="">Nome do representante</label>
                            <input class="edit-input form-control" type="text" name="nm_representante" id="nm_representante" value="{{ $empresa->representante->nm_representante}}">

                        </div>
            
                        <div class="form-group">

                            <label for="">CPF do representante</label>
                            <input class="edit-input form-control" type="text" name="cpf_representante" id="cpf_representante" value="{{ $empresa->representante->cpf_representante}}">

                        </div>

                        <div class="form-group">

                            <label for="">Telefone comercial da empresa:</label>
                            <input class="edit-input form-control" type="text" name="telefone_comercial" id="telefone_comercial" value="{{ $empresa->representante->telefone_comercial}}">

                        </div>

                        <div class="form-group">

                            <label for="">Telefone celular do representante da empresa:</label>
                            <input class="edit-input form-control" type="text" name="telefone_celular" id="telefone_celular" value="{{ $empresa->representante->telefone_celular}}">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>CEP</p> </label>
                            <input class="edit-input form-control" name="cep" type="text" id="cep" value="{{ $empresa->cep}}" size="10" maxlength="9" onblur="pesquisacep(this.value);">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Rua</p> </label>
                            <input class="edit-input form-control" name="logradouro" type="text" id="logradouro" size="40" value="{{ $enderecoData['logradouro'] }}">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Número</p> </label>
                            <input class="edit-input form-control" name="numero" type="text" id="numero" size="40" value="{{ $empresa->numero }}">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Bairro</p> </label>
                            <input class="edit-input form-control" name="bairro" type="text" id="bairro" size="40" value="{{ $enderecoData['bairro'] }}">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Cidade</p> </label>
                            <input class="edit-input form-control" name="cidade" type="text" id="cidade" size="40" value="{{ $enderecoData['localidade'] }}">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Estado</p> </label>
                            <input class="edit-input form-control" name="uf" type="text" id="uf" size="2" value="{{ $enderecoData['uf'] }}">

                        </div>

                        <div class="buttons-division mb-5">

                            <a href="{{ route('company.profile') }}" class="btn btn-link btn-lg btn-block mb-2"><</a>
                            <button class="edit-button btn btn-lg btn-block mb-2">Alterar senha</button>
                            <button class="edit-button btn btn-lg btn-block mb-2" type="submit">Concluir</button>
                            
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>

    <script src="{{ asset('js/register-user_script.js') }}"></script>
    <script src="{{ asset('js/company-scripts.js') }}"></script>

@endsection