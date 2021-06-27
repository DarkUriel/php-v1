<?php
    include("Controlador.php");

    //Funciones
    function Insert($name,$description){
        $query = "INSERT INTO Categoria(Nombre, Descripcion) VALUES ('$name', '$description')";
        $result = mysqli_query(getDB(), $query);
        if (!$result) {
            return false;
        }else{
            return true;
        }
        mysqli_close(getDB());
    }
    function Editar($id,$name, $description){
        $query = "UPDATE Categoria SET Nombre = '$name' , Descripcion = '$description' WHERE Id_Categoria = '$id'";
        $result = mysqli_query(getDB(), $query);
        if (!$result) {
            return false;
        }else{
            return true;
        }
        mysqli_close(getDB());
    }
    function Eliminar($id){
        $query = "Delete FROM Categoria WHERE Id_Categoria = '$id'";
        $result = mysqli_query(getDB(), $query);
        if (!$result) {
            return false;
        }else{
            return true;
        }
        mysqli_close(getDB());
    }
    function Listar(){
        $query = "SELECT * FROM Categoria";
        $result = mysqli_query(getDB(), $query);
        if (!$result) {
            die('Error '. mysqli_error(getDB()));
        }else{
            $json = array();
            while ($row = mysqli_fetch_array($result)){
                $json[] = array(
                    'name' => $row['Nombre'],
                    'des' => $row['Descripcion'],
                    'id' => $row['Id_Categoria']
                );
            }
            return $json;
        }
    }
    function Obtener($id){
        $query = "SELECT * FROM Categoria WHERE Id_Categoria = '$id'";
        $result = mysqli_query(getDB(), $query);
        if (!$result) {
        die("Error de Consulta". mysqli_error(getDB()));
        }else {
            $json = array();
            while ($row = mysqli_fetch_array($result)) {
                $json[] = array(
                    'name' => $row['Nombre'],
                    'des' => $row['Descripcion'],
                    'id' => $row['Id_Categoria']
                );
            }
            return $json[0];
    }
    }

?>