<?php
$id = $_GET['id'];
require("../conexion/conexion.php");
$sql = "SELECT * FROM hotel where id_hotel='$id'";
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
    <title>Editar Libros</title>
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
                        <h4>Libros</h4>
                    </div>
                    <div class="card-body">
                        <form class="row g-4" method="POST" action="update/updateDataHotel.php">
                            <div class="col-md-6">
                                <input type="hidden" name="id_hotel" value="<?php echo $row['id_hotel'] ?>">
                                <label class="form-label">Nombre del Libro:</label>
                                <input type="text" class="form-control" name="txtnombre" value="<?php echo $row['nombre'] ?>" id="txtnombre" required="">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Descripcion del libro:</label>
                                <input type="text" class="form-control" name="txtdescripcion" value="<?php echo $row['descripcion'] ?>"  id="txtdescripcion" required="">
                            </div>
                            <div class="col-md-7">
                                <label class="form-label">Enlace de venta :</label>
                                <input type="text" class="form-control" name="txtenlace" value="<?php echo $row['enlace'] ?>"  id="txtenlace" required="">
                            </div>
                            <div class="col-md-5">
                                <label class="form-label">Cargar imagen :</label>
                                <input type="file" class="form-control" name="fileimagen" value="<?php echo $row['imagen']?>" id="fileimagen" required="">
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