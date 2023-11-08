<?php

    // incluir navbar
    include_once 'global-navbar.php';
    
?>

    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="assets/css/register_user.css"/>
    
    <main>

        <form action="">

              <!-- Swiper -->
            <div class="swiper mySwiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide 1">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>1</b> de <b>4</b></p>
                                <span>Insira seus dados de contato</span>

                            </div>

                            <img src="assets/imgs/logo-s-scorpius.svg" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>Nome Completo <span>*</span> </p> </label>
                                    <input type="text" name="" id="">

                                </div>

                                <div class="form">

                                    <label for=""> <p>E-mail principal <span>*</span> </p> </label>
                                    <input type="email" name="" id="">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Telefone <span>*</span> (com DD) </p> </label>
                                    <input type="number" name="" id="">

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

                                <p>Passo <b>2</b> de <b>4</b></p>
                                <span>Crie sua senha de acesso</span>

                            </div>

                            <img src="assets/imgs/logo-s-scorpius.svg" alt="">

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
                                <button id="next-button">Continuar</button>

                            </div>

                        </div>

                    </div>

                    <div class="swiper-slide 3">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>3</b> de <b>4</b></p>
                                <span>Dados Pessoais</span>

                            </div>

                            <img src="assets/imgs/logo-s-scorpius.svg" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>CPF <span>*</span> </p> </label>
                                    <input type="text" name="" id="" oninput="mascara(this)" maxlength="11">

                                </div>

                                <div class="form">

                                    <label for=""> <p>Data de Nascimento <span>*</span> </p> </label>
                                    <input type="date" name="" id="" maxlength="8" >

                                </div>

                                <div class="form">

                                    <label for=""> <p>Gênero <span>*</span></p> </label>
                                    <select name="" id="">

                                        <option value="" disabled selected hidden>Selecione seu gênero</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Femino</option>
                                        <option value="outro">Outro</option>


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

                                <p>Passo <b>4</b> de <b>4</b></p>
                                <span>Dados para recrutadores</span>

                            </div>

                            <img src="assets/imgs/logo-s-scorpius.svg" alt="">

                        </div>

                        <div id="second-division">

                            <div id="form-division">

                                <div class="form">

                                    <label for=""> <p>Ano/Série cursando <span>*</span> </p> </label>
                                    <input type="text" name="" id="" >

                                </div>

                                <div class="form">

                                    <label for=""> <p>Área de atuação <span>*</span> </p> </label>
                                    <input type="text" name="" id="" maxlength="8" >

                                </div>

                                <div class="form">

                                    <label for=""> <p>Estágio desejado <span>*</span></p> </label>
                                    <select name="" id="">

                                        <option value="" disabled selected hidden>Selecione seu </option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Femino</option>
                                        <option value="outro">Outro</option>

                                    </select>

                                </div>

                            </div>

                        </div>

                        <div id="third-division">

                            <div id="buttons-division">

                                <button id="prev-button"><</button>
                                <input id="next-button" type="submit" value="Finalizar">

                            </div>

                        </div>

                    </div>
                    

                </div>

                <div class="swiper-pagination"></div>
                <!-- <button id="next-button">Continuar</button> -->
                <!-- <button id="prev-button"><</button> -->
            </div>



        </form>

        <a id="login-link" href="login.php">Já possuo uma conta na Scorpius</a>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="scripts/register_user-swiper.js"></script>
    <script src="scripts/register_user-script.js"></script>

</body>
</html>