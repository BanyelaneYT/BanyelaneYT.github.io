<?php
    $db=mysqli_connect("localhost","","","hostperfecto_delgado");

    if(!$db){

            echo "Error de Conexion";

            exit;

        }

        echo "Conexion correcta";

?>    
