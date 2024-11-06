<?php
    include '../config/db.php';
    if (isset($_POST['radioValue'])) {
        $radioValue = $_POST['radioValue']; // Obtém o valor do radio button enviado via AJAX

        // Verifica qual botão foi selecionado
        if ($radioValue == 1) {
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 1";
            $result = $db->query($sql);

            while($user_data = mysqli_fetch_assoc($result)){
            echo "<div class=\"card_dishe\">
                    <img src=\"./img/pratoFeitoex.png\" alt=\"\">
                    <div class=\"name_desc\">
                        <span class=\"nameDishe\"><b>{$user_data['nameDishe']}</b></span>
                        <span class=\"description_dish\">{$user_data['descDishe']}</span>
                    </div>
                    <div class=\"price_stat\">
                        <span class=\"price_dishe\">R\${$user_data['priceDishe']}</span>
                        <span class=\"status\">Status:{$user_data['status']}</span>
                    </div>
                    <div>
                        <a href='./methods/delete_Dishes.php?id=$user_data[id]'><button class=\"btn-delete\">
                                <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                    delete
                                </span>
                            </button>
                        </a>
                        <a href='./editDishes.php?id=$user_data[id]'><button class=\"btn-edit\">
                            <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                edit
                            </span>
                        </button>
                        </a>
                    </div>
                </div>";
            }
        } elseif ($radioValue == 2) {
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 2";
            $result = $db->query($sql); 

            while($user_data = mysqli_fetch_assoc($result)){
            echo "<div class=\"card_dishe\">
                    <img src=\"./img/bebidasEx.png\" alt=\"\">
                    <div class=\"name_desc\">
                        <span class=\"nameDishe\"><b>{$user_data['nameDishe']}</b></span>
                        <span class=\"description_dish\">{$user_data['descDishe']}</span>
                    </div>
                    <div class=\"price_stat\">
                        <span class=\"price_dishe\">R\${$user_data['priceDishe']}</span>
                        <span class=\"status\">Status:{$user_data['status']}</span>
                    </div>
                    <div>
                        <a href='./methods/delete_Dishes.php?id=$user_data[id]'><button class=\"btn-delete\">
                                <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                    delete
                                </span>
                            </button>
                        </a>
                        <a href='./editDishes.php?id=$user_data[id]'><button class=\"btn-edit\">
                            <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                edit
                            </span>
                        </button>
                        </a>
                    </div>
                </div>";
            }
        } elseif ($radioValue == 3) {
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 3";
            $result = $db->query($sql); 

            while($user_data = mysqli_fetch_assoc($result)){
            echo "<div class=\"card_dishe\">
                    <img src=\"./img/porcoesimg.png\" alt=\"\">
                    <div class=\"name_desc\">
                        <span class=\"nameDishe\"><b>{$user_data['nameDishe']}</b></span>
                        <span class=\"description_dish\">{$user_data['descDishe']}</span>
                    </div>
                    <div class=\"price_stat\">
                        <span class=\"price_dishe\">R\${$user_data['priceDishe']}</span>
                        <span class=\"status\">Status:{$user_data['status']}</span>
                    </div>
                                        <div>
                        <a href='./methods/delete_Dishes.php?id=$user_data[id]'><button class=\"btn-delete\">
                                <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                    delete
                                </span>
                            </button>
                        </a>
                        <a href='./editDishes.php?id=$user_data[id]'><button class=\"btn-edit\">
                            <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                edit
                            </span>
                        </button>
                        </a>
                    </div>
                </div>";
            }
        } elseif ($radioValue == 4) {
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 4";
            $result = $db->query($sql); 

            while($user_data = mysqli_fetch_assoc($result)){
            echo "<div class=\"card_dishe\">
                    <img src=\"./img/petiscosimg.png\" alt=\"\">
                    <div class=\"name_desc\">
                        <span class=\"nameDishe\"><b>{$user_data['nameDishe']}</b></span>
                        <span class=\"description_dish\">{$user_data['descDishe']}</span>
                    </div>
                    <div class=\"price_stat\">
                        <span class=\"price_dishe\">R\${$user_data['priceDishe']}</span>
                        <span class=\"status\">Status:{$user_data['status']}</span>
                    </div>
                                        <div>
                        <a href='./methods/delete_Dishes.php?id=$user_data[id]'><button class=\"btn-delete\">
                                <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                    delete
                                </span>
                            </button>
                        </a>
                        <a href='./editDishes.php?id=$user_data[id]'><button class=\"btn-edit\">
                            <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                edit
                            </span>
                        </button>
                        </a>
                    </div>
                </div>";
            }
        } elseif ($radioValue == 5) {
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 5";
            $result = $db->query($sql); 

            while($user_data = mysqli_fetch_assoc($result)){
            echo "<div class=\"card_dishe\">
                    <img src=\"./img/sobremesasimg.png\" alt=\"\">
                    <div class=\"name_desc\">
                        <span class=\"nameDishe\"><b>{$user_data['nameDishe']}</b></span>
                        <span class=\"description_dish\">{$user_data['descDishe']}</span>
                    </div>
                    <div class=\"price_stat\">
                        <span class=\"price_dishe\">R\${$user_data['priceDishe']}</span>
                        <span class=\"status\">Status:{$user_data['status']}</span>
                    </div>
                                        <div>
                        <a href='./methods/delete_Dishes.php?id=$user_data[id]'><button class=\"btn-delete\">
                                <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                    delete
                                </span>
                            </button>
                        </a>
                        <a href='./editDishes.php?id=$user_data[id]'><button class=\"btn-edit\">
                            <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                edit
                            </span>
                        </button>
                        </a>
                    </div>
                </div>";
            }
        } else {
            echo "Nenhum botão válido foi selecionado";
        }
    } else {
        echo "Nenhum dado recebido";
    }
?>