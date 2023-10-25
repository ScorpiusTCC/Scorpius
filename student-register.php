<?php

    // incluir navbar
    include_once 'global-navbar.php';
    
?>
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="assets/css/register-user.css"/>
    
    <main>

        <form action="">

              <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide 1">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>1</b> de <b>3</b></p>
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

                                <p>Passo <b>2</b> de <b>3</b></p>
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

                    <div class="swiper-slide">Slide 3</div>
                    

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
    <script src="scripts/register_user-scripts.js"></script>

</body>
</html>