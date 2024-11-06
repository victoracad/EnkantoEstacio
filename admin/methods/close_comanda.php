<?php 
include '../config/db.php';
if(isset($_GET['id'])){
    $idComanda = $_GET['id'];
    $sql20 = "SELECT * FROM comandas WHERE id = $idComanda AND status = 'ABERTA'";
    $result20 = $db->query($sql20);
    if ($result20->num_rows > 0) {
        $sqlUpdate = "UPDATE comandas SET status = 'FECHADA' WHERE id='$idComanda'";
        $result21 = $db->query($sqlUpdate);  
    }
    header('Location: ../comandas.php');
}

?>