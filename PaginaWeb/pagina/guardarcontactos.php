<?php
    require("../conexion/conexion.php");

    $nombre=$_POST["txtnombre"];
    $apellido=$_POST["txtapellido"];
    $telefono=$_POST["txttelefono"];
    $correo=$_POST["txtcorreo"];
    $ip_add = $_SERVER['REMOTE_ADDR'];


    $insertar="INSERT INTO consulta_libreria(Nombre,Apellido,Telefono,Correo,ip) VALUES ('$nombre','$apellido','$telefono','$correo','$ip_add')";

    $resultado=mysqli_query($db,$insertar);

    if($resultado){
        echo "<script>alert('Datos guardadados correctamente');
        window.location='contacto.php'</script>";
  }else{
        echo "<script>alert('Datos no guardados');
        window.history.go(-1);
        </script>";
  }

?>