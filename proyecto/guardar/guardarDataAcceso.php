<?php          
    require("../conexion/conexion.php");
    $empleado = ($_POST["txtempleado"]);    $usuario = ($_POST["txtusuario"]);
    $contraseña = ($_POST["txtcontraseña"]);      $repetircon = ($_POST["txtvalidarcon"]);
    $sql = "SELECT COUNT(*) total FROM acceso where usuario='$usuario'";
    $result = mysqli_query($db, $sql);
    $fila = mysqli_fetch_assoc($result);
    if($contraseña==$repetircon){
        if ($fila['total'] == 0) {                   
            $contraseña=md5($contraseña);
            $insertar = "INSERT INTO acceso(usuario,clave, id_empleado) 
           VALUES ('$usuario','$contraseña','$empleado')";
                    $resultado = mysqli_query($db, $insertar);
            $update = "update empleado set cuenta_acceso='SI' where id_empleado='$empleado'";
            $resultado1 = mysqli_query($db, $update);        
                    if ($resultado) {
                        echo "<script>alert('Datos guardados correctamente');
             window.location='../dataAcceso.php'</script>";
                    } else {
                        echo "<script>alert('Datos No se Guardaron Intente Nuevamente');
             window.location='../dataAcceso.php'</script>";
                    }
        } else {
                    echo "<script>alert('ESTE USUARIO YA ESTA REGISTRADO');
                window.location='../dataAcceso.php'</script>";
                }
        }
    else{
                echo "<script>alert('LAS CLAVES NO COINCIDEN INTENTE NUEVAMENTE');
            window.location='../dataAcceso.php'</script>";
    }
?>