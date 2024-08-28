<?php
    require("../conexion/conexion.php");

    $nombre=$_POST["txtnombre"];
    $descripcion=$_POST["txtdescripcion"];
    $enlace=$_POST["txtenlace"];
    $imagen=$_POST["txtimagen"];



    $insertar="INSERT INTO hotel(nombre, descripcion, enlace, imagen) VALUES ('$nombre',' $descripcion','$enlace','$imagen')";

    $resultado=mysqli_query($db, $insertar);

    if($resultado){
        echo "<script>alert('Datos Guardados Correctamente');
        window.location='../dataHotel.php'</script>";
    }else{
        echo "<script>alert('Los Datos no se guardaron Intente de Nuevo');
        windows.history.go(-1);</script>";
    }
    
?>