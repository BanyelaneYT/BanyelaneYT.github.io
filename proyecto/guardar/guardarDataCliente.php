<?php
    require("../conexion/conexion.php");

    $nombre=ucfirst($_POST["txtnombre"]);
    $apellidos=$_POST["txtapellidos"];
    $telefono=$_POST["txttelefono"];
    $email=$_POST["txtemail"];
    $direccion=$_POST["txtdireccion"];
    $ciudad=$_POST["txtciudad"];



    $insertar="INSERT INTO cliente(nombre, apellidos, telefono, email, direccion, ciudad) VALUES ('$nombre', '$apellidos',' $telefono',' $email',' $direccion',' $ciudad')";

    $resultado=mysqli_query($db, $insertar);

    if($resultado){
        echo "<script>alert('Datos Guardados Correctamente');
        window.location='../dataCliente.php'</script>";
    }else{
        echo "<script>alert('Los Datos no se guardaron Intente de Nuevo');
        windows.history.go(-1);</script>";
    }
    
?>