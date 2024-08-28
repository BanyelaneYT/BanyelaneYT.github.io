<!DOCTYPE html>                        
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"&amp;gt>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilotar.css">
    <link rel="stylesheet" type="text/css" href="css/tarjeta.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <title>DataLibros</title>
</head>

<body>
    <header class="hero">
        <div class="container">
            <nav class="nav">
                <a href="pagina/contacto.php" class="nav__items nav__items--cta">Contactame</a>
                <a href="pagina/recomendado.php" class="nav__items">Recomendados</a>
                <a href="pagina/categoria.php" class="nav__items">Generos</a>   
                <a href="https://hostperfecto.com/delgado/PaginaWeb/Libros.php" class="nav__items">Libros</a> 
                <a href="https://hostperfecto.com/delgado/proyecto/proyecto.php" class="nav__items">Login</a>    
            </nav>
        </div>

<?php
    require("conexion/conexion.php");
    $sql="SELECT * from hotel";
    $query=mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($query)){
?>
<div class="container">
    <div class="container__card">
        <img height="50px" src="../proyecto/guardar/fotos/<?php echo $row['imagen'];?>"/> 
        <p style="color:black"><?php echo $row['nombre']?></p>
        <h4 style="color:black"><?php echo $row['descripcion']?></h4><br>
        <a class="btn btn-info" href="<?php echo $row['enlace']?>" target="_blank">Ver mas</a>
    </div>
</div>
    <?php
                    }
                    ?>
    </header>
</body>

</html>