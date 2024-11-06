<?php

$sql = "SELECT * FROM managers ORDER BY id DESC ";
$result = $db->query($sql);


while($user_data = mysqli_fetch_assoc($result)){
    echo "
    <div class=\"div_managerView\">
        <div class=\"div_managerfoto\">
            <span id=\"userImg\" class=\"material-symbols-outlined\">
            person
            </span>
        </div>
        <div class=\"info_managers\">
            <div class=\"info\">
                <span>Nome</span>
                <span>{$user_data['name']}</span>
            </div>
            <div class=\"info\">
                <span>Cargo</span>
                <span>Gerente</span>
            </div>
            <div class=\"info\">
                <span>Hora do Expediente</span>
                <span>06:00 - 12:00</span>
            </div>
            <div class=\"info\">
                <span>Status</span>
                <span>Online</span>
            </div>
        </div>


        <div class=\"buttonsPlus\">
            <button id=\"edit_btn\">Editar informações</button>
            <button id=\"del_btn\">Excluir Gerente</button>
        </div>

    </div>";
}


?>