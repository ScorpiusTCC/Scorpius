@extends('site/master')

@section('title', 'Atualizar Dados')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/edit-page.css') }}"/>

    <main>

        <div class="card container mt-5 mb-5">

            <div class="row justify-content-center">

                <div class="col-md-6">

                    <form action="" method="post">

                        <h1 class="mt-5 mb-5 display-4">Edite seus dados pessoais</h1>

                        <div class="form-group">

                            <label for="">Titulo da vaga:</label>
                            <input class="edit-input form-control" type="text" name="nome" id="nome" value="">

                        </div>

                        <div class="form-group">

                            <label for="">Descrição da vaga:</label>
                            <textarea class="text-camp form-control" name="" id="" cols="65" rows="10"></textarea>

                        </div>

                        <div class="form-group">

                            <label for="">Período de estágio:</label>
                            <select class="edit-input form-control" name="" id="">

                                <option value="" hidden selected disabled></option>
                                <option value="">Matutino</option>
                                <option value="">Vespertino</option>
                                <option value="">Noturno</option>

                            </select>

                        </div>

                        <div class="form-group">

                            <label for="">Local de trabalho:</label>
                            <select class="edit-input form-control" name="" id="">

                                <option value="" hidden selected disabled></option>
                                <option value="">Presencial</option>
                                <option value="">Remoto</option>
                                <option value="">Híbrido</option>

                            </select>

                        </div>

                        
                        <div class="form-group">

                            <label for="">Categoria do estagio:</label>
                            <input class="edit-input form-control" type="text" name="" id="" value="">

                        </div>

                        <div class="form-group">

                            <div>

                                <label for="">Valor do salário: </label>

                                <div class="checkb">

                                    <input type="checkbox">
                                    <label for="">Não mostrar</label>

                                </div>

                            </div>

                            <input class="edit-input form-control" type="number" name="" id="" value="">

                        </div>

                        <div class="buttons-division mb-5">

                            <a href="{{ route('logged-jobs-profile') }}"><button class="btn edit-button"><</button></a>
                        
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