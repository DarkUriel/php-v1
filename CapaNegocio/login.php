<?php
    include("../CapaDatos/Controlador.php");
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (Validar($username, $password)) {
        //header("Location: ../CapaPresentacion/Menu.html");
        echo'true';
    }else{
        echo 'error';
    }
?>