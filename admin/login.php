<?php 

include './config/db.php';
$errorSenha = false;
$errorName = false;
session_start();
if(isset($_POST['username'])){
    $user = $db->real_escape_string($_POST['username']); 
    $password = $db->real_escape_string($_POST['password']);
    include './methods/verifyLogin.php';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login3.css">
    <title>Pagina de Login - Manager</title>
</head>

<body>

    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="POST">
            <label for="username">Usuário</label>
            <input type="text" id="username" name="username" placeholder="Digite seu usuário" required>
            <?php
            if($errorName == true){
                echo '<span>Nome não encontrado <br></span>';
            }
            ?>

            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            <?php
            if($errorSenha == true){
                echo '<span>Senha incorreta</span>';
            }
            ?> <input type="submit" value="Entrar">
        </form>
        <a href="#">Esqueceu sua senha?</a>
    </div>


    <footer>
        <span><?php
        if ($faildb == false){
            echo 'conectado ao banco de dados';
        }
        ?></span>
        <span><?php ?></span>
    </footer>

</body>

</html>