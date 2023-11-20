@extends('site/master')

@section('title', 'Perfil Logado')

@section('content')

    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset("css/student-profile.css") }}"/>

    <main>

        <div id="user-information">

            <div id="user-info-container">

                <div id="profile-img">

                    <img src="{{ $user->nm_img }}" alt="foto fornecida pelo usuário">
    
                </div>
    
                <div id="profile-text">
    
                    <h1>{{ $user->nome }}</h1>
    
                    <h2>Escola ou faculdade atual</h2>
    
                    <h3>Esmeralda - Praia Grande - São Paulo</h3>
    
                </div>

            </div>

        </div>

        <div id="about-me">

            <div id="about-text">

                <h2>Sobre Mim</h2>

                <h3>{{ $user->estudante->sobre }}</h3>

            </div>

        </div>

        <div id="professional-info">

            <div id="user-formations">

                <div class="professional-text">

                    <span>Formação</span>
    
                </div>
    
                <div class="card-area">
    
                    <div class="card">

                        <div class="card-text">

                            <h1>informática para internet </h1>
                            <h2>Etec de Praia Grande</h2>
                            <h3>Integral</h3>
                            <h4>2020 - 2023</h4>

                        </div>

                        <div class="card-editor">

                            <div class="modal-icons">

                                <i class="fa-solid fa-pen-to-square fa-shake" data-bs-toggle="modal" data-bs-target=".edit-modal"></i>
                                    
                                <!-- Modal -->
                                <div class="modal fade edit-modal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered">
    
                                        <div class="modal-content">
    
                                            <div class="modal-body">
    

    
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>

                            </div>

                            <div class="modal-icons">

                                <i class="fa-solid fa-trash fa-shake"  style="color: #ffffff;" data-bs-toggle="modal" data-bs-target=".delete-modal"></i>
                                    
                                <!-- Modal -->
                                <div class="modal fade delete-modal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered">
    
                                        <div class="modal-content">
    
                                            <div class="modal-body">
    
    
    
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>

                            </div>

                        </div>
    
                    </div>

                    <div class="card">

                        <div class="card-text">

                            <h1>informática para internet </h1>
                            <h2>Etec de Praia Grande</h2>
                            <h3>Integral</h3>
                            <h4>2020 - 2023</h4>

                        </div>

                        <div class="card-editor">

                            <div class="modal-icons">

                                <i class="fa-solid fa-pen-to-square fa-shake" data-bs-toggle="modal" data-bs-target=".edit-modal"></i>
                                    
                                <!-- Modal -->
                                <div class="modal fade edit-modal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered">
    
                                        <div class="modal-content">
    
                                            <div class="modal-body">
    

    
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>

                            </div>

                            <div class="modal-icons">

                                <i class="fa-solid fa-trash fa-shake"  style="color: #ffffff;" data-bs-toggle="modal" data-bs-target=".delete-modal"></i>
                                    
                                <!-- Modal -->
                                <div class="modal fade delete-modal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered">
    
                                        <div class="modal-content">
    
                                            <div class="modal-body">
    
    
    
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>

                            </div>

                        </div>
    
                    </div>

                    <div class="card">

                        <div class="card-text">

                            <h1>informática para internet </h1>
                            <h2>Etec de Praia Grande</h2>
                            <h3>Integral</h3>
                            <h4>2020 - 2023</h4>

                        </div>

                        <div class="card-editor">

                            <div class="modal-icons">

                                <i class="fa-solid fa-pen-to-square fa-shake" data-bs-toggle="modal" data-bs-target=".edit-modal"></i>
                                    
                                <!-- Modal -->
                                <div class="modal fade edit-modal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered">
    
                                        <div class="modal-content">
    
                                            <div class="modal-body">
    

    
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>

                            </div>

                            <div class="modal-icons">

                                <i class="fa-solid fa-trash fa-shake"  style="color: #ffffff;" data-bs-toggle="modal" data-bs-target=".delete-modal"></i>
                                    
                                <!-- Modal -->
                                <div class="modal fade delete-modal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered">
    
                                        <div class="modal-content">
    
                                            <div class="modal-body">
    
    
    
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>

                            </div>

                        </div>
    
                    </div>
    
                    <div class="card">

                        <h1>Adicionar Curso</h1>

                        <div class="card-editor">

                            <div class="modal-icons">

                                <i class="fa-solid fa-plus fa-shake" style="color: #ffffff;" data-bs-toggle="modal" data-bs-target="#add-formation"></i>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="add-formation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered add-modal ">
    
                                        <div class="modal-content centralizer">

                                            <form class="add-container" action="">

                                                <h1 class="text-add">Adicionar Curso</h1>
    
                                                <div class="add-form">

                                                    <label for="">Nome do curso:</label>
                                                    <input class="add-input full-input" type="text">

                                                </div>

                                                <div class="add-form">

                                                    <label class="add-label" for="">Local do curso:</label>
                                                    <input class="add-input full-input" type="text">

                                                </div>

                                                <div class="add-form">

                                                    <label for="">Período</label>
                                                    <select name="" id="">

                                                        <option value="" disabled selected hidden>Selecione seu Periodo</option>
                                                        <option value="">Matutino</option>
                                                        <option value="">Vespertino</option>
                                                        <option value="">Noturno</option>
                                                        <option value="">Integral</option>

                                                    </select>

                                                </div>

                                                <div class="add-form-division d-flex">

                                                    <div class="add-form">

                                                        <label for="">Ano de início:</label>
                                                        <input class="add-input middle-input" type="number">
    
                                                    </div>

                                                    <div class="add-form">

                                                        <label for="">Ano de termino:</label>
                                                        <input class="add-input middle-input" type="number">
    
                                                    </div>

                                                </div>

                                                <input class="add-button" type="submit">
    
                                            </form>

                                        </div>
    
                                    </div>
    
                                </div>

                            </div>


                        </div>
                        

                    </div>
    
                </div>

            </div>

            <div id="user-experiences">

                <div class="professional-text">

                    <span>Empresas que já trabalhou</span>
    
                </div>
    
                <div class="card-area">
    
                    <div class="card">

                        <div class="card-text">

                            <h1>Nome da empresa</h1>
                            <h2>O que você fazia na empresa</h2>
                            <h3>Formato no qual você trabalhava</h3>
                            <h4>Tempo na empresa</h4>

                        </div>

                        <div class="card-editor">

                            <div class="modal-icons">

                                <i class="fa-solid fa-pen-to-square fa-shake" data-bs-toggle="modal" data-bs-target=".edit-experience-modal"></i>
                                    
                                <!-- Modal -->
                                <div class="modal fade edit-experience-modal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered">
    
                                        <div class="modal-content">
    
                                            <div class="modal-body">
    

    
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>

                            </div>

                            <div class="modal-icons">

                                <i class="fa-solid fa-trash fa-shake"  style="color: #ffffff;" data-bs-toggle="modal" data-bs-target=".delete-modal"></i>
                                    
                                <!-- Modal -->
                                <div class="modal fade delete-modal" id="" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered">
    
                                        <div class="modal-content">
    
                                            <div class="modal-body">
    
    
    
                                            </div>
    
                                        </div>
    
                                    </div>
    
                                </div>

                            </div>

                        </div>
    
                    </div>

                    <div class="card">

                        <h1>Adicionar Empresa</h1>

                        <div class="card-editor">

                            <div class="modal-icons">

                                <i class="fa-solid fa-plus fa-shake" style="color: #ffffff;" data-bs-toggle="modal" data-bs-target="#add-experience"></i>
                                
                                <div class="modal fade" id="add-experience" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered add-modal ">
    
                                        <div class="modal-content centralizer">

                                            <form class="add-container" action="">

                                                <h1 class="text-add">Adicionar Curso</h1>
    
                                                <div class="add-form">

                                                    <label for="">Nome da empresa:</label>
                                                    <input class="add-input full-input" type="text">

                                                </div>

                                                <div class="add-form">

                                                    <label class="add-label" for="">O que você fazia na empresa:</label>
                                                    <input class="add-input full-input" type="text">

                                                </div>

                                                <div class="add-form">

                                                    <label for="">Formato no qual você trabalhava na empresa:</label>
                                                    <select name="" id="">

                                                        <option value="" disabled selected hidden>Selecione seu Periodo</option>
                                                        <option value="">Remoto</option>
                                                        <option value="">Presencial</option>
                                                        <option value="">Hibrido</option>

                                                    </select>

                                                </div>

                                                <div class="add-form-division d-flex">

                                                    <div class="add-form">

                                                        <label for="">Tempo na empresa:</label>
                                                        <input class="add-input middle-input" type="number">
    
                                                    </div>

                                                </div>

                                                <input class="add-button" type="submit">
    
                                            </form>

                                        </div>
    
                                    </div>
    
                                </div>

                            </div>


                        </div>
                        

                    </div>
    
                </div>

            </div>
        
        </div>

        <div id="edit-buttons">

            <div id="buttons-container">

                <button>Editar Perfil</button>

                <a href=""><button>Editar Dados</button></a>
                
                <a href="{{ route('vagas')}}"><button>Ver Vagas</button></a>

            </div>

        </div>


    </main>

    <script src="{{ asset('js/modal-forms.js') }}"></script>

@endsection