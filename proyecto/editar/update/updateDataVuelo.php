<?php

require("../../conexion/conexion.php");

$numero = $_POST['numero'];
$fecha_salida=$_POST["txtfecha_salida"];
    $fecha_llegada=$_POST["txtfecha_llegada"];
    $hora_salida=$_POST["txthora_salida"];
    $hora_llegada=$_POST["txthora_llegada"];
    $avion=$_POST["txtavion"];


$sql="UPDATE vuelo SET  numero='$numero',fecha_salida='$fecha_salida',fecha_llegada='$fecha_llegada',hora_salida='$hora_salida',hora_llegada='$hora_llegada', avion = '$avion' WHERE numero='$numero'";
$result = mysqli_query($db,$sql);

if($result){
    echo "<script>alert('Datos Guardados Correctamente');
    window.location='../../dataVuelo.php'</script>";
}else{
    echo "<script>alert('Los Datos no se guardaron Intente de Nuevo');
    windows.history.go(-1);</script>";
}
?>