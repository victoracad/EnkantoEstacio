<?php 
include './config/db.php';

session_start();

include './config/protect.php';

include './methods/create_comanda.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './partials/head.php'?>
    <link rel="stylesheet" href="./css/sidebar2.css">
    <title>Encanto - Manager</title>
</head>

<body>

    <?php include_once './partials/sidebar.php'?>

    <section class="home_contet">
        <h1>Gerenciamento das Comandas</h1>
    </section>

    <section class="main_sec">
        <section class="sec_pedidos">
            <h2 class="title_UltPedidos">Últimos pedidos</h2>

            <?php include './methods/list_pedidos.php'?>

        </section>
        <section class="sec_comandas">
            <h2 class="title_Comandas">Comandas</h2>

            <?php include './methods/list_comandas.php'?>

        </section>
        <section class="sec_actions">
            <button id="botaoAbrir">Abrir uma Comanda</button>
        </section>
    </section>

    <div id="abrirComanda" class="escondido">
        <form action="" method="POST">
            <label for="opcCliente">Informe para qual cliente a comanda vai ser atribuída</label>
            <select id="opcCliente" name="opcoesClient">
                <option value="0">Escolha um Cliente</option>
                <?php include './methods/list_opClient.php';?>
            </select>
            <input class="input_criar" type="submit" name="inp_criar" value="Criar Comanda">
            <?php 
            if($alreadyComanda == 1){
                echo 'Cliente já está relacionado a uma comanda aberta';
            }
            ?>
        </form>
    </div>


</body>
<script src="./js/sidebar.js"></script>
<script src="./js/comanda.js"></script>

</html>