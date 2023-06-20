<?php
    session_start();

    if ($_SESSION['id_user'] && $_SESSION['roll'] && $_SESSION['nombres_user']) {
        include ("../dll/config.php");
        include ("../dll/class_mysql.php");

        $miconexion = new class_mysqli;
        $miconexion->conectar($servername, $username, $password, $database);
    } else {
        echo '<script>alert("Inicio Incorrecto..");</script>';
        echo "<script>location.href='../internas/login.html'</script>";
    }
    
?>