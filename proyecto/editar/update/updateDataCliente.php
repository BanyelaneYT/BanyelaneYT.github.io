<?php

require("../../conexion/conexion.php");

$id_cliente = $_POST['id_cliente'];
$nombre=ucfirst($_POST["txtnombre"]);
$apellidos=$_POST["txtapellidos"];
$telefono=$_POST["txttelefono"];
$email=$_POST["txtemail"];
$direccion=$_POST["txtdireccion"];


$sql="UPDATE cliente SET  nombre='$nombre',apellidos='$apellidos',telefono='$telefono',email='$email',direccion='$direccion' WHERE id_cliente='$id_cliente'";
$result = mysqli_query($db,$sql);

if($result){
    echo "<script>alert('Datos Guardados Correctamente');
    window.location='../../dataCliente.php'</script>";
}else{
    echo "<script>alert('Los Datos no se guardaron Intente de Nuevo');
    windows.history.go(-1);</script>";
}
?>