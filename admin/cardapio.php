<?php 
    session_start();
    include './config/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        //include './partials/head.php';
    ?>
    <link rel="stylesheet" href="./css/manCard3.css">
    <link rel="stylesheet" href="./css/sidebar2.css">
    <link rel="stylesheet" href="./css/dashboard.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!--Boxicons-->
    <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Cardápio - admin</title>
</head>

<body>
    <?php 
        include './partials/sidebar.php';
    ?>

    <h1>Gerenciamento do cardápio</h1>

    <section id="main_cardapio">
        <div id="options_cardapio">
            <div class="row">

                <div class="card_menu" onclick="sendRadioValue(1); selecionarRadio(1);">
                    <!--onclick="selectRadio('radio1')"-->
                    <input class="radioCard" type="radio" id="radio1" name="opcao" style="display:none;" value="1">
                    <img src="./img/PratosFeitos.jpg" alt="">
                    <div class="text_overlay">Pratos Feitos</div>
                </div>

                <div class="card_menu" onclick="sendRadioValue(2); selecionarRadio(2);">
                    <input class="radioCard" type="radio" id="radio2" name="opcao" style="display:none;" value="2">
                    <img src="./img/bebidas.jpg" alt="">
                    <div class="text_overlay">Bebidas</div>
                </div>

            </div>

            <div class="row">

                <div class="card_menu" onclick="sendRadioValue(3); selecionarRadio(3);">
                    <input class="radioCard" type="radio" id="radio3" name="opcao" style="display:none;">
                    <img src="./img/porcaoindividual.jpg" alt="">
                    <div class="text_overlay">Porções individuais</div>
                </div>

                <div class="card_menu" onclick="sendRadioValue(4); selecionarRadio(4);">
                    <input class="radioCard" type="radio" id="radio4" name="opcao" style="display:none;">
                    <img src="./img/petiscos.jpeg" alt="">
                    <div class="text_overlay">Petiscos</div>
                </div>

            </div>
            <div class="row">
                <div class="card_menu" onclick="sendRadioValue(5); selecionarRadio(5);">
                    <input class="radioCard" type="radio" id="radio5" name="opcao" style="display:none;">
                    <img src="./img/sobremesas.jpg" alt="">
                    <div class="text_overlay">Sobremesas</div>
                </div>
                <div class="card_menu" onclick="sendRadioValue(6); selecionarRadio(6);">
                    <input class="radioCard" type="radio" id="radio6" name="opcao" style="display:none;">
                    <img src="./img/PratosFeitos.jpg" alt="">
                    <div class="text_overlay">Pratos Feitos</div>
                </div>
            </div>

        </div>
        <div id="list_dishes">

            <div id="div_buttonAdd">
                <a href="registerDishes.php">
                    <button id="btn_add">
                        Adicionar Prato
                    </button>
                </a>
            </div>

            <div id="div_list">
                <div id="nameListDishes"></div>
                <div id="resultado"></div>
            </div>
        </div>
    </section>


    <script src="./js/sidebar.js"></script>
    <script src="./js/optionsCard1.js"></script>
</body>

</html>