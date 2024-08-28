<?php
    require("conexion.php");


    session_start();


    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];

    $query="select count(*) as contar from acceso where usuario='$usuario' and clave='$clave'";

    $consulta=mysqli_query($db, $query);

    $array=mysqli_fetch_array($consulta);

    if($array['contar']>0){
        $_SESSION['usuariologeado']=$usuario;
        header("location: ../dataCliente.php");
    }else{
        echo ("Datos Incorrectos");
    }

?>