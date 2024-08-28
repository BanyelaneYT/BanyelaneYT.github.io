<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contactame</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../css/estilo7.css">
</head>
<body>
    <header class="hero">
        <div class="container">
            <nav class="nav">
                <a href="contacto.php" class="nav__items nav__items--cta">Contactame</a>
                <a href="recomendado.php" class="nav__items">Recomendados</a>
                <a href="categoria.php" class="nav__items">Generos</a>   
                <a href="https://hostperfecto.com/delgado/PaginaWeb/Libros.php" class="nav__items">Libros</a> 
                <a href="https://hostperfecto.com/delgado/proyecto/proyecto.php" class="nav__items">Login</a>    
            </nav>
        </div>
        <section>

        <div class="contact-form">
            <div>
               <h1 class="logo">INGRESE SUS DATOS</h1>
            </div> 
            <form name="frmregistro" method="POST" action="guardarcontactos.php">
                <p>
                    <label class="dato__formulario">Nombre:</label><br/>
                    <input type="text" name="txtnombre" id="txtnombre"  class="respuesta__formulario" placeholder="Ingrese su nombre" pattern="[a-z A-Z]+" size="25" maxlength="30" required/><br/>
                </p>
                <p>
                    <label class="dato__formulario">Apellido:</label><br/>
                    <input type="text" name="txtapellido" id="txtapellido" class="respuesta__formulario" placeholder="Ingrese su apellido" pattern="[a-z A-Z]+" size="25" maxlength="30" required/><br/>
                </p>
                <p>
                    <label class="dato__formulario">Teléfono:</label><br/>
                    <input type="tel" name="txttelefono" class="respuesta__formulario" placeholder="ingrese su numero" size="25" maxlength="9"><br/>
                </p>
                <p>
                    <label class="dato__formulario">Correo:</label><br/>
                    <input type="email" name="txtcorreo" class="respuesta__formulario" placeholder="usuario@dominio" size="25" maxlength="50"><br/>
                </p>
                <p class="block">
                    <input type="submit" name="btnaceptar" class="button" value="ACEPTAR">
                    <input type="reset" name="btnlimpiar" class="button" value="LIMPIAR">
                </p>
            </form><br><br>
            <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243.8666485364527!2d-77.02845204862423!3d-12.052713620192328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8b9ee2f8e8d%3A0x34bd16984d1d7360!2sGaleria%20Lima%20Plaza!5e0!3m2!1ses-419!2spe!4v1655595424436!5m2!1ses-419!2spe" width="90%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
    </section>
    </header>
</body>
</html>