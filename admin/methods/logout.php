<?php //include_once './config/config.php';
session_start();

//unset($_SESSION['userLogged']);
unset($_SESSION['Id']);
unset($_SESSION['userName']);

header("Location: ../login.php");