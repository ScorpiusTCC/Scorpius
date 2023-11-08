<?php
  
    // incluir navbar
    include_once 'global-navbar.php';
    
    // requisitando conexão com o banco 
    require_once 'config/connection.php';

    // cadastro
    // if(isset($_POST['enviar'], $_POST['email'], $_POST['senha'])){
    //     $user = $_POST['email']; 
    //     $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

    // $querry = $conn->prepare('INSERT INTO tb_usuarios(email, senha) VALUES (:user, :senha)');
    // $querry->bindParam(':user', $user);
    // $querry->bindParam(':senha', $senha);
    // $querry->execute();
    // }
    
    // Verificar se o usuário existe
    if(isset($_POST['enviar'], $_POST['email'], $_POST['senha'])) {
        $user = $_POST['email']; 
        $senha = $_POST['senha'];

        $querry = $conn->prepare('SELECT * FROM tb_usuarios WHERE email = :user LIMIT 1');
        $querry->bindParam(':user', $user);
        $querry->execute();

        $result = $querry->fetch();

        if($querry->rowCount() == 1 && password_verify($senha, $result['senha'])){
            $_SESSION['id_user'] = $result['id_user'];
            header('location: index.php');
        } else {
            echo 'Usuário ou senha incorreto';
        }
    }
?>
    <!-- chamar o estilo da pagina -->
    <link rel="stylesheet" href="assets/css/login.css"/>

    <main>

        <div id="first-division">

            <form action="" method="POST">

                <div id="form-logo-area">
    
                    <img src="assets/imgs/logo-s-scorpius.svg" alt="">
                    <h1>Acesse sua conta</h1>
    
                </div>
    
    
                <input type="text" name="email" id="email" placeholder="E-mail" required>
    
                <input type="text" name="senha" id="senha" placeholder="Senha" required>

                <a href="">Esqueceu sua senha</a>

    
                <div id="login-area">
    
                    <button type="submit" name="enviar">Entrar</button>
                    <span>Não tem uma conta <a href="">Cadastre-se</a></span>
    
                </div>
    
            </form>

        </div>

    </main>
    
</body>
</html>