@extends('admin/master')

@section('content')

    <section class="content">
        <div class="table-block">
            <div class="table-block-head">
                <div class="table-search">
                    <label class="table-label" for="search">Pesquisar por nome:</label>
                    <input class="table-input" type="text" id="search">
                </div>
                <div class="table-search">
                    <label class="table-label" for="search2">Pesquisar por escola:</label>
                    <input class="table-input" type="text" id="search2">
                </div>
            </div>
            <div class="table-content-block">
                <table class="table">
                    <thead>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>

                        @foreach ($estudantes as $estudante)

                            <tr>
                                <td>{{ $estudante->nome }}</td>
                                <td>{{ $estudante->contato->email}}</td>
                                <td>{{ $estudante->cpf }}</td>
                                
                                <td><a href="{{ route('admin.student.data-edit', $estudante->id)}}"><i class="fa-regular fa-pen-to-square"></i></a></td>

                                <td>
                                    <!-- Botão que abre o modal -->
                                    <i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $estudante->user->id }}"></i>
        
                                    <!-- Modal de confirmação de exclusão -->
                                    <div class="modal fade" id="deleteModal_{{ $estudante->user->id }}" tabindex="-1" aria-labelledby="deleteModalLabel_{{ $estudante->user->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content p-4">
                                                <div class="modal-body text-center">
                                                    <h2 class="display-6">Tem certeza que deseja excluir?</h2>
                                                    <div class="mt-5">
                                                        <!-- Formulário de exclusão -->
                                                        <form action="{{ route('admin.student.delete', $estudante->user->id)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-lg btn-success">Sim</button>
                                                        </form>
                                                        <button class="btn btn-lg btn-danger m-4" data-bs-dismiss="modal">Não</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <script>
        // Adicionando uma classe específica para distinguir os formulários
        document.addEventListener('DOMContentLoaded', function () {
            var deleteForms = document.querySelectorAll('.delete-form');

            deleteForms.forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!confirm('Tem certeza que deseja excluir?')) {
                        event.preventDefault();
                    }
                });
            });
        });
    </script>

@endsection
