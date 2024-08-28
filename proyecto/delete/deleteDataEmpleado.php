<?php

require("../conexion/conexion.php");

$id_empleado = $_GET['id'];


$sql="DELETE FROM empleado where id_empleado = '$id_empleado'";
$result = mysqli_query($db,$sql);

if($result){
    echo "<script>alert('Eliminado Correctamente');
    window.location='../dataEmpleado.php'</script>";
}else{
    echo "<script>alert('Los Datos no se eliminaron Intente de Nuevo');
    windows.history.go(-1);</script>";
}
?>