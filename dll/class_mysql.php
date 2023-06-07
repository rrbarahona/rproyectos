<?php
    /**
     *  class mysql de desarrollo web
     */
    class class_mysqli {
        // Variables de conexión
        var $BaseDatos;
        var $Servidor;
        var $Usuario;
        var $Clave;

        // Variables de control de errores
        var $Errno=0;
        var $Error="";

        // Identificacion de consultas y conect
        var $Conexion_ID=0;
        var $Consulta_ID=0;

        // Constructor
        function class_mysqli($host="", $user="", $pass="", $db="") {
            $this-> BaseDatos=$db;
            $this-> Servidor=$host;
            $this-> Usuario=$user;
            $this-> Clave=$pass;
        }

        // Function to connect db
        function conectar($host, $user, $pass, $db) {
            if ($db != "") $this->BaseDatos=$db;
            if ($host != "") $this->Servidor=$host;
            if ($user != "") $this->Usuario=$user;
            if ($pass != "") $this->Clave=$pass;

            $this->Conexion_ID= new mysqli($this->Servidor, $this->Usuario, $this->Clave, $this->BaseDatos);

            if (!$this->Conexion_ID) {
                $this->Error="Ha fallado la conexion";
                return 0;
            }
            return $this->Conexion_ID;
        }

        // Function query
        function consulta($sql=""){
            if ($sql=="") {
                $this->Error="No hay sentencia SQL";
                return 0;
            }
            $this->Consulta_ID= mysqli_query($this->Conexion_ID, $sql);
            if (!$this->Consulta_ID) {
                echo $this->Conexion_ID->error;
            }
            return $this->Consulta_ID;
        }

        //Retorna el numero de campos de la consulta
        function numcampos(){
            return mysqli_num_fields($this->Consulta_ID);
        }

        //Retorna el numero de registro de la consulta
        function numregistro(){
            return mysqli_num_rows($this->Consulta_ID);
        }

        //Ver consulta en una tabla
        function verconsulta(){
            echo "<table border = 1 >";
            echo "<tr>";
            for ($i=0; $i < $this->numcampos(); $i++) { 
                echo "<td>".mysqli_fetch_field_direct($this->Consulta_ID, $i)->name."</td>";
            }
            echo "</tr>";
            while ($row=mysqli_fetch_array($this->Consulta_ID)) {
                echo "<tr>";
                for ($i=0; $i < $this->numcampos(); $i++) { 
                    echo "<td>".$row[$i]."</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    }
?>