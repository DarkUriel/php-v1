<?php
    function getDB(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "dbembolcruz";
        $db = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        return $db;
    }

    function Validar($username, $password){
        $query = "SELECT * FROM Usuario WHERE Login = '$username' AND Password = '$password'";
        $result = mysqli_query(getDB(),$query);
        if(mysqli_num_rows($result)==1){
            return true;
        }else{
            return false;
        }
        mysqli_close(getDB());
    }

?>