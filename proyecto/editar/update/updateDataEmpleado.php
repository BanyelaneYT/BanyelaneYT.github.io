<?php

require("../../conexion/conexion.php");

$id_empleado = $_POST['id_empleado'];
$nombre = ucfirst($_POST["txtnombre"]);
$apellidos = ucfirst($_POST["txtapellidos"]);
$email = $_POST["txtemail"];
$direccion = $_POST["txtdireccion"];
$celular = $_POST["txtcelular"];


$sql="UPDATE empleado SET  nombre='$nombre',apellidos='$apellidos',celular='$celular',email='$email',direccion='$direccion' WHERE id_empleado='$id_empleado'";
$result = mysqli_query($db,$sql);

if($result){
    echo "<script>alert('Datos Guardados Correctamente');
    window.location='../../dataEmpleado.php'</script>";
}else{
    echo "<script>alert('Los Datos no se guardaron Intente de Nuevo');
    windows.history.go(-1);</script>";
}
?>