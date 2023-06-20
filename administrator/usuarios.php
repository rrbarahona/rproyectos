<?php
    include("seguridad/verificacion.php");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al Sistema</title>
</head>
<body>
    <header>
        <h1>Administrador</h1>
        <nav>
            <a href="">Dashboard</a>
            <a href="usuarios.php">Usuarios</a>
            <a href="">Perfil</a>
            <a href="seguridad/salir.php">Salir</a>
        </nav>
    </header>
    <section>
        <h2>Usuarios del Sistema</h2>
        <?php
            $sql = "select * from usuarios";
            $miconexion->consulta($sql); 
            $miconexion->verconsulta();
        ?>
    </section>    
</body>
</html>