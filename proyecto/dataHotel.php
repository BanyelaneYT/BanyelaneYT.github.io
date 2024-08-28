<!doctype html>
<html lang="en">

<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
  <?php
    require('links.php');
    ?>
   <link rel="stylesheet" href="css/index.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Libros</title>
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
						<h4>Libros</h4>
					</div>
					<div class="card-body">
					<div class="table-responsive">
							<?php 
							require("conexion/conexion.php");
							$sql = "SELECT * FROM hotel";
							$result = mysqli_query($db,$sql);
							?>
							<table id='userList' class='table table-bordered table-hover table-striped'>
								<thead class='thead-light'>
								<tr>
									<th scope='col'>Titulo</th>
									<th scope='col'>Descripcion</th>
									<th scope='col'>Enlace</th>
									<th scope='col'>Foto</th>
								</tr>
								<?php
								while($row = mysqli_fetch_array($result)){
								?>
								</thead>
								<tbody>
                        			<th><?php echo $row['nombre']?></th>
                        			<th><?php echo $row['descripcion']?></th>
                        			<th><?php echo $row['enlace']?></th>
                        			<th><img height="50px" src="../proyecto/guardar/fotos/<?php echo $row['imagen'];?>"/> 
									<td>
										<a href="editar/editarDataHotel.php?id=<?php echo $row['id_hotel']?>"><i class='fas fa-edit'></i></a> | <a href="delete/deleteDataHotel.php?id=<?php echo $row['id_hotel']?>"><i class='fas fa-user-times'></i></a>
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
						<h4>Añadir</h4>
					</div>
					<div class="card-body">
					<form class="row g-4" method="POST" action="guardar/guardarDataHotel.php">
            <div class="col-md-6">
              <label class="form-label">Nombre del libro</label>
              <input type="text" class="form-control" name="txtnombre" id="txtnombre" required="">
            </div>
            <div class="col-md-6">
              <label class="form-label">Descripcion del libro</label>
              <input type="text" class="form-control" name="txtdescripcion" id="txtdescripcion" required="">
            </div>
            <div class="col-md-7">
              <label class="form-label">Enlace de venta</label>
			  <input type="text" class="form-control" name="txtenlace" id="txtenlace" required="">
            </div>
			<div class="col-md-5">
              <label class="form-label">Imagen del libro</label>
			  <input type="file" class="form-control" name="txtimagen" id="txtimagen" required="">
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
<section></section>

</html>