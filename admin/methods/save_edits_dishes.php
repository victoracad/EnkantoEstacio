<?php 
if(!empty($_GET['id'])){
    $idDishe = $_GET['id'];

    $sqlSelect = "SELECT * FROM dishes1 WHERE  id = $idDishe";

    $result = $db->query($sqlSelect);
    

    if($result->num_rows > 0){
        while($user_data = mysqli_fetch_assoc($result)){
            $nameDishe = $user_data['nameDishe'];
            $descDishe = $user_data['descDishe'];
            $priceDishe = $user_data['priceDishe'];
            $opcaoDishe = $user_data['typeDishe'];
            $opcao = $user_data['status'];    
        }
        
    }else{
        //header('Location: cardapio.php');
    }

}
    
    if(isset($_POST['nameDishe']) && isset($_POST['descDishe']) && isset($_POST['priceDishe']) && isset($_POST['opcoesDishe']) && isset($_POST['opcao']) && isset($_POST['update'])){
        $idDishe = $_GET['id'];
        $nameDishe = $_POST['nameDishe'];
        $descDishe = $_POST['descDishe'];
        $priceDishe = $_POST['priceDishe'];
        $opcaoDishe = $_POST['opcoesDishe'];
        $opcao = $_POST['opcao'];

        $sqlUpdate = "UPDATE dishes1 SET nameDishe='$nameDishe', descDishe='$descDishe', priceDishe='$priceDishe', typeDishe='$opcaoDishe', status='$opcao' WHERE id='$idDishe'";

        $result = $db->query($sqlUpdate);
        header('Location: cardapio.php');
    }
    



?>