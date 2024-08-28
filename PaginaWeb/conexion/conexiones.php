<?php
    
    $hostname = "localhost";
    $database = "senati19";
    $username = "root";
    $password = "";

    $db=mysqli_connect("$hostname","$username","$password","$database");
    if (!$db){
        echo "error de conexion";
        exit;
    }
?>