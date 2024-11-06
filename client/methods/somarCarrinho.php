<?php
include '../config/db.php';
// Recebe os dados enviados via POST e converte o JSON de volta para uma array

$jsonData = file_get_contents('php://input');

// Decodifica o JSON
$dados = json_decode($jsonData, true);
$valorTotalCarrinho = 0;

foreach ($dados as $idDishe => $quantDishes) {
    $sql = "SELECT * FROM dishes1 WHERE id = $idDishe";
    $result = $db->query($sql);
    while($user_data = mysqli_fetch_assoc($result)){
        $i = 0;
        while($i < $quantDishes){
            $valorTotalCarrinho = $valorTotalCarrinho + $user_data['priceDishe'];
            $i = $i + 1;
        }
        
    }
}
if ($dados !== null) {
    //echo var_dump($dados), '<br>';
    echo $valorTotalCarrinho;
} else {
    echo "Erro ao decodificar JSON.";
}

?>