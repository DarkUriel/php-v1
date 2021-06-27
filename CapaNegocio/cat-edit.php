<?php
    include('../CapaDatos/DataBase.php');
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $id = $_POST['id'];
        if (Editar($id,$name,$description)) {
            echo 'Categoria actualizada correctamente';
        }
    }
?>