<?php
    session_start();

    session_destroy();

    header("location: ../proyecto.php");
    exit();

?>