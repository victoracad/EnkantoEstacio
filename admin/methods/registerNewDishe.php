<?php 
if(isset($_POST['nameDishe']) && isset($_POST['descDishe']) && isset($_POST['priceDishe']) && isset($_POST['opcoesDishe']) && isset($_POST['opcao'])){
    $nameDishe = $_POST['nameDishe'];
    $descDishe = $_POST['descDishe'];
    $priceDishe = $_POST['priceDishe'];
    $opcaoDishe = $_POST['opcoesDishe'];
    $opcao = $_POST['opcao'];

    $sql_code = "INSERT INTO dishes1 (nameDishe, descDishe, priceDishe, typeDishe, status) VALUES ('$nameDishe', '$descDishe', '$priceDishe', '$opcaoDishe', '$opcao')";
    $sql_exec = $db ->query($sql_code) or die($db->error);

    
}
        
        
?>