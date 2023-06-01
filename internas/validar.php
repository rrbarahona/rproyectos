<?php
    include("../dll/config.php");
    include("../dll/mysql.php");
    
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];  
    $dni = $_POST['dni'];  
    $rol = $_POST['rol'];
    $clave = $_POST['clave'];
    
    //Encriptar clave
    $clave = md5($clave);

    $sql = "insert into usuarios values ('','$nombres','$apellidos','$dni','$rol','$correo','$clave')";
    $result = mysqli_query($conn,$sql);
    
    if ($result) {
        echo "Registro Guardado";
    }
    mysqli_close($conn);
    echo "<script>location.href='registros.php'</script>";
?>