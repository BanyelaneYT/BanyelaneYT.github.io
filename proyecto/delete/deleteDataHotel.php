<?php

require("../conexion/conexion.php");

$id_hotel = $_GET['id'];


$sql="DELETE FROM hotel where id_hotel = '$id_hotel'";
$result = mysqli_query($db,$sql);

if($result){
    echo "<script>alert('Eliminado Correctamente');
    window.location='../dataHotel.php'</script>";
}else{
    echo "<script>alert('Los Datos no se eliminaron Intente de Nuevo');
    windows.history.go(-1);</script>";
}
?>