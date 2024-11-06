<?php 
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main3.css">
    <link rel="stylesheet" href="./css/listDishes3.css">
    <link rel="stylesheet" href="./css/disheOpen2.css">
    <link rel="stylesheet" href="./css/responsivecss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=shopping_cart" />

    <title>Bem vindo ao Enkanto</title>
</head>

<body>


    <section class="sec_main">
        <input type="checkbox" id="toggle-sidebar" hidden>
        <nav>
            <div class="logo">
                <a href="./index.php"><img id="img_logo" src="../admin/img/logoEnkanto.jpeg" alt="logoPicanhaBeto"></a>
            </div>

            <div>
                <h1 class="title_main">ENCANTO</h1>
            </div>

            <div class="Menu" id="open-sidebar">

                <label for="toggle-sidebar" class="buttons__burger">
                    <input type="checkbox" id="burger" hidden>
                    <span></span>
                    <span></span>
                    <span></span>
                </label>

            </div>

        </nav>

        <div class="main-container">
            <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/promEx1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="title_carrossel">PROMOÇÃO DO DIA!!!</h5>
                            <p class="para_carrossel">Barato e Gostoso!!.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/promEx2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="title_carrossel">CONHEÇA NOSSO NOVO PRATO!</h5>
                            <p class="para_carrossel">Este prato vai ficar em Alta!!!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/promoEx3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="title_carrossel">CONHEÇA MAIS SOBRE A GENTE!</h5>
                            <p class="para_carrossel">Nos acompanhem em nossas redes Sociais.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <section class="opcoes_cardapio">
                <div class="linha_op">
                    <a class="image_container" href="pratofeito.php">
                        <img class="imgOpcoes" src="./assets/PratosFeitos.jpg" alt="">
                        <div class="text-overlay">Pratos Feitos</div>
                    </a>
                    <a class="image_container" href="./bebidas.php">
                        <img class="imgOpcoes" src="./assets/bebidas.jpg" alt="">
                        <div class="text-overlay">Bebidas</div>
                    </a>
                </div>
                <div class="linha_op">
                    <a class="image_container" href="./porcaoindividual.php">
                        <img class="imgOpcoes" src="./assets/porcaoIndividual.jpg" alt="">
                        <div class="text-overlay">Porções Individuais</div>
                    </a>
                    <a class="image_container" href="./petiscos.php">
                        <img class="imgOpcoes" src="./assets/petiscos.jpeg" alt="">
                        <div class="text-overlay">Petiscos</div>
                    </a>
                </div>
                <div class="linha_op">
                    <a class="image_container" href="./sobremesas.php">
                        <img class="imgOpcoes" src="./assets/sobremesas.jpg" alt="">
                        <div class="text-overlay">sobremesas</div>
                    </a>

                </div>
            </section>
            <a href="./seupedido.php">
                <div class="div_cart">
                    <span id="qItens" class="quant_itens">0</span>
                    <span id="div_cart" class="material-symbols-outlined">
                        shopping_cart
                    </span>
                </div>
            </a>
            <div id="sidebar" class="sidebar">
                <h1 id="title_sidebar">Encanto</h1>
                <section class="show_info_comanda">
                    <div class="number_comanda">
                        <span>№ da Comanda - <b>
                                <?php
                                        if(!isset($_SESSION)){
                                            session_start();
                                            
                                        }
                                        if(!empty($_SESSION)){
                                            echo $_SESSION['idComanda'];
                                        }
                                            
                                        
                                        
                                    ?>
                            </b></span>
                    </div>
                    <div class="number_comanda">
                        <span>Cliente - <b>
                                <?php 
                                        if(!isset($_SESSION)){
                                            session_start();
                                        }
                                        if(!empty($_SESSION)){
                                            echo $_SESSION['nomeClient'];
                                        }
                                        
                                    ?>
                            </b></span>
                    </div>
                    <div class="number_comanda">
                        <a id="link_detalhes" href="./comandaClient.php"><span>Acessar detalhes comanda -</span></a>
                    </div>
                    <div class="number_comanda">
                        <a id="link_detalhes" href="./pedidosClient.php"><span>Acessar ultimos pedidos -</span></a>
                    </div>
                </section>
                <hr>
            </div>
            <div class="hide_sidebar">
            </div>
        </div>
    </section>


    <script src="./js/script11.js"></script>
    <script src="./js/carrinho3.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>