<?php
require("../conexion/conexion.php");

$dni = $_POST["txtdni"];
$nombre = ucfirst($_POST["txtnombre"]);
$apellidos = ucfirst($_POST["txtapellidos"]);
$sexo = $_POST["txtsexo"];
$email = $_POST["txtemail"];
$fecha_nac = $_POST["txtfecha_nac"];
$direccion = $_POST["txtdireccion"];
$celular = $_POST["txtcelular"];
$observaciones = ucfirst($_POST["txtobservaciones"]);
$file = $_FILES["image"]['tmp_name'];

$cadenadni = strlen($dni);
$cadenacelular = strlen($celular);

if ($cadenadni == 8 && ($cadenacelular == 9 || $cadenacelular == 0)) {
  $sql = "SELECT COUNT(*) total FROM empleado where dni='$dni'";
  $result = mysqli_query($db, $sql);
  $fila = mysqli_fetch_assoc($result);
  if ($fila['total'] == 0) {
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name = addslashes($_FILES['image']['name']);
    $image_size = getimagesize($_FILES['image']['tmp_name']);
    if ($image_size == FALSE) {
      $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $ext = strtolower($ext);
      move_uploaded_file($_FILES["image"]["tmp_name"], "fotos/sinimagen.jpg");
      $location = "sinimagen.jpg";
    } else {
      $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
      $ext = strtolower($ext);
      move_uploaded_file($_FILES["image"]["tmp_name"], "fotos/" . $dni . "." . $ext);
      $location = $dni . "." . $ext;
    }
    $insertar = "INSERT INTO empleado(dni, nombre, apellidos, sexo, email, fecha_nac,
    direccion, celular, observaciones, foto) 
    VALUES ('$dni','$nombre','$apellidos','$sexo','$email','$fecha_nac','$direccion','$celular',
    '$observaciones','$location')";
    $resultado = mysqli_query($db, $insertar);
    if ($resultado) {
      echo "<script>alert('Datos guardados correctamente');
      window.location='../dataEmpleado.php'</script>";
    } else {
      echo "<script>alert('Datos No se Guardaron Intente NUevamente');
       windows.history.go(-1);
       </script>";
    }
  } else {
    echo "<script>alert('ESTE DNI YA HA SIDO REGISTRADO');
       window.location='../dataEmpleado.php'</script>";
  }
} else {
  echo "<script>alert('DNI o CELULAR, mal ingresados');
       window.location='../dataEmpleado.php'</script>";
}
?>