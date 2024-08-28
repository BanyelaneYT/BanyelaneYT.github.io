<?php

require("../../conexion/conexion.php");

$id = $_POST['id'];
$usuario = ($_POST["txtusuario"]);
$contraseña = ($_POST["txtcontraseña"]);      
$repetircon = ($_POST["txtvalidarcon"]);
$sql = "SELECT COUNT(*) total FROM acceso where usuario='$usuario'";
    $result = mysqli_query($db, $sql);
    $fila = mysqli_fetch_assoc($result);
if($contraseña==$repetircon){
                      
        $contraseña=md5($contraseña);
        $insertar = "UPDATE acceso SET  usuario='$usuario',clave='$contraseña'WHERE id='$id'";
                $resultado = mysqli_query($db, $insertar);
                if ($resultado) {
                    echo "<script>alert('Datos guardados correctamente');
         window.location='../../dataAcceso.php'</script>";
                } else {
                    echo "<script>alert('Datos No se Guardaron Intente Nuevamente');
         window.location='../../dataAcceso.php'</script>";
                }
   
    }
else{
            echo "<script>alert('LAS CLAVES NO COINCIDEN INTENTE NUEVAMENTE');
        window.location='../../dataAcceso.php'</script>";
}

?>