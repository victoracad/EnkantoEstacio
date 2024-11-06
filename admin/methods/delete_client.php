<?php 
include '../config/db.php';
if(!empty($_GET['id'])){
    $idClient = $_GET['id'];

    $sqlSelect = "SELECT * FROM clients WHERE  id = $idClient";

    $result = $db->query($sqlSelect);
    

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM clients WHERE id=$idClient" ;
        $result = $db->query($sqlDelete);
    }

}
header('Location: ../clientes.php');

?>