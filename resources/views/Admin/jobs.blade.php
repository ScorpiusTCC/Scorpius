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
                        <label class="table-label" for="search2">Pesquisar por área:</label>
                        <input class="table-input" type="text" id="search2">
                    </div>
                </div>
                <div class="table-content-block">
                    <table class="table">
                        <thead>
                            <th>Título da vaga</th>
                            <th>Categoria</th>
                            <th>Empresa</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>

                            @foreach ($vagas as $vaga)
                                
                                <tr>
                                    <td>{{ $vaga->titulo }}</td>
                                    <td>{{ $vaga->categoria->nome }}</td>
                                    <td>{{ $vaga->empresa->nm_fantasia }}</td>

                                    <td><a href="{{ route('admin.job.data-edit', $vaga->id)}}"><i class="fa-regular fa-pen-to-square"></i></a></td>

                                    <td>
                                        <!-- Botão que abre o modal -->
                                        <i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target="#deleteModal_{{ $vaga->id }}"></i>
            
                                        <!-- Modal de confirmação de exclusão -->
                                        <div class="modal fade" id="deleteModal_{{ $vaga->id }}" tabindex="-1" aria-labelledby="deleteModalLabel_{{ $vaga->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content p-4">
                                                    <div class="modal-body text-center">
                                                        <h2 class="display-6">Tem certeza que deseja excluir?</h2>
                                                        <div class="mt-5">
                                                            <!-- Formulário de exclusão -->
                                                            <form action="{{ route('admin.job.delete', $vaga->id)}}" method="POST">
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