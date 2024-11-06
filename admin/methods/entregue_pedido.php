<?php 
include '../config/db.php';
if(isset($_GET['id'])){
    $idPedido = $_GET['id'];
    $sql_selectPedidos = "SELECT * FROM pedidos WHERE id = $idPedido AND status = 'Em Preparação' OR status = 'PEDIDO PRONTO'";
    $result_selectPedidos = $db->query($sql_selectPedidos);
    if ($result_selectPedidos->num_rows > 0) {
        $sqlUpdate = "UPDATE pedidos SET status = 'PEDIDO ENTREGUE' WHERE id='$idPedido'";
        $result21 = $db->query($sqlUpdate);  
    }
    header('Location: ../comandas.php');
}

?>