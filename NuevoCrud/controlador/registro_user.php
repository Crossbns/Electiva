<?php
include 'modelo/conexion';

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["Nombre"]) and !empty($_POST["Apellido"]) and !empty($_POST["Edad"]) and !empty($_POST["Dni"]) and !empty($_POST["Productos"]))
    {
        $nombre=$_POST["Nombre"];
        $apellido=$_POST["Apellido"];
        $edad=$_POST["Edad"];
        $dni=$_POST["Dni"];
        $productos=$_POST["Productos"];

        $sql=$conexion->query(" INSERT INTO Usuarios(Nombre, Apellido, Edad, Dni, Productos)VALUES('$nombre', '$apellido', '$edad', '$dni', '$productos') ");
        if ($sql==1) {
            header("location:crud.php");
        }else {
            echo '<div class="alert alert-danger">Error al Registrar</div>';
        }
    
    }else{
        echo '<div class="alert alert-warning">Alguno de los Campos Esta Vacio</div>';
    }
}

?>