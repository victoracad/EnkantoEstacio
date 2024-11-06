<?php 
include './config/db.php';
include './methods/registerNewDishe.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/manCard3.css">
    <link rel="stylesheet" href="./css/login3.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Pagina de Cadastro - Manager</title>
</head>

<body>
    <div><a href="./cardapio.php">Voltar ao gerenciamento de caradápio</a></div>
    <div class="login-container">
        <h2>Adicione um novo prato</h2>
        <form enctype="multipart/form-data" action="" method="POST">
            <label for="nameDishe">Nome do Prato</label>
            <input type="text" id="nameDishe" name="nameDishe" placeholder="Digite o nome do Prato" required>

            <label for="descDishe">Descrição do Prato</label>
            <input type="text" id="descDishe" name="descDishe" placeholder="Digite a descrição do Prato" required>
            <div id="priceDiv">
                <label for="priceDishe">Digite o preço do Prato </label>
                <input id="inputNumber" type="number" step="0.01" id="priceDishe" name="priceDishe"
                    placeholder="Digite o preço do Prato" required>
            </div>

            <label for="opcoes">Seleciona o cardapio a ser adicionado</label>
            <select id="opcoes" name="opcoesDishe" onchange="mostrarOpcao()">
                <option value="1">Prato Feito</option>
                <option value="2">Bebidas</option>
                <option value="3">Porções individuais</option>
                <option value="4">Petiscos</option>
                <option value="5">Sobremesas</option>
            </select>

            <div id="radioDishe">
                <div>
                    <span>Escolha o status do prato</span>
                </div>
                <div class="radios">
                    <label for="radio1">No cardapio</label>
                    <input class="radioCard" type="radio" id="radio1" name="opcao" value="No Cardápio">
                </div>
                <div class="radios">
                    <label for="radio2">Fora do Cardapio</label>
                    <input class="radioCard" type="radio" id="radio2" name="opcao" value="Fora do Cardápio">
                </div>
                <div class="radios">
                    <label for="radio3">Em espera</label>
                    <input class="radioCard" type="radio" id="radio3" name="opcao" value="Em espera">
                </div>

            </div>

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