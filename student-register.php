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

                    <div class="swiper-slide">

                        <div id="first-division">

                            <div id="first-division-text-area">

                                <p>Passo <b>1</b> de <b>3</b></p>
                                <span>Insira seus dados de contato</span>

                            </div>

                            <img src="assets/imgs/logo-s-scorpius.svg" alt="">

                        </div>

                        <label for=""> <p>Nome Completo <span>*</span> </p> </label>
                        <input type="text" name="" id="">

                        <label for=""> <p>E-mail principal <span>*</span> </p> </label>
                        <input type="text" name="" id="">

                        <label for=""> <p>Telefone <span>*</span> </p> </label>
                        <input type="text" name="" id="">
                        
                    </div>

                    <div class="swiper-slide">Slide 2</div>
                    <div class="swiper-slide">Slide 3</div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>



        </form>

        <a href="login.html">Já possuo uma conta na Scorpius</a>

    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="scripts/register-user.js"></script>

</body>
</html>