<?php

$sql = "SELECT * FROM clients ORDER BY id DESC ";
$result = $db->query($sql);


while($user_data = mysqli_fetch_assoc($result)){
    echo "<tr class='alo'>
                <td>{$user_data['id']}</td>
                <td>{$user_data['nome']}</td>
                <td>{$user_data['cpf']}</td>
                <td>{$user_data['endereco']}</td>
                <td>{$user_data['telefone']}</td>
                <td>{$user_data['status']}</td>
                <td>{$user_data['idComanda']}</td>
                <td>
                    <div class='div_btns'>
                        <a href='./methods/delete_client.php?id=$user_data[id]'><button class=\"btn-delete\">
                                <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                    delete
                                </span>
                            </button>
                        </a>
                        <a href='./editClient.php?id=$user_data[id]'><button class=\"btn-edit\">
                            <span style=\"color: white;\" class=\"material-symbols-outlined\">
                                edit
                            </span>
                        </button>
                        </a>
                    </div>
                </td>
            </tr>
            
    ";
}


?>