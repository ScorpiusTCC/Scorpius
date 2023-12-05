@extends('site/master')

@section('title', 'Registro Empresa')

@section('content')
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset('css/register_user.css') }}"/>
    
    <main>

        <form action="{{ route('empresa.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide 1">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>1</b> de <b>5</b></p>
                                <span>Insira os dados da empresa </span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>CNPJ <span>*</span> </p> </label>
                                    <input type="text" name="cnpj" id="cnpj" value="04.712.500/0001-07.">

                                </div>

                                <div class="form">

                                    <label for=""> <p>IE <span>*</span> </p> </label>
                                    <input type="text" name="ie" id="ie" value="594.474.247.589">

                                </div>


                                <div class="form">

                                    <label for=""> <p>Nome Fantasia <span>*</span> </p> </label>
                                    <input type="text" name="nm_fantasia" id="nm_fantasia" value="Microsoft Corporation">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Razão Social <span>*</span> </p> </label>
                                    <input type="text" name="razao_social" id="razao_social" value="MICROSOFT DO BRASIL IMPORTACAO E COMERCIO DE SOFTWARE E VIDEO GAMES LTDA">

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
                                <span>Insira os dados da empresa</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>Nome do representante <span>*</span></p> </label>
                                    <input type="text" id="nm_representante" name="nm_representante" value="Mateus Sampaio">

                                </div>

                                <div class="form">

                                    <label for=""> <p>CPF do representante <span>*</span></p> </label>
                                    <input type="text" id="cpf_representante" name="cpf_representante" value="89214627839">

                                </div>

                                <div class="form">

                                    <label for=""> <p>E-mail da empresa <span>*</span> </p> </label>
                                    <input type="email" name="email" id="email" value="microsoft@gmail.com">

                                </div>


                                <div class="form">

                                    <label for=""> <p>Telefone celular <span>*</span> (Com DDD) </p> </label>
                                    <input type="text" id="tel_celular" name="tel_celular" value="(13) 98173-9833"> 

                                </div>

                                <div class="form">

                                    <label for=""> <p>Telefone comercial <span>*</span> (Com DDD) </p> </label>
                                    <input type="text" id="tel_comercial" name="tel_comercial" value="(13) 98173-9957">

                                </div>

                            </div>

                        </div>

                        <div id="third-division">

                            <div id="buttons-division">

                                <button id="prev-button"><</button>
                                <button type="submit" id="next-button">Concluir</button>

                            </div>

                        </div>

                    </div>
                    
                    <div class="swiper-slide 3">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>3</b> de <b>5</b></p>
                                <span>Insira os dados da empresa</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="d-flex ">


                                    <div>
    
                                        <div class="form m-3">
        
                                            <label for=""> <p>CEP <span>*</span> </p> </label>
                                            <input name="cep" type="text" id="cep" value="11714000" size="10" maxlength="9"
                                            onblur="pesquisacep(this.value);">
        
                                        </div>
        
                                        <div class="form m-3">
        
                                            <label for=""> <p>Bairro <span>*</span> </p> </label>
                                            <input name="bairro" type="text" id="bairro" size="40">
        
                                        </div>
        
                                        <div class="form m-3">
        
                                            <label for=""> <p>Cidade <span>*</span></p> </label>
                                            <input name="cidade" type="text" id="cidade" size="40">
        
                                        </div>
        
                                        <div class="form m-3">
        
                                            <label for=""> <p>UF <span>*</span></p> </label>
                                            <input name="uf" type="text" id="uf" size="40">
        
                                        </div>
    
                                    </div>
    
                                    <div>
    
                                        <div class="form m-3">
        
                                            <label for=""> <p>Rua <span>*</span></p> </label>
                                            <input name="logradouro" type="text" id="logradouro" size="200" >
        
                                        </div>
        
                                        <div class="form m-3">
        
                                            <label for=""> <p>Número <span>*</span></p> </label>
                                            <input name="numero" type="text" id="numero" size="2" value="508">
        
                                        </div>
        
                                        <div class="form m-3">
        
                                            <label for=""> <p>Complemento <span>*</span></p> </label>
                                            <input name="complemento" type="text" id="complemento" size="50">
        
                                        </div>
    
                                    </div>

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
                                <span>Insira os dados da empresa</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div id="form-container">

                                    <div class="profile-picture d-flex large-h">

                                        <label for=""><p>Imagem de perfil</p></label>

                                        <label class="picture" for="picture__input" tabIndex="0">
                                            <span class="picture__image"></span>
                                        </label>
                                          
                                        <input type="file" name="picture__input" id="picture__input">

                                    </div>

                                </div>

                                <label for=""> <p>Sobre mim <span>*</span></p> </label>
                                <textarea name="sobre" id="sobre" cols="30" rows="10">A Microsoft, fundada em 1975 por Bill Gates e Paul Allen, é uma potência global na tecnologia. Conhecida pelo MS-DOS e Windows, expandiu para áreas como Office, Xbox e Azure. Sob a liderança de Satya Nadella desde 2014, foca em inovação, inteligência artificial e computação em nuvem. Além do impacto nos negócios, é reconhecida por iniciativas filantrópicas, como a Fundação Bill e Melinda Gates.</textarea>

                            </div>

                        </div>

                        <div id="third-division">

                            <div id="buttons-division">

                                <button id="prev-button"><</button>
                                <button type="submit" id="next-button">Continuar</button>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide 5">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>5</b> de <b>5</b></p>
                                <span>Crie sua senha de acesso</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <input type="text" name="senha" id="senha" placeholder="Coloque aqui a sua senha">

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

        <a id="login-link" href="{{ route('login') }}">Já possuo uma conta</a>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/register_user-swiper.js') }}"></script>
    <script src="{{ asset('js/register-user_script.js') }}"></script>
    <script src="{{ asset('js/company-scripts.js') }}"></script>

    
@endsection
