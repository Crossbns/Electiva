<?php
?>
<!DOCTYPE html>
<html lang="en" class="html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base de Datos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/431fc3955d.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
    <script>
        function eliminar(){
            let respuesta=confirm("¿Estas Seguro Que Deseas Eliminar?");
            return respuesta;
        }
    </script>
            <?php
                include_once "modelo/conexion.php";
                include_once "controlador/eliminar_user.php";
                include_once "controlador/eliminar_registro.php";
            ?>
    <div class="container-fluid row">

        <div class="col-8 p-4 m-auto">
        
        <table>
            <td>
                <h3>Productos</h3>
            </td>
            <td>
            <a href="create_register.php" class="btn btn-small btn-success"><i class="fa-solid fa-plus"></i></a>
            </td>
        <table>

            <table class="table table-striped table-hover bg-white border">
                <thead class="bg-info p-3">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre_Producto</th>
                        <th scope="col">Precio_Compra</th>
                        <th scope="col">Precio_Venta</th>
                        <th scope="col">Existencia</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("SELECT * FROM Registros");
                    while ($datos=$sql->fetch_object()) { ?>
                        <tr>
                            <td><?=$datos->Id?></td>
                            <td><?=$datos->Nombre_Producto?></td>
                            <td><?=$datos->Precio_Compra?></td>
                            <td><?=$datos->Precio_Venta?></td>
                            <td><?=$datos->Existencia?></td>
                            <td>
                                <a href="edit_register.php?id=<?= $datos->Id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar ()" href="crud.php?idp=<?= $datos->Id ?>" class="btn btn-small btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                 
                </tbody>

            </table>

            <table>
                <td>
                    <h3>Usuarios</h3>
                </td>
                <td>
                <a href="create_user.php" class="btn btn-small btn-success"><i class="fa-solid fa-plus"></i></a>
                </td>
            <table>
            
            <table class="table table-striped table-hover bg-white border">

                <thead class="bg-info p-3">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Dni</th>
                        <th scope="col">Productos</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "modelo/conexion.php";
                    $sql=$conexion->query("SELECT * FROM Usuarios");
                    while ($datos=$sql->fetch_object()) { ?>
                        <tr>
                            <td><?=$datos->Id?></td>
                            <td><?=$datos->Nombre?></td>
                            <td><?=$datos->Apellido?></td>
                            <td><?=$datos->Edad?></td>
                            <td><?=$datos->Dni?></td>
                            <td><?=$datos->Productos?></td>
                            <td>
                                <a href="edit_user.php?id=<?= $datos->Id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a onclick="return eliminar ()" href="crud.php?idu=<?= $datos->Id ?>" class="btn btn-small btn-danger"><i class="fa-sharp fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                 
                </tbody>

            </table>
            <a href="login.php" type="submit" class="btn btn-primary" name="btnregistraru" value="ok">Volver al Inicio de Sesión</a>               
        </div>

    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>