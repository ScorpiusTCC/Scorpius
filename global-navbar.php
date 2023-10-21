<?php

    session_start();
    ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scorpius</title>
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

</head>
<body>

    <header>

        <nav>

            <!-- NAVBAR PARA CELULAR -->

            <div id="mobile-navbar">

                <div class="logo-space">

                    <a href="index.php"><img src="assets/imgs/logo-scorpius-lado.svg" alt="Logo da Scorpius completa lateral"></a>

                </div>

            </div>

            <!-- NAVBAR PARA PC -->

            <div id="desktop-navbar">

                <div class="logo-space">

                    <a href="index.php"><img src="assets/imgs/logo-scorpius-lado.svg" alt="Logo da Scorpius completa lateral"></a>

                </div>
            
                
                <div id="user-space">

                    <div id="pags-space">

                        <a href="#third-area">Descubra nossas ferramentas</a>
                        <a href="#fifth-area">Conheça nosso plano</a>
                        <a href="about-us.php">Sobre nós / SAQ</a>

                    </div>

                <?php 
                // verificar se existe usuario logado, 
                // se não existir apresenta o código a seguir
                if(!isset($_SESSION['id_user'])) { 
                ?>

                    <div id="login-user">
        
                        <a href="register.php"><button>Cadastre-se</button></a>

                        <a href="login.php"><span>Entrar</span></a>
        
                    </div>

                <?php 
                // se existir usuario logado, apresenta este código
                } else {
                ?>

                <div id="login-user">
        
                    <h1>Bem vindo usuário <?php echo $_SESSION['id_user']?></h1>

                    <a href="logout.php"><button>Sair</button></a>

                </div>

                <?php } ?>

                </div>

            </div>
 
        </nav>