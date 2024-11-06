<?php        
    session_start();

        
    $sql_code = "SELECT cpf FROM clients WHERE cpf = '$cpf_client' LIMIT 1";
    $sql_exec = $db ->query($sql_code) or die($db->error);

    if ($sql_exec->num_rows > 0) {
        $errorUsex = true;
    }else{
        $sql_code = "INSERT INTO clients (nome, cpf, rg, endereco, telefone) VALUES ('$name_client', '$cpf_client', '$rg_client', '$endereco_client', '$telefone_client')";
        $sql_exec = $db ->query($sql_code) or die($db->error);
        //header("Location: managers.php");
        //header('Location: ./login.php');
    }
?>