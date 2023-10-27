<?php

    // incluir navbar
    include_once 'global-navbar.php';
    
?>
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="assets/css/index.css"/>

    <main>

        <section id="first-area">

            <div id="search-area">

                <p>Encontre as melhores vagas de estágio.</p>
                <p>Seu primeiro emprego é aqui!</p>

                <div id="search-job">

                    <form action="">

                        <input type="text" placeholder="Busca por cargos">
                        <button type="submit">Procurar</button>

                    </form>

                </div>
                

            </div>

        <div id="image-area">

                <img src="assets/imgs/first-session-image.png" alt="">

            </div>
            
        </section>

        <section id="second-area">

            <h1>Cargos em sua área de atuação</h1>

              <!-- Swiper -->
            <div class="swiper">

                <div class="swiper-wrapper">
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide"></div>
                    <div class="swiper-slide">Slide 4</div>
                    <div class="swiper-slide">Slide 5</div>
                    <div class="swiper-slide">Slide 6</div>
                    <div class="swiper-slide">Slide 7</div>
                    <div class="swiper-slide">Slide 8</div>
                    <div class="swiper-slide">Slide 9</div>
                </div>

                <div class="swiper-pagination"></div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

            <div id="second-area-button">

                <a href=""><button>Encontrar todas as vagas</button></a>
                
            </div>

        </section>

        <section id="third-area">

            <h1>Descubra o seu futuro profissional conosco. Explore as oportunidades, dê o primeiro passo em direção a uma carreira de sucesso!</h1>

            <video src=""></video>

        </section>

        <section id="fourth-area">

            <div id="fourth-area-main-division">

                <div id="fourth-area-first-division">

                    <h2>A Scorpius te ajuda com sua busca</h2>
                    <img src="assets/imgs/fourth-session-image.png" alt="">
    
                </div>
    
                <div id="fourth-area-second-division">
    
                    <h3>Antes de se candidatar a uma oportunidade de estágio, avalie sua pontuação em várias competências em comparação com a dos outros candidatos e veja os principais requisitos exigidos pelas empresas.</h3>
                    <a href=""><button>Buscar vagas de estágio</button></a>
    
                </div>

            </div>

        </section>

        <section id="fifth-area">

            <div id="fifth-area-main-division">

                <img id="fifth-area-logo-image" src="assets/imgs/logo-s-scorpius.svg" alt="">

                <h1>Seja premium e tenha acesso a vários benefícios:</h1>

                <div id="fifth-area-first-division">

                    <div class="fifth-area-plans-division">

                        <h2>Grátis</h2>
    
                        <p>Acesso a diversas vagas de estágio<img id="fds" src="assets/imgs/check.png" alt=""></p>
                        <p>Área para colocar suas informações pessoais<img src="assets/imgs/check.png" alt=""></p>
                        <p>Maior visibilidade na paltaforma<img src="assets/imgs/close.png" alt=""></p>
    
                    </div>
    
                    <div class="fifth-area-plans-division">
    
                        <h2>Premium</h2>
    
                        <p>Acesso a diversas vagas de estágio<img src="assets/imgs/check.png" alt=""></p>
                        <p>Área para colocar suas informações pessoais<img src="assets/imgs/check.png" alt=""></p>
                        <p>Maior visibilidade na paltaforma<img src="assets/imgs/check.png" alt=""></p>


                        <div id="fifth-area-plans-buy">

                            <span>R$ 39,99</span>
                            <a href=""><button>Assine já</button></a>
            
                        </div>
    
                    </div>

                </div>

            </div>

        </section>

    </main>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="scripts/swiper.js"></script>

    <?php

    // incluir footer
    include_once 'global-footer.php';
    
    ?>
    
</body>
</html>