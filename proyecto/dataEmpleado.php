<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    require('links.php');
    ?>
   <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Usuarios</title>
</head>

<body>
    <?php

    session_start();
    $usuario = $_SESSION['usuariologeado'];

    if (!isset($usuario)) {
        header("location: proyecto.php");
    }
    ?>

  <div class="col-absolute">
    <?php
    require('sider.php');
    ?>
  </div>
    <div class="container">
        <div class="mx-auto col-sm-8 main-section" id="myTab" role="tablist">
            <ul class="nav nav-tabs justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list" aria-selected="false">Lista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form" aria-selected="true">Formulario</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                    <div class="card">
                        <div class="card-header">
                            <h4>Datos de Usuarios</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                require("conexion/conexion.php");
                                $sql = "SELECT * FROM empleado";
                                $result = mysqli_query($db, $sql);
                                ?>
                                <table id='userList' class='table table-bordered table-hover table-striped'>
                                    <thead class='thead-light'>
                                        <tr>
                                            <th scope='col'>Dni</th>
                                            <th scope='col'>Nombre</th>
                                            <th scope='col'>Email</th>
                                            <th scope='col'>Direccion</th>
                                            <th scope='col'>Celular</th>
                                            <th scope='col'>CuentaAcceso</th>
                                        </tr>
                                        <?php
                                        while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope='row'><?php echo $row['dni'] ?></th>
                                            <td><?php echo $row['nombre'] ?> <?php echo $row['apellidos'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['direccion'] ?></td>
                                            <td><?php echo $row['celular'] ?></td>
                                            <td><?php echo $row['cuenta_acceso'] ?></td>
                                            <td>
                                                <a href="editar/editarDataEmpleado.php?id=<?php echo $row['id_empleado'] ?>"><i class='fas fa-edit'></i></a> | <a href="delete/deleteDataEmpleado.php?id=<?php echo $row['id_empleado'] ?>"><i class='fas fa-user-times'></i></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
                    <div class="card">
                        <div class="card-header">
                            <h4>Añadir</h4>
                        </div>
                        <div class="card-body">
                            <form class="row g-4" method="POST" action="guardar/guardarDataEmpleado.php" enctype='multipart/form-data'>
                                <div class="col-md-6">
                                    <label class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" name="txtnombre" id="txtnombre" required="" pattern="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Apellidos:</label>
                                    <input type="text" class="form-control" name="txtapellidos" id="txtapellidos" required="" pattern="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Foto:</label>
                                    <input type="file" class="form-control" name="image" id="image" accept="image/*">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">DNI:</label>
                                    <input type="text" class="form-control" name="txtdni" id="txtdni" maxlength="8" minlength="8" required="" pattern="[0-9]+">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Sexo</label>
                                    <select class="form-select" name="txtsexo" id="txtsexo">
                                        <option value="M" selected>Masculino</option>
                                        <option value="F" selected>Femenino</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="txtemail" id="txtemail" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Dirección:</label>
                                    <input type="text" class="form-control" name="txtdireccion" id="txtdireccion" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Celular:</label>
                                    <input type="text" class="form-control" name="txtcelular" id="txtcelular" maxlength="9" minlength="9" required="" pattern="[0-9]+">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Fecha Nacimiento:</label>
                                    <input type="date" class="form-control" name="txtfecha_nac" id="txtfecha_nac" required="">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Observaciones:</label>
                                    <textarea type="text" class="form-control" name="txtobservaciones" id="txtobservaciones"></textarea>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>