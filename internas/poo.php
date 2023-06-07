<?php
    include("../dll/config.php");
    include("../dll/class_mysql.php");
    
    $miconexion = new class_mysqli;
    $miconexion->conectar($servername, $username, $password, $database);

    //$sql = "insert into usuarios values ('', 'Juan', 'Carrion', '11111', 'admin', 'jcarrion@gmail.com', '9999')";
    //$sql = "delete from usuarios where id = 13";
    //$clave=md5('999');
    //$sql = "update usuarios set clave = '$clave' where id=14";
    $sql = "select * from usuarios";
    $res = $miconexion->consulta($sql); 
    $miconexion->verconsulta();

    /*$res=$miconexion->consulta($sql);
    if ($res) {
        echo "La sentencia se ha ejecutado correctamente";
    } else {
        echo "Hay un error de sql";
    }*/
    
?>