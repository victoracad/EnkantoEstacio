<?php 
    
   // Prepara a consulta SQL para buscar o usuário pelo nome de usuário
    $sql_code = "SELECT * FROM managers WHERE name = '$user' LIMIT 1";
    $sql_exec = $db ->query($sql_code); //or die($db->error);

    if ($sql_exec->num_rows > 0) {
        $users = $sql_exec->fetch_assoc();
        if(password_verify($password, $users['password'])){
            if(!isset($_SESSION)){
                session_start();
            }
            
            $_SESSION['id'] = $users['id'];
            $_SESSION['userName'] = $users['name'];
            
            header("Location: index.php");
            exit;
        }else{
            $errorSenha = true;
        }
    }else{
        $errorName = true;
    }
    
    
    


?>