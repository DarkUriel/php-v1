<?php
    include('../CapaDatos/DataBase.php');
    $id = $_POST['id'];
    if (Eliminar($id)) {
        echo 'Category delete successfuly';
    }else{
        echo 'error';
    }
?>