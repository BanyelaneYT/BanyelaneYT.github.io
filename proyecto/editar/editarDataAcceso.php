<?php
$id = $_GET['id'];
require("../conexion/conexion.php");
$sql = "SELECT * FROM acceso where id='$id'";
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
    <title>Editar Acceso</title>
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
                        <h4>Acceso</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-4" method="POST" action="update/updateDataAcceso.php">
                            <div class="col-md-6">
                                <label class="form-label">Usuario:</label>
                                <input type="text" class="form-control" name="txtusuario" id="txtusuario" required="" value="<?php echo $row['usuario'] ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Contraseña:</label>
                                <input type="password" class="form-control" name="txtcontraseña" id="txtcontraseña" required="" value="<?php echo $row['clave'] ?>">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Confirmar Contraseña:</label>
                                <input type="password" class="form-control" name="txtvalidarcon" id="txtvalidarcon" required="" value="<?php echo $row['clave'] ?>">
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