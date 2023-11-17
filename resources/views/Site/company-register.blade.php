@extends('site/master')

@section('title', 'Registro Empresa')

@section('content')
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="{{ asset('css/register-user.css') }}"/>
    
    <main>

        <form action="">

            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide 1">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>1</b> de <b>3</b></p>
                                <span>Insira os dados da empresa </span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>CNPJ <span>*</span> </p> </label>
                                    <input type="text" name="" id="">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Nome Fantasia <span>*</span> </p> </label>
                                    <input type="text" name="" id="">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Razão Social <span>*</span> </p> </label>
                                    <input type="text" name="" id="">

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

                                <p>Passo <b>2</b> de <b>3</b></p>
                                <span>Dados Pessoais</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>E-mail da empresa <span>*</span> </p> </label>
                                    <input type="email" name="" id="">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Endereço da empresa <span>*</span> </p> </label>
                                    <input type="text" name="" id="" >

                                </div>

                                <div class="form">

                                    <label for=""> <p>Telefone <span>*</span></p> </label>
                                    <input type="text" id="" name="">

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

                    <div class="swiper-slide 3">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>3</b> de <b>3</b></p>
                                <span>Crie sua senha de acesso</span>

                            </div>

                            <img src="{{ asset('imgs/logo-s-scorpius.svg') }}" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <input type="text" name="" id="senha" placeholder="Coloque aqui a sua senha">

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
                                <button type="submit" id="next-button">Concluir</button>

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
    <script src="{{ asset('js/register_user-script.js') }}"></script>

    
@endsection
