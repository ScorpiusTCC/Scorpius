@extends('site/master')

@section('title', 'Edição de dados empresa')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/edit-student.css') }}"/>

    <main>

        <div class="card container mt-5 mb-5">

            <div class="row justify-content-center">

                <div class="col-md-6">

                    <form action="">

                        <h1 class="mt-5 mb-5 display-4">Editar os dados da empresa</h1>

                        <div class="form-group">

                            <label for="">Nome fantasia</label>
                            <input class="edit-input form-control" type="text" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">Razão social</label>
                            <input class="edit-input form-control" type="text" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">CNPJ</label>
                            <input class="edit-input form-control" type="text" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">Nome do representante</label>
                            <input class="edit-input form-control" type="text" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">E-mail da empresa</label>
                            <input class="edit-input form-control" type="email" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">Telefone comercial da empresa:</label>
                            <input class="edit-input form-control" type="number" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">Telefone celular do representante da empresa:</label>
                            <input class="edit-input form-control" type="number" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>CEP</p> </label>
                            <input class="edit-input form-control" name="cep" type="text" id="cep" value="12345-678" size="10" maxlength="9" onblur="pesquisacep(this.value);">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Rua</p> </label>
                            <input class="edit-input form-control" name="logradouro" type="text" id="logradouro" size="40" value="Sua Rua">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Bairro</p> </label>
                            <input class="edit-input form-control" name="bairro" type="text" id="bairro" size="40" value="Seu Bairro">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Cidade</p> </label>
                            <input class="edit-input form-control" name="cidade" type="text" id="cidade" size="40" value="Sua Cidade">

                        </div>

                        <div class="form-group">

                            <label for=""> <p>Estado</p> </label>
                            <input class="edit-input form-control" name="uf" type="text" id="uf" size="2" value="SE">

                        </div>

                        <div class="buttons-division mb-5">

                            <a href="{{ route('logged-profile') }}"><button class="edit-button btn btn-lg btn-block mb-2"><</button></a>
                            <button class="edit-button btn btn-lg btn-block mb-2">Alterar senha</button>
                            <button class="edit-button btn btn-lg btn-block mb-2" type="submit">Concluir</button>
                            
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>

    <script src="{{ asset('js/register-user-script.js') }}"></script>
    <script src="{{ asset('js/company-scripts.js') }}"></script>

@endsection