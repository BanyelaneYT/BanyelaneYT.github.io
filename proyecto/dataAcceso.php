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
  <title>DataAcceso</title>
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
						<h4>Acceso</h4>
					</div>
					<div class="card-body">
					<div class="table-responsive">
							<?php 
							require("conexion/conexion.php");
							$sql = "SELECT * FROM acceso";
							$result = mysqli_query($db,$sql);
							?>
							<table id='userList' class='table table-bordered table-hover table-striped'>
								<thead class='thead-light'>
								<tr>
									<th scope='col'>Id</th>
									<th scope='col'>Usuario</th>
									<th scope='col'>Clave</th>
								</tr>
								<?php
								while($row = mysqli_fetch_array($result)){
								?>
								</thead>
								<tbody>
								<tr>
									<th scope='row'><?php echo $row ['id']?></th>
									<td><?php echo $row ['usuario']?></td>
									<td><?php echo $row ['clave']?></td>
									<td>
										<a href="editar/editarDataAcceso.php?id=<?php echo $row['id']?>"><i class='fas fa-edit'></i></a> | <a href="delete/deleteDataAcceso.php?id=<?php echo $row['id']?>"><i class='fas fa-user-times'></i></a>
									</td>
								</tr>
								<?php }?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
				<div class="card">
					<div class="card-header">
						<h4>Añadir Accesos</h4>
					</div>
					<div class="card-body">
					<form class="row g-4" method="POST" action="guardar/guardarDataAcceso.php">
          <div class="col-md-6">
              <label class="form-label">Usuario:</label>
              <input type="text" class="form-control" name="txtusuario" id="txtusuario" required="">
            </div>
            <div class="col-md-6">
              <label class="form-label">Contraseña:</label>
              <input type="password" class="form-control" name="txtcontraseña" id="txtcontraseña" required="">
            </div>
            <div class="col-md-4">
              <label class="form-label">Confirmar Contraseña:</label>
              <input type="password" class="form-control" name="txtvalidarcon" id="txtvalidarcon" required="">
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