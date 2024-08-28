<?php
require("../conexion/conexion.php");

$nombre=$_POST["txtnombre"];
$descripcion=$_POST["txtdescripcion"];
$enlace=$_POST["txtenlace"];
$imagen=$_POST["txtimagen"];

$sql="UPDATE hotel SET nombre='$nombre',direccion='$direccion', enlace='$enlace', imagen='$imagen' WHERE id_hotel='$id_hotel'";
$result = mysqli_query($db,$sql);

if($result){
    echo "<script>alert('Datos Guardados Correctamente');
    window.location='../../dataHotel.php'</script>";
}else{
    echo "<script>alert('Los Datos no se guardaron Intente de Nuevo');
    windows.history.go(-1);</script>";
}
?>