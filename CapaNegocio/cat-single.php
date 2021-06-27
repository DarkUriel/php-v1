<?php
    include('../CapaDatos/DataBase.php');
    $id = $_POST['id'];
    $jsonstring = json_encode(Obtener($id));
    echo($jsonstring);
?>