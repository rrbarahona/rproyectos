<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atractivos Turisticos</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css"
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
        <a href="../index.html#contactos">Contactos</a>
    </nav>
    <section class="contenedor">
        <div class="espacio"></div>
        <h2 class="titulosH2" id="atractivos">FORMULARIO DE REGISTRO</h2>
        <form action="validar.php" method="post">
            <div class="grupoForm">
                <label for="nombres">Nombres: </label>
                <input type="text" name="nombre" id="nombres" placeholder="Ingrese sus nombres completos" required>
            </div>
            <div class="grupoForm">
                <label for="apellidos">Apellidos: </label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos completos">
            </div>   
            <div class="grupoForm">
                <label for="correo">Correo: </label>
                <input type="email" name="correo" id="correo" placeholder="Ingrese su correo electronico">
            </div>           
            <div class="grupoForm">
                <label for="fecha">Fecha de Nacimiento: </label>
                <input type="date" name="fecha" id="fecha" placeholder="Ingrese su fecha de nacimiento">
            </div>
            <div class="grupoForm">
                <button class="boton1" type="submit">Guardar</button>
            </div>
        </form>          
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
