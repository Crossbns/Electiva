<?php
if (!empty($_POST["btnmodificarr"])) {
    
    if (!empty($_POST["Nombre_Producto"]) and !empty($_POST["Precio_Compra"]) and !empty($_POST["Precio_Venta"]) and !empty($_POST["Existencia"]))
    {
        $id=$_POST["Id"];
        $nombre=$_POST["Nombre_Producto"];
        $compra=$_POST["Precio_Compra"];
        $venta=$_POST["Precio_Venta"];
        $exis=$_POST["Existencia"];

        $sql=$conexion->query(" UPDATE Registros SET Nombre_Producto='$nombre', Precio_Compra='$compra', Precio_Venta='$venta', Existencia='$exis' WHERE Id=$id");
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