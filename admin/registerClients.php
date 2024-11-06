<?php 

include './config/db.php';
    
$errorUsex = false;
if(isset($_POST['username']) && isset($_POST['cpf']) && isset($_POST['rg'])){
    $name_client = $_POST['username'];
    $cpf_client = $_POST['cpf'];
    $rg_client = $_POST['rg'];
    $endereco_client = $_POST['end'];
    $telefone_client = $_POST['tel'];

    include './methods/registerNewClient.php';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login3.css">
    <title>Pagina de Cadastro - Manager</title>
</head>

<body>

    <div class="login-container">
        <h2>Registre um novo Gerente</h2>
        <form action="" method="POST">
            <label for="username">Nome Completo</label>
            <input type="text" id="username" name="username" placeholder="Digite nome Completo do cliente" required>

            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF do Cliente" required>
            <?php
            if($errorUsex == true){
                echo '<span>Cpf já cadastrado<br></span>';
            }
            ?>
            <label for="rg">RG</label>
            <input type="text" id="cpf" name="rg" placeholder="Digite o RG do Cliente" required>
            <label for="end">Endereço</label>
            <input type="text" id="end" name="end" placeholder="Digite o Endereço do Cliente" required>
            <label for="tel">Telefone</label>
            <input type="text" id="tel" name="tel" placeholder="Digite o Telefone Cliente" required>

            <input type="submit" name="btn" value="Cadastrar">
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