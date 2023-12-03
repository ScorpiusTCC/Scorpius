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
                            <th>Nome da empresa</th>
                            <th>Email</th>
                            <th>CEP</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>fulano</td>
                                <td>fulanodetal@gmail.com</td>
                                <td>1111111</td>
                                <td><i class="fa-regular fa-pen-to-square"></i></td>
                                <td><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target=".exampleModal"></i></td>
                            </tr>
                            <tr>
                                <td>fulano</td>
                                <td>fulanodetal@gmail.com</td>
                                <td>1111111</td>
                                <td><i class="fa-regular fa-pen-to-square"></i></td>
                                <td><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target=".exampleModal"></i></td>
                            </tr>
                            <tr>
                                <td>fulano</td>
                                <td>fulanodetal@gmail.com</td>
                                <td>1111111</td>
                                <td><i class="fa-regular fa-pen-to-square"></i></td>
                                <td><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target=".exampleModal"></i></td>
                            </tr>
                            <tr>
                                <td>fulano</td>
                                <td>fulanodetal@gmail.com</td>
                                <td>1111111</td>
                                <td><i class="fa-regular fa-pen-to-square"></i></td>
                                <td><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target=".exampleModal"></i></td>
                            </tr>
                            <tr>
                                <td>fulano</td>
                                <td>fulanodetal@gmail.com</td>
                                <td>1111111</td>
                                <td><i class="fa-regular fa-pen-to-square"></i></td>
                                <td><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target=".exampleModal"></i></td>
                            </tr>
                            <tr>
                                <td>fulano</td>
                                <td>fulanodetal@gmail.com</td>
                                <td>1111111</td>
                                <td><i class="fa-regular fa-pen-to-square"></i></td>
                                <td><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target=".exampleModal"></i></td>
                            </tr>
                            <tr>
                                <td>fulano</td>
                                <td>fulanodetal@gmail.com</td>
                                <td>1111111</td>
                                <td><i class="fa-regular fa-pen-to-square"></i></td>
                                <td><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target=".exampleModal"></i></td>
                            </tr>
                            <tr>
                                <td>fulano</td>
                                <td>fulanodetal@gmail.com</td>
                                <td>1111111</td>
                                <td><i class="fa-regular fa-pen-to-square"></i></td>
                                <td><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target=".exampleModal"></i></td>
                            </tr>
                            <tr>
                                <td>fulano</td>
                                <td>fulanodetal@gmail.com</td>
                                <td>1111111</td>
                                <td><i class="fa-regular fa-pen-to-square"></i></td>
                                <td><i class="fa-solid fa-trash" data-bs-toggle="modal" data-bs-target=".exampleModal"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

@endsection