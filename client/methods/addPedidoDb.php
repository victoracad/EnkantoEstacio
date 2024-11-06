<?php 
include '../config/db.php';
if(isset($_POST['nomeCliente']) && isset($_POST['numeroComanda']) && isset($_POST['numeroMesa'])){
    $nomeCliente = $_POST['nomeCliente'];
    $numeroComanda = $_POST['numeroComanda'];
    $numeroMesa = $_POST['numeroMesa'];
    $strComandaJson = $_POST['strCarrinho'];

    //PEGA OS DADOS DO CAMPO PEDIDO DA TABELA COMANDA
    $sql = "SELECT pedidos FROM comandas WHERE id = $numeroComanda LIMIT 1";
    if ($stmt = $db->prepare($sql)) {
        $stmt->execute();
        $stmt->bind_result($oldStrCarrinho);
        if ($stmt->fetch()) {
            
        } else {
            header("Location: ../seupedido.php");
        }
        $stmt->close();
    } else {
        header("Location: ../seupedido.php");
    }
    
    $arrayOld = json_decode($oldStrCarrinho, true);
    $arrayNew = json_decode($strComandaJson, true);

    //CRIA UMA NOVA STRING DE PEDIDOS JUNTANDO A STRING ANTIGA COM UMA NOVA
    foreach ($arrayNew as $key => $value) {// Fazer o merge, somando os valores das chaves iguais
        if (isset($arrayOld[$key])) {
            
            $arrayOld[$key] += $value;// Se a chave existe em ambos, somar os valores
        } else {
            
            $arrayOld[$key] = $value;// Se a chave só existe no novo array, adicioná-la ao antigo
        }
    }
    $stringFinal = json_encode($arrayOld);// Converter o array final de volta para uma string JSON
    
    $sqlCode_SelectComanda = "SELECT * FROM comandas WHERE id = '$numeroComanda' AND status = 'ABERTA' LIMIT 1" ;
    $sql_exec = $db ->query($sqlCode_SelectComanda) or die($db->error);
    while($data_comanda = mysqli_fetch_assoc($sql_exec)){
        $idClientComanda = $data_comanda['idClient'];
    
        $sqlCode_SelectClientbyId =  "SELECT * FROM clients WHERE id = '$idClientComanda' LIMIT 1";
        $sql_exec10 = $db ->query($sqlCode_SelectClientbyId) or die($db->error);
        while($data_client = mysqli_fetch_assoc($sql_exec10)){
            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['nomeClient'] = $data_client['nome'];
        }
        
    }
    
    
    if ($sql_exec->num_rows < 1) {
        $errorUsex = true;
        header("Location: ../seupedido.php");
    }else{
        $sqlCode_UpdateComanda = "UPDATE comandas SET pedidos='$stringFinal', nameClient='$nomeCliente' WHERE id='$numeroComanda'";
        $sqlCode_InsertPedidos = "INSERT INTO pedidos (pedidos, nameCliente, mesa, idCliente) VALUES ('$strComandaJson', '$nomeCliente', '$numeroMesa', '$numeroComanda')";
        
        $sql_exec = $db ->query($sqlCode_UpdateComanda) or die($db->error);
        $sql_exec1 = $db ->query($sqlCode_InsertPedidos) or die($db->error);

        if(!isset($_SESSION)){
            session_start();
        }
        
        $_SESSION['idComanda'] = $numeroComanda;
        header("Location: ../seupedido.php");
    }
}

?>