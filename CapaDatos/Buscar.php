<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "dbembolcruz";
    $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $search = $_POST['search'];

    if(!empty($search)){
        $query = "SELECT * FROM Categoria WHERE Nombre LIKE '$search%'";
        $result = mysqli_query($db, $query);
        if(!$result){
            die("Query Error". mysqli_error($db));
        }else{
            $json = array();
            while($row = mysqli_fetch_array($result)){
                $json[] = array(
                    'name' => $row['Nombre'],
                    'description' => $row['Descripcion'],
                    'id' => $row['Id_Categoria']
                );
            }
            $jsonstring = json_encode($json);
            echo $jsonstring;
        }
    }


?>