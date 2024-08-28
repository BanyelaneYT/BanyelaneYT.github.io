<?php
$id = $_GET['id'];
require("../conexion/conexion.php");
$sql = "SELECT * FROM empleado where id_empleado='$id'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    require('../links.php');
    ?>
    <link rel="stylesheet" href="../estilos/cssMenuCrud.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Editar Usuarios</title>
</head>

<body>
    <?php

    session_start();
    $usuario = $_SESSION['usuariologeado'];

    if (!isset($usuario)) {
        header("location: ../proyecto.php");
    }
    ?>

    <div class="col-1">
       
    </div>
    <div class="container">
        <div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
            <ul class="nav nav-tabs justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Formulario</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="card">
                    <div class="card-header">
                        <h4>Usuarios</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-4" method="POST" action="update/updateDataEmpleado.php" enctype='multipart/form-data'>
                            <div class="col-md-6">
                                <input type="hidden" name="id_empleado" value="<?php echo $row['id_empleado']  ?>">
                                <label class="form-label">Nombre:</label>
                                <input type="text" class="form-control" value="<?php echo $row['nombre'] ?>" name="txtnombre" id="txtnombre" required="" pattern="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Apellidos:</label>
                                <input type="text" class="form-control" value="<?php echo $row['apellidos'] ?>" name="txtapellidos" id="txtapellidos" required="" pattern="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Foto:</label>
                                <input type="file" class="form-control" name="image" id="image" accept="image/*" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">DNI:</label>
                                <input type="text" class="form-control" name="txtdni" id="txtdni" maxlength="8" minlength="8" required="" pattern="[0-9]+" disabled>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Sexo</label>
                                <select class="form-select" name="txtsexo" id="txtsexo" disabled>
                                    <option value="M" selected>Masculino</option>
                                    <option value="F" selected>Femenino</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email:</label>
                                <input type="email" class="form-control" name="txtemail" id="txtemail" value="<?php echo $row['email'] ?>" required="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Dirección:</label>
                                <input type="text" class="form-control" name="txtdireccion" id="txtdireccion" required="" value="<?php echo $row['direccion'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Celular:</label>
                                <input type="text" class="form-control" name="txtcelular" id="txtcelular" maxlength="9" minlength="9" required="" pattern="[0-9]+" value="<?php echo $row['celular'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Fecha Nacimiento:</label>
                                <input type="date" class="form-control" name="txtfecha_nac" id="txtfecha_nac" required="" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Observaciones:</label>
                                <textarea type="text" class="form-control" name="txtobservaciones" id="txtobservaciones" disabled></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>