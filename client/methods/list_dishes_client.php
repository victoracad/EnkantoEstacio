<?php

use function PHPSTORM_META\type;

$typeDISHE = 0;

function list_dishes($typeDISHE){
    switch ($typeDISHE){
        case 1:
            include '../admin/config/db.php';
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 1 AND status = 'No Cardápio'";
            $result = $db->query($sql);
            while($user_data = mysqli_fetch_assoc($result)){
                echo "
                    <div onclick=\"redirecionarComId({$user_data['id']})\" class=\"cardPrato\">
                        <div class=\"description_name\">
                            <span class=\"nameDishe\">{$user_data['nameDishe']}</span>
                            <span class=\"description\">{$user_data['descDishe']}</span>
                            <span class=\"precoDesc\">R\${$user_data['priceDishe']}</span>
                        </div>
                        <div class=\"div_imgPrato\">
                            <img class=\"img_pfex\" src=\"assets/imgpratofeitoexNEW.png\" alt=\"\">
                        </div>
                    </div>";
            }
            break;
        case 2:
            include '../admin/config/db.php';
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 2 AND status = 'No Cardápio'";
            $result = $db->query($sql);
            while($user_data = mysqli_fetch_assoc($result)){
                echo "
                    <div onclick=\"redirecionarComId({$user_data['id']})\" class=\"cardPrato\">
                        <div class=\"description_name\">
                            <span class=\"nameDishe\">{$user_data['nameDishe']}</span>
                            <span class=\"description\">{$user_data['descDishe']}</span>
                            <span class=\"precoDesc\">R\${$user_data['priceDishe']}</span>
                        </div>
                        <div class=\"div_imgPrato\">
                            <img class=\"img_pfex\" src=\"assets/bebidasEx.png\" alt=\"\">
                        </div>
                    </div>";
            }
            break;
        case 3:
            include '../admin/config/db.php';
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 3 AND status = 'No Cardápio'";
            $result = $db->query($sql);
            while($user_data = mysqli_fetch_assoc($result)){
                echo "
                    <div onclick=\"redirecionarComId({$user_data['id']})\" class=\"cardPrato\">
                        <div class=\"description_name\">
                            <span class=\"nameDishe\">{$user_data['nameDishe']}</span>
                            <span class=\"description\">{$user_data['descDishe']}</span>
                            <span class=\"precoDesc\">R\${$user_data['priceDishe']}</span>
                        </div>
                        <div class=\"div_imgPrato\">
                            <img class=\"img_pfex\" src=\"assets/porcoesimg.png\" alt=\"\">
                        </div>
                    </div>";
            }
            break;
        case 4:
            include '../admin/config/db.php';
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 4 AND status = 'No Cardápio'";
            $result = $db->query($sql);
            while($user_data = mysqli_fetch_assoc($result)){
                echo "
                    <div onclick=\"redirecionarComId({$user_data['id']})\" class=\"cardPrato\">
                        <div class=\"description_name\">
                            <span class=\"nameDishe\">{$user_data['nameDishe']}</span>
                            <span class=\"description\">{$user_data['descDishe']}</span>
                            <span class=\"precoDesc\">R\${$user_data['priceDishe']}</span>
                        </div>
                        <div class=\"div_imgPrato\">
                            <img class=\"img_pfex\" src=\"assets/petiscosimg.png\" alt=\"\">
                        </div>
                    </div>";
            }
            break;
        case 5:
            include '../admin/config/db.php';
            $sql = "SELECT * FROM dishes1 WHERE typeDishe = 5 AND status = 'No Cardápio'";
            $result = $db->query($sql);
            while($user_data = mysqli_fetch_assoc($result)){
                echo "
                    <div onclick=\"redirecionarComId({$user_data['id']})\" class=\"cardPrato\">
                        <div class=\"description_name\">
                            <span class=\"nameDishe\">{$user_data['nameDishe']}</span>
                            <span class=\"description\">{$user_data['descDishe']}</span>
                            <span class=\"precoDesc\">R\${$user_data['priceDishe']}</span>
                        </div>
                        <div class=\"div_imgPrato\">
                            <img class=\"img_pfex\" src=\"assets/sobremesasimg.png\" alt=\"\">
                        </div>
                    </div>";
            }
            break;
            
    }
    
    


    
}



?>