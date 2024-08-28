<?php

require("../conexion/conexion.php");

$id_cliente = $_GET['id'];


$sql="DELETE FROM cliente where id_cliente = '$id_cliente'";
$result = mysqli_query($db,$sql);

if($result){
    echo "<script>alert('Eliminado Correctamente');
    window.location='../dataCliente.php'</script>";
}else{
    echo "<script>alert('Los Datos no se eliminaron Intente de Nuevo');
    windows.history.go(-1);</script>";
}
?>