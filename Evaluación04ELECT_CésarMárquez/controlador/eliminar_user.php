<?php

if (!empty($_GET["idu"])) {
    $id=$_GET["idu"];
    $sql=$conexion->query(" DELETE FROM Usuarios WHERE Id=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Usuario Eliminado Correctamente</div>';
    }else {
        echo '<div class="alert alert-danger">Error al Eliminar</div>';
    }
}

?>