<?php

    // incluir navbar
    include_once 'global-navbar.php';
    
?>
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="assets/css/register.css"/>

    <main>

        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">

                    <p>Para</p>
                    <p>Candidatos</p>
                    
                    <h4>Descubra as melhores opotunidades</h4>

                    <a href=""><button>Cadestre-se já</button></a>

                    <div id="login-area">

                        <p>Já possui uma conta? <a href="">Entrar</a></p>

                    </div>

                </div>

                <div class="swiper-slide">

                    <p>Para</p>
                    <p>Empresas</p>
                    
                    <h4>Encontre os melhores estagiários da Praia Grande!</h4>

                    <a href=""><button>Cadestre-se já</button></a>

                    <div id="login-area">

                        <p>Já possui uma conta? <a href="">Entrar</a></p>

                    </div>

                </div>

            </div>
        
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="scripts/registerswiper.js"></script>
    
</body>
</html>