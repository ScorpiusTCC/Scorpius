@extends('site/master')

@section('title', 'Edição de dados estudante')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/edit-student.css') }}"/>

    <main>

        <div class="card container mt-5 mb-5">

            <div class="row justify-content-center">

                <div class="col-md-6">

                    <form action="">

                        <h1 class="mt-5 mb-5 display-4">Edite seus dados pessoais</h1>

                        <div class="form-group">

                            <label for="">Nome Completo</label>
                            <input class="edit-input form-control" type="text" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">E-mail principal</label>
                            <input class="edit-input form-control" type="email" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">Telefone</label>
                            <input class="edit-input form-control" type="text" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">CPF</label>
                            <input class="edit-input form-control" type="text" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">Data de nascimento </label>
                            <input class="edit-input form-control" type="date" name="" id="">

                        </div>

                        <div class="form-group">

                            <label for="">Gênero</label>
                            <select class="edit-input form-control" name="" id="">

                                <option value="" disabled selectd hidden>Selecionar</option>
                                <option value="">Muie</option>
                                <option value="">Homi</option>
                                <option value="">Outro</option>
                                <option value="">Lobisomen</option>

                            </select>

                        </div>

                        <div class="form-group">

                            <label for=""> <p>CEP</p> </label>
                            <input class="edit-input form-control" name="cep" type="text" id="cep" value="12345-678" size="10" maxlength="9" onblur="pesquisacep(this.value);">

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

@endsection