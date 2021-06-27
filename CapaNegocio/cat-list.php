<?php
    include('../CapaDatos/DataBase.php');
    $jsonstring = json_encode(Listar());
    echo($jsonstring);
?>