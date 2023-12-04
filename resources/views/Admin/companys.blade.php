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
                <label class="table-label" for="search2">Pesquisar por CEP:</label>
                <input class="table-input" type="text" id="search2">
            </div>
        </div>
        <div class="table-content-block">
            <table class="table">
                <thead>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>CNPJ</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>

                    @foreach ($empresas as $empresa)

                        <tr>
                            <td>{{ $empresa->nm_fantasia }}</td>
                            <td>{{ $empresa->user->email }}</td>
                            <td>{{ $empresa->cnpj }}</td>
                            <td><a href="{{ route('admin.empresa.data-edit', $empresa->id)}}"><i class="fa-regular fa-pen-to-square"></i></a></td>
                            <td>
                                <!-- Botão que abre o modal -->
                                <i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $empresa->user->id }}"></i>

                                <!-- Modal de confirmação de exclusão -->
                                <div class="modal fade" id="deleteModal_{{ $empresa->user->id }}" tabindex="-1" aria-labelledby="deleteModalLabel_{{ $empresa->user->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content p-4">
                                            <div class="modal-body text-center">
                                                <h2 class="display-6">Tem certeza que deseja excluir?</h2>
                                                <div class="mt-5">
                                                    <!-- Formulário de exclusão -->
                                                    <form action="{{ route('admin.company.delete', $empresa->user->id)}}" method="POST">
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

@endsection
