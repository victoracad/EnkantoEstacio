<?php 
    $sql = "SELECT * FROM clients ORDER BY id DESC ";
    $result10 = $db->query($sql);

    while($user_data10 = mysqli_fetch_assoc($result10)){
        echo "
        <option value=\"{$user_data10['id']}\">{$user_data10['nome']}</option>
        ";
    }

?>