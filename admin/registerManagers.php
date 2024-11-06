<?php 

include './config/db.php';
    
$errorUsex = false;
if(isset($_POST['username'])){
    $user = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    include './methods/registerNewManager.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Pagina de Cadastro - Manager</title>
</head>

<body>

    <div class="login-container">
        <h2>Registre um novo Gerente</h2>
        <form action="" method="POST">
            <label for="username">Usuário</label>
            <input type="text" id="username" name="username" placeholder="Digite seu usuário" required>
            <?php
            if($errorUsex == true){
                echo '<span>Gerente já cadastrado <br></span>';
            }
            ?>


            <label for="password">Senha</label>
            <input type="password" id="password" name="password" placeholder="Digite sua senha" required>

            <input type="submit" value="Cadastrar">
        </form>

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