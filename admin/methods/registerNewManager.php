<?php 
        session_start();

    
        $sql_code = "SELECT password FROM managers WHERE name = '$user' LIMIT 1";
        $sql_exec = $db ->query($sql_code) or die($db->error);

        if ($sql_exec->num_rows > 0) {
            $errorUsex = true;
        }else{
            $sql_code = "INSERT INTO managers (name, password) VALUES ('$user', '$password')";
            $sql_exec = $db ->query($sql_code) or die($db->error);
            if(isset($_SESSION['userName'])){
                header("Location: managers.php");
                exit;
            }
            //header('Location: ./login.php');
        }

        
    

?>