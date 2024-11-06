<?php 
if(!empty($_GET['id'])){
    $idClient = $_GET['id'];

    $sqlSelect = "SELECT * FROM clients WHERE  id = $idClient";

    $result = $db->query($sqlSelect);
    

    if($result->num_rows > 0){
        while($user_data = mysqli_fetch_assoc($result)){
            $name_client = $user_data['nome'];
            $cpf_client = $user_data['cpf'];
            $rg_client = $user_data['rg'];
            $endereco_client = $user_data['endereco'];
            $telefone_client = $user_data['telefone'];    
        }
        
    }else{
        //header('Location: cardapio.php');
    }

}
    
    if(isset($_POST['username']) && isset($_POST['cpf']) && isset($_POST['rg']) && isset($_POST['end']) && isset($_POST['tel']) && isset($_POST['btn'])){
        $name_client = $_POST['username'];
        $cpf_client = $_POST['cpf'];
        $rg_client = $_POST['rg'];
        $endereco_client = $_POST['end'];
        $telefone_client = $_POST['tel'];


        $sqlUpdate = "UPDATE clients SET nome='$name_client', cpf='$cpf_client', rg='$rg_client', endereco='$endereco_client', telefone='$telefone_client' WHERE id='$idClient'";

        $result = $db->query($sqlUpdate);
        header('Location: clientes.php');
    }
    



?>