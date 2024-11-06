<?php 
include '../config/db.php';
if(!empty($_GET['id'])){
    $idDishe = $_GET['id'];

    $sqlSelect = "SELECT * FROM dishes1 WHERE  id = $idDishe";

    $result = $db->query($sqlSelect);
    

    if($result->num_rows > 0){
        $sqlDelete = "DELETE FROM dishes1 WHERE id=$idDishe" ;
        $result = $db->query($sqlDelete);
    }

}
header('Location: ../cardapio.php');

?>