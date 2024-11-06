<?php 

include 'config.php';


// Cria a conexão
$db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

$faildb = false;

// Verifica a conexão
if ($db->connect_error) {
    die("Conexão falhou: " . $db->connect_error);
    $faildb = true;
}else{
    $faildb = false;
}


// Fechar a conexão (opcional, mas recomendado)



?>