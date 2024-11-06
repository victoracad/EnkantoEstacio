<?php
include '../config/db.php';
// Recebe os dados enviados via POST e converte o JSON de volta para uma array
if (isset($_POST['arrayCarrinho'])) {
    
    $strCarrinho = $_POST['arrayCarrinho'];
    $arrayCarrinho = explode(',', $strCarrinho);
    
    if(!empty($strCarrinho)){
        foreach ($arrayCarrinho as $idDishe) {
            $sql = "SELECT * FROM dishes1 WHERE id = $idDishe";
            $result = $db->query($sql);
            while($user_data = mysqli_fetch_assoc($result)){
                echo "
                <div class=\"pedido_list\">
                    <div class=\"divQName\">
                        <div class=\"quantDishe\">
                            --
                        </div>
                        <div class=\"nameDlt\">
                            <b><span class=\"disheName\">{$user_data['nameDishe']}</span></b>
                            <span onclick=\"adicionarParametroNaURL('id', $user_data[id]); deleteItemCarrinho(idsArray);\" class=\"dltDishe\">Excluir</span>
                        </div>
                    </div>
    
                    <div class=\"divPrice\">
                        R\${$user_data['priceDishe']}
                    </div>
                </div>
            ";
            }
        }
    }else{
        echo 'Carrinho vazio';
    }   
}
?>