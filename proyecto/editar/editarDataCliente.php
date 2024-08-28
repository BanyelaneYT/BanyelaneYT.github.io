<?php 
							$id = $_GET['id'];
							require("../conexion/conexion.php");
							$sql = "SELECT * FROM cliente where id_cliente='$id'";
							$result = mysqli_query($db,$sql);
                            $row=mysqli_fetch_array($result);
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
  <title>Editar Lectores</title>
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
						<h4>Lectores</h4>
					</div>
					<div class="card-body">
					<form class="row g-4" method="POST" action="update/updateDataCliente.php">
            <div class="col-md-6">
            <input type="hidden" name="id_cliente" value="<?php echo $row['id_cliente']  ?>">
              <label class="form-label">Nombres:</label>
              <input type="text" value="<?php echo $row['nombre']?>" class="form-control" name="txtnombre" id="txtnombre" required="" pattern="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|">
            </div>
            <div class="col-md-6">
              <label class="form-label">Apellidos:</label>
              <input type="text" value="<?php echo $row['apellidos']?>" class="form-control" name="txtapellidos" id="txtapellidos" required="" pattern="|^[a-zA-Z]+(\s*[a-zA-Z]*)*[a-zA-Z]+$|">
            </div>
            <div class="col-md-4">
              <label class="form-label">Telefono:</label>
              <input type="text" value="<?php echo $row['telefono']?>" class="form-control" name="txttelefono" id="txttelefono" maxlength="9" minlength="9" required="" pattern="[0-9]+">
            </div>
            <div class="col-md-6">
              <label class="form-label">Email:</label>
              <input type="email" value="<?php echo $row['email']?>" class="form-control" name="txtemail" id="txtemail" required="">
            </div>
            <div class="col-md-6">
              <label class="form-label">Direccion:</label>
              <input type="text" value="<?php echo $row['direccion']?>" class="form-control" name="txtdireccion" id="txtdireccion" required="" >
            </div>
            <div class="col-md-4">
              <label class="form-label">Ciudad</label>
              <select class="form-select" name="txtciudad" id="txtciudad" required="" disabled>
                <option selected>Elegir...</option>
                <option>Lima</option>
                <option>Arequipa</option>
                <option>Piura</option>
                <option>Cajamarca</option>
              </select>
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