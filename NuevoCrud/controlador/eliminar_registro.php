<?php

if (!empty($_GET["idp"])) {
    $id=$_GET["idp"];
    $sql=$conexion->query(" DELETE FROM Registros WHERE Id=$id ");
    if ($sql==1) {
        echo '<div class="alert alert-success">Registro Eliminado Correctamente</div>';
    }else {
        echo '<div class="alert alert-danger">Error al Eliminar</div>';
    }
}

?>