<?php 
    include './config/db.php';
    include './methods/save_edits_clients.php';
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
            <input type="text" id="username" name="username" placeholder="Digite nome Completo do cliente"
                value=" <?php echo $name_client?>" required>

            <label for="cpf">CPF</label>
            <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF do Cliente"
                value=" <?php echo $cpf_client?>" required>

            <label for="rg">RG</label>
            <input type="text" id="cpf" name="rg" placeholder="Digite o RG do Cliente" value=" <?php echo $rg_client?>"
                required>
            <label for="end">Endereço</label>
            <input type="text" id="end" name="end" placeholder="Digite o Endereço do Cliente"
                value=" <?php echo $endereco_client?>" required>
            <label for="tel">Telefone</label>
            <input type="text" id="tel" name="tel" placeholder="Digite o Telefone Cliente"
                value=" <?php echo $telefone_client?>" required>

            <input type="submit" name="btn" value="Atualizar">
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