<?php
include 'modelo/conexion';

if (!empty($_POST["btnregistraru"])) {
    if (!empty($_POST["Nombre_Producto"]) and !empty($_POST["Precio_Compra"]) and !empty($_POST["Precio_Venta"]) and !empty($_POST["Existencia"]))
    {
        $nombre=$_POST["Nombre_Producto"];
        $compra=$_POST["Precio_Compra"];
        $venta=$_POST["Precio_Venta"];
        $exis=$_POST["Existencia"];

        $sql=$conexion->query(" INSERT INTO Registros(Nombre_Producto, Precio_Compra, Precio_Venta, Existencia)VALUES('$nombre', '$compra', '$venta', '$exis') ");
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