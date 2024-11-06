<?php 

    if(!isset($_SESSION)){
        session_start();
    }
    if(!empty($_SESSION)){
        $idComandaCliente = $_SESSION['idComanda'];
        $sql = "SELECT * FROM comandas WHERE id = '$idComandaCliente'";
        $result4 = $db->query($sql);
    
        while($user_data4 = mysqli_fetch_assoc($result4)){
            $strPedidos = $user_data4['pedidos'];
            $arrayPedidos = json_decode($strPedidos, true);
            $valorTotalPedido = 0;
            foreach ($arrayPedidos as $idDishe => $quantDishes) {
                $sql = "SELECT * FROM dishes1 WHERE id = $idDishe";
                $result5 = $db->query($sql);
                while($user_data5 = mysqli_fetch_assoc($result5)){
                    $i = 0;
                    while($i < $quantDishes){
                        $valorTotalPedido = $valorTotalPedido + $user_data5['priceDishe'];
                        $i = $i + 1;
                    }
                }
            }
            $sql = "SELECT nome FROM clients WHERE id={$user_data4['idClient']} ";
            $result7 = $db->query($sql);
            while($user_data7 = mysqli_fetch_assoc($result7)){
                $nameClientDb = $user_data7['nome'];
            }
            
                        
                        echo "<div class=\"div_comanda\">
                    <div class=\"div_top_comanda\">
                        <span>Nº - {$user_data4['id']}</span>
                        <span>$nameClientDb</span>
                    </div>
                    <div class=\"div_list_pedidos\">
                        <table class=\"tbl_Comanda\">
                            <tr>
                                <th>Quant</th>
                                <th>Nome do Prato</th>
                                <th>Preço</th>
                            </tr>";
                            foreach ($arrayPedidos as $idDishe => $quantDishes) {
                                $sql = "SELECT * FROM dishes1 WHERE id = $idDishe";
                                $result6 = $db->query($sql);
                                while($user_data6 = mysqli_fetch_assoc($result6)){
                                    echo "
                                        <tr>
                                            <td>{$quantDishes}</td>
                                            <td>{$user_data6['nameDishe']}</td>
                                            <td>R\${$user_data6['priceDishe']}</td>
                                        </tr>
                                    ";
                                }
                            }
                        echo "  
                        </table>
                        <hr class=\"linha\">
                        <div class=\"total_comanda\">
                            <span>Valor Total:</span>
                            <span>R$<b>$valorTotalPedido</b></span>
                        </div>
                    </div>
                    <div class=\"bottom_comanda\">
                        <span>Criado em:<b>{$user_data4['create_at']}</b></span>
                        <span>Status:<b>{$user_data4['status']}</b></span>
                    </div>
                </div>";
        }
    }
    
?>