<?php

require("../conexion/conexion.php");

$id = $_GET['id'];


$sql="DELETE FROM acceso where id = '$id'";
$result = mysqli_query($db,$sql);

if($result){
    echo "<script>alert('Eliminado Correctamente');
    window.location='../dataAcceso.php'</script>";
}else{
    echo "<script>alert('Los Datos no se eliminaron Intente de Nuevo');
    windows.history.go(-1);</script>";
}
?>