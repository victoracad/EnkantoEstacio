<?php 
include './config/db.php';

session_start();
include './config/protect.php'

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/clients.css">
    <?php include './partials/head.php'?>
    <title>Gerentes</title>
</head>

<body>
    <?php include_once './partials/sidebar.php'?>
    <h1 id="h1Ma">Gerentes do Encanto</h1>
    <section id="secViewMagers">
        <div id="div_buttonAdd">
            <div>
                <button id="btn_add">
                    Todas os clientes
                </button>
            </div>
            <div>
                <button id="btn_add">
                    Clientes c/ comanda
                </button>
            </div>
            <a href="registerClients.php">
                <button id="btn_add">
                    Adicionar Cliente
                </button>
            </a>

        </div>

        <table class="table">
            <tr>
                <th>id</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Endereço</th>
                <th>Telefone</th>
                <th>status</th>
                <th>Comanda</th>
                <th></th>
            </tr>

            <?php 
            include './methods/list_clients.php'
            ?>




        </table>







    </section>

    <script src="./js/sidebar.js"></script>
</body>


</html>