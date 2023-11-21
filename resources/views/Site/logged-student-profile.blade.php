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
    
                    <h2>{{ $user->estudante->idade }} Anos</h2>
    
                    <h3>{{ $enderecoData['bairro'] . ' - ' . $enderecoData['localidade'] . ' - ' . $enderecoData['uf'] }}</h3>
    
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

                    @foreach ($datacursos as $datacurso)

                        <div class="card">

                            <div class="card-text">

                                <h1>{{ $datacurso->curso }}</h1>
                                <h2>{{ $datacurso->escola }}</h2>
                                <h3>{{ $datacurso->periodo }}</h3>
                                <h4>{{ $datacurso->ano_inicio . ' - ' . $datacurso->ano_fim }}</h4>

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

                    @endforeach
    
                    <div class="card">

                        <h1>Adicionar Curso</h1>

                        <div class="card-editor">

                            <div class="modal-icons">

                                <i class="fa-solid fa-plus fa-shake" style="color: #ffffff;" data-bs-toggle="modal" data-bs-target="#add-formation"></i>
                                
                                <!-- Modal -->
                                <div class="modal fade" id="add-formation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered add-modal ">
    
                                        <div class="modal-content centralizer">

                                            <form class="add-container" method="get" action="{{ route('curso.store')}}">
                                                @csrf
                                                <h1 class="text-add">Adicionar Curso</h1>
    
                                                <div class="add-form">

                                                    <label for="">Nome do curso:</label>
                                                    <select name="curso" id="curso">

                                                        <option value="" disabled selected hidden>Selecione seu curso</option>

                                                        @foreach ($cursos as $curso)
                                                         
                                                            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>    
                                                        
                                                        @endforeach

                                                    </select>

                                                </div>

                                                <div class="add-form">

                                                    <label class="add-label" for="">Instituição:</label>
                                                    <select name="escola" id="escola">

                                                        <option disabled selected hidden>Selecione seu instituição</option>

                                                        @foreach ($escolas as $escola)
                                                         
                                                            <option value="{{ $escola->id }}">{{ $escola->nome }}</option>    
                                                        
                                                        @endforeach

                                                    </select>

                                                </div>

                                                <div class="add-form">

                                                    <label for="">Período</label>
                                                    <select name="periodo" id="periodo">

                                                        <option disabled selected hidden>Selecione seu periodo</option>

                                                        @foreach ($periodos as $periodo)
                                                         
                                                            <option value="{{ $periodo->id }}">{{ $periodo->nome }}</option>    
                                                        
                                                        @endforeach

                                                    </select>

                                                </div>

                                                <div class="add-form-division d-flex">

                                                    <div class="add-form">

                                                        <label for="ano_inicio">Ano de início:</label>
                                                        <input class="add-input middle-input" type="number" name="ano_inicio">
    
                                                    </div>

                                                    <div class="add-form">

                                                        <label for="ano_fim">Ano de termino:</label>
                                                        <input class="add-input middle-input" type="number" name="ano_fim">
    
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

                    <span>Experiências</span>
    
                </div>
    
                <div class="card-area">
                    
                    @foreach ($experiencias as $experiencia)
                        <div class="card">

                            <div class="card-text">

                                <h1>{{ $experiencia->empregador }}</h1>
                                <h2>{{ $experiencia->descricao }}</h2>
                                <h3>{{ $experiencia->modalidade }}</h3>
                                <h4>{{ $experiencia->tempo }}</h4>

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
                    @endforeach

                    <div class="card">

                        <h1>Adicionar Experiência</h1>

                        <div class="card-editor">

                            <div class="modal-icons">

                                <i class="fa-solid fa-plus fa-shake" style="color: #ffffff;" data-bs-toggle="modal" data-bs-target="#add-experience"></i>
                                
                                <div class="modal fade" id="add-experience" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                                    <div class="modal-dialog modal-dialog-centered add-modal">
    
                                        <div class="modal-content centralizer">

                                            <form class="add-container" method="get" action="{{ route('exp.store') }}">
                                                @csrf
                                                <h1 class="text-add">Adicionar Experiência</h1>
    
                                                <div class="add-form">

                                                    <label for="">Nome da empresa ou lugar:</label>
                                                    <input class="add-input full-input" type="text" name="nm_empresa">

                                                </div>

                                                <div class="add-form">

                                                    <label class="add-label" for="">Descrição:</label>
                                                    <input class="add-input full-input" type="text" name="descricao">

                                                </div>

                                                <div class="add-form">

                                                    <label for="modalidade">Formato no qual você trabalhava:</label>
                                                    <select name="modalidade" id="modalidade">

                                                        <option value="" disabled selected hidden>Selecione a modalidade</option>

                                                        @foreach ($modalidades as $modalidade)
                                                         
                                                            <option value="{{ $modalidade->id }}">{{ $modalidade->nome }}</option>    
                                                        
                                                        @endforeach

                                                    </select>

                                                </div>

                                                <div class="add-form-division d-flex">

                                                    <div class="add-form">

                                                        <label for="">Tempo:</label>
                                                        <input class="add-input middle-input" type="text" name="tempo">
    
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

                <button data-bs-toggle="modal" data-bs-target="#profile-edit">Editar Perfil</button>

                <div class="modal fade" id="profile-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
                    <div class="modal-dialog modal-dialog-centered add-modal">

                        <div class="modal-content">

                            <form action="">
                                @csrf
                                <div class="edit-profile">

                                    <h1 class="text-add">Editar Perfil</h1>

                                    <div class="profile-info d-flex">

                                        <div id="img-form">

                                            <label class="profile-label" for="">Foto do Perfil</label>

                                            <label class="picture" for="picture__input" tabIndex="0">
                                                <span class="picture__image"></span>
                                            </label>
                                              
                                            <input type="file" name="picture__input" id="picture__input">

                                        </div>

                                        <div id="info-form">

                                            <div>

                                                <label class="profile-label" for="">Nome de usuário:</label>
                                                <input class="profile-input" type="text">

                                            </div>

                                            <div>

                                                <label class="profile-label" for="">Escola ou Faculdade atual:</label>
                                                <input class="profile-input" type="text" name="" id="">

                                            </div>

                                        </div>

                                    </div>

                                    <div id="about-form">

                                        <label class="profile-label" for="">Sobre mim:</label>
                                        <textarea name="" id="" cols="30" rows="10"></textarea>

                                    </div>

                                    <input class="add-button" type="submit" value="Concluir modifições">

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

                <a href=""><button>Editar Dados</button></a>
                
                <a href="{{ route('vagas')}}"><button>Ver Vagas</button></a>

            </div>

        </div>


    </main>

    <script src="{{ asset('js/modal-forms.js') }}"></script>
    <script src="{{ asset('js/register-user-script.js') }}"></script>

@endsection