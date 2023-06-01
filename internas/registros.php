<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atractivos Turisticos</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body>
    <header class="cabeceraPrincipal" id="inicio">
        <section class="logo">
            <img src="../images/logotipo.png" title="Logotipo de Atractivos Turisticos">
        </section>
        <section class="buscador">
            <input type="text" placeholder="Buscar...">
        </section>
    </header>
    <nav class="menuPrincipal">
        <a href="../index.html">Inicio</a>
        <a href="../index.html#atractivos">Atractivos</a>
        <a href="">Gastronomía</a>
        <a href="">Cultura</a>
        <a href="../index.html#hoteles">Hoteles</a>
        <a href="registros.php">Listados</a>
        <a href="../index.html#contactos">Contactos</a>
    </nav>
    <section class="contenedor">
        <div class="espacio"></div>
        <h2 class="titulosH2" id="atractivos">LISTADO DE REGISTROS DE USUARIOS</h2>
        <?php
            include("../dll/config.php");
            include("../dll/mysql.php");

            $sql = "select * from usuarios";
            $result = mysqli_query($conn,$sql);
            if ($result) {
                echo "<table border=1>";
                echo "<tr>";
                    echo "<td>ID</td>";
                    echo "<td>Nombres</td>";
                    echo "<td>Apellidos</td>";
                    echo "<td>Cédula</td>";
                    echo "<td>Rol</td>";
                    echo "<td>Correo</td>";
                echo "</tr>";    
                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    for ($i=0; $i < 6; $i++) { 
                        echo " <td> ".$row[$i]."</td>";
                    }
                    echo "<tr>";
                }
                echo "<table>";
            }
            mysqli_close($conn);
        ?>
    </section>

    <div class="espacio"></div>
    <footer class="piePagina" id="contactos">
        <section>
            <img src="../images/logotipo2.png">
            <p>Derechos Reservados 2023</p>
        </section>
        <section>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#atractivos">Atractivos</a></li>
                <li><a href="#inicio">Gastronomía</a></li>
                <li><a href="#inicio">Cultura</a></li>
                <li><a href="#hoteles">Hoteles</a></li>
                <li><a href="#contactos">Contactos</a></li>
            </ul>
        </section>
        <section>
            <p>
                0985215892<br>
                0985925821<br>
                mailto: info@sabirm.com<br>
                Loja - Ecuador
            </p>
        </section>
    </footer>
</body>
</html>