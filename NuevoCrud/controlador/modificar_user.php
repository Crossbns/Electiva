<?php
if (!empty($_POST["btnmodificaru"])) {

    if (!empty($_POST["Nombre"]) and !empty($_POST["Apellido"]) and !empty($_POST["Edad"]) and !empty($_POST["Dni"]) and !empty($_POST["Productos"]) ) {
        
        $id=$_POST["Id"];
        $nombre=$_POST["Nombre"];
        $apellido=$_POST["Apellido"];
        $edad=$_POST["Edad"];
        $dni=$_POST["Dni"];
        $productos=$_POST["Productos"];

        $sql=$conexion->query(" UPDATE Usuarios SET Nombre='$nombre', Apellido='$apellido', Edad='$edad', Dni='$dni', Productos='$productos' WHERE Id=$id");
        if ($sql==1) {
            header("location:crud.php");
        }else {
            echo '<div class="alert alert-danger">Error al Modificar</div>';
        }

    }else {
        echo "<div class='alert alert-warning'>Existe un Campo Vacio</div>";
    }

}

?>