<?php 
    $alreadyComanda = 0;
    if(isset($_POST['opcoesClient']) ){
        $idClient = $_POST['opcoesClient'];
        $sql1 = "SELECT * FROM comandas WHERE idClient = $idClient AND status = 'ABERTA'";
        $result11 = $db->query($sql1);
        if ($result11->num_rows > 0) {
            $alreadyComanda = 1;
        }else{
            $sql_code_create_comanda = "INSERT INTO comandas (idClient) VALUES ('$idClient')";
            $result10 = $db->query($sql_code_create_comanda);
        }
    }
?>