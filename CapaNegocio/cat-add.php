<?php
    include('../CapaDatos/DataBase.php');
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        if (Insert($name,$description)) {
            echo 'Categoria agregada correctamente';
        }
    }
?>