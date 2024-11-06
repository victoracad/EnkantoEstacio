<?php
    $sql = "SELECT * FROM pedidos ORDER BY CASE WHEN status = 'Em Preparação' THEN 0 ELSE 1 END, id DESC";
    //$sql = "SELECT * FROM pedidos ORDER BY id DESC ";
    /*"SELECT * FROM pedidos
        ORDER BY CASE WHEN status = 'Em Preparação' THEN 0 ELSE 1 END, id DESC";*/
    $result = $db->query($sql);

    while($user_data = mysqli_fetch_assoc($result)){
        $strPedidos = $user_data['pedidos'];
        $arrayPedidos = json_decode($strPedidos, true);
        $valorTotalPedido = 0;
        foreach ($arrayPedidos as $idDishe => $quantDishes) {
            $sql = "SELECT * FROM dishes1 WHERE id = $idDishe";
            $result3 = $db->query($sql);
            while($user_data3 = mysqli_fetch_assoc($result3)){
                $i = 0;
                while($i < $quantDishes){
                    $valorTotalPedido = $valorTotalPedido + $user_data3['priceDishe'];
                    $i = $i + 1;
                }
            }
        }
        
        echo "
        <div class=\"list_UltPedidos\">
            <div class=\"topo_pedido\">
                <span>Nº - {$user_data['id']}</span>
                <span>{$user_data['nameCliente']}</span>
            </div>
            <div class=\"list_pedido\">
                <table class=\"table_pedido\">
                    <tr>
                        <th>Qunt.</th>
                        <th>Nome do Prato</th>
                        <th>Valor</th>
                    </tr>
                    ";
                    foreach ($arrayPedidos as $idDishe => $quantDishes) {
                        $sql = "SELECT * FROM dishes1 WHERE id = $idDishe";
                        $result2 = $db->query($sql);
                        while($user_data2 = mysqli_fetch_assoc($result2)){
                            echo "
                                <tr>
                                    <td>{$quantDishes}</td>
                                    <td>{$user_data2['nameDishe']}</td>
                                    <td>R\${$user_data2['priceDishe']}</td>
                                </tr>
                            ";
                        }
                    }
                    echo "
                </table>
                    <hr>
                    <div class=\"valor_total\">
                        <span>Valor Total <b>R\${$valorTotalPedido}</b></span>
                    </div>

            </div>
            <div class=\"bottom_pedido\">
                <span>Feito em: <b>{$user_data['create_at']}</b></span>
                <span>Mesa <b>{$user_data['mesa']}</b></span>
                <span>Status <b>{$user_data['status']}</b></span>
            </div>
            <div id=\"btn_actions\" class=\"btn_actions\">
                    <a href=\"./methods/finalizar_pedido.php?id=$user_data[id]\"><button class=\"btn_fechar\">Tornar Pedido Pronto</button></a>
                    <a href=\"./methods/entregue_pedido.php?id=$user_data[id]\"><button class=\"btn_fechar\">Tornar Pedido Entregue</button></a>
            </div>
        </div>";
    }
        

?>