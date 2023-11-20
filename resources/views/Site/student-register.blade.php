@extends('site.master')

@section('title', 'Registro Estudante')

@section('content')
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset('css/register-userr.css') }}"/>

    <main>

        <form action="{{ route('submitEstudante') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide 1">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>1</b> de <b>5</b></p>
                                <span>Insira seus dados de contato</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>Nome Completo <span>*</span> </p> </label>
                                    <input type="text" name="nome_completo" id="nome_completo" value="Fulano de Tal">

                                </div>

                                <div class="form">

                                    <label for=""> <p>E-mail principal <span>*</span> </p> </label>
                                    <input type="email" name="email" id="email" value="fulano@example.com">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Telefone <span>*</span> (com DD) </p> </label>
                                    <input type="telefone" name="telefone" id="telefone" value="(00) 1234-5678">

                                </div>

                            </div>

                        </div>

                        <div id="third-division">

                            <div id="buttons-division">

                                <button id="next-button">Continuar</button>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide 2">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>2</b> de <b>5</b></p>
                                <span>Crie sua senha de acesso</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <input type="text" name="password" id="password" placeholder="Coloque aqui a sua senha" value="suasenha123">

                                    <div id="security-indicator">

                                        <h3>Indicador de Segurança:</h3> <span id="indicador"></span>

                                    </div>

                                    <div id="password-rules">

                                        <ul>

                                            <li>Não ter letras e números repetidos ou sequenciais, ex: aaa,123</li>
                                            <li>Mínimo de 8 caracteres.</li>
                                            <li>Mínimo de 1 elemento especial (#$%@)</li>
                                            <li>Mínimo de 1 número.</li>
                                            <li>Ter letras minúsculas.</li>
                                            <li>Ter letras MAIÚSCULAS.</li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div id="third-division">

                            <button id="prev-button"><</button>

                            <button id="next-button">Continuar</button>

                        </div>

                    </div>

                    <div class="swiper-slide 3">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>3</b> de <b>5</b></p>
                                <span>Dados Pessoais</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>CPF <span>*</span> </p> </label>
                                    <input type="text" name="cpf" id="cpf" oninput="mascara(this)" maxlength="11" value="12345678909">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Data de Nascimento <span>*</span> </p> </label>
                                    <input type="date" name="data_nasc" id="data_nasc" maxlength="8" value="19900101">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Gênero <span>*</span></p> </label>
                                    <select name="sexo" id="sexo">

                                        <option value="" disabled>Selecionar</option>

                                        @foreach ($sexos as $sexo)
                                            
                                            <option value="{{ $sexo->id }}" selected>{{ $sexo->nome }}</option>

                                        @endforeach

                                    </select>

                                </div>

                            </div>

                        </div>

                        <div id="third-division">

                            <div id="buttons-division">

                                <button id="prev-button"><</button>
                                <button id="next-button">Continuar</button>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide 4">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>4</b> de <b>5</b></p>
                                <span>Dados para recrutadores</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>CEP <span>*</span> </p> </label>
                                    <input name="cep" type="text" id="cep" value="12345-678" size="10" maxlength="9" onblur="pesquisacep(this.value);">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Bairro <span>*</span> </p> </label>
                                    <input name="bairro" type="text" id="bairro" size="40" value="Seu Bairro">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Cidade <span>*</span></p> </label>
                                    <input name="cidade" type="text" id="cidade" size="40" value="Sua Cidade">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Estado <span>*</span></p> </label>
                                    <input name="uf" type="text" id="uf" size="2" value="SE">

                                </div>

                            </div>

                        </div>

                        <div id="third-division">

                            <div id="buttons-division">

                                <button id="prev-button"><</button>
                                <button id="next-button">Continuar</button>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide 5">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>5</b> de <b>5</b></p>
                                <span>Dados para recrutadores</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div id="form-container">

                                    <div id="profile-picture">

                                        <label for=""><p>Imagem de perfil</p></label>

                                        <label class="picture" for="picture__input" tabIndex="0">
                                            <span class="picture__image"></span>
                                        </label>
                                          
                                        <input type="file" name="picture__input" id="picture__input">

                                    </div>

                                    <div id="profile-information">

                                        <label for=""> <p>Nome de Usuário <span>*</span></p> </label>
                                        <input name="nome" type="text" id="nome" size="" value="seu_usuario">

                                        <label for=""> <p>Escola ou Faculdade atual <span>*</span></p> </label>
                                        <input name="escola" type="text" id="escola" size="" value="Sua Escola/Faculdade">

                                    </div>

                                </div>

                                <label for=""> <p>Sobre mim <span>*</span></p> </label>
                                <textarea name="sobre" id="sobre" cols="30" rows="10">Um pouco sobre mim...</textarea>

                            </div>

                        </div>

                        <div id="third-division">

                            <div id="buttons-division">

                                <button id="prev-button"><</button>
                                <input id="submit-button" type="submit" value="Concluir">

                            </div>

                        </div>

                    </div>

                </div>

                <div class="swiper-pagination"></div>
                <!-- <button id="next-button">Continuar</button> -->
                <!-- <button id="prev-button"><</button> -->
            </div>

        </form>

        <a id="login-link" href="{{ route('login') }}">Já possuo uma conta na Scorpius</a>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/register_user-swiper.js') }}"></script>
    <script src="{{ asset('js/register-user-script.js') }}"></script>

@endsection
