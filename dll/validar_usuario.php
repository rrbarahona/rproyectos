<?php
    session_start();
    if (($_POST['usuario']) && ($_POST['clave'])) {
        $user=$_POST['usuario'];
        $pass=md5($_POST['clave']);

        include ("config.php");
        include ("class_mysql.php");

        $miconexion = new class_mysqli;
        $miconexion->conectar($servername, $username, $password, $database);
        $miconexion->consulta("select * from usuarios where correo='$user' and clave='$pass'");
        $lista = $miconexion->consulta_lista();
        if (isset($lista[0])) {
            $_SESSION['id_user']=$lista[0];
            $_SESSION['roll']=$lista[4];
            $_SESSION['nombres_user']=$lista[1]." ".$lista[2];

            echo "<script>location.href='../administrator/index.php'</script>";
        } else {
            echo '<script>alert("Datos Incorrectos..");</script>';
            echo "<script>location.href='../internas/login.html'</script>";
        } 

    } else {
        echo "<script>location.href='../internas/login.html'</script>";
    }    
    
?>