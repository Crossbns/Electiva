<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Datos</title>
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/431fc3955d.js" crossorigin="anonymous"></script>
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center alert alert-secondary">Registro de Nuevos Datos</h3>
            <?php
            include 'modelo/conexion.php';
            include 'controlador/registro_user.php';
            ?>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="Nombre" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="Apellido">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Edad</label>
                <input type="text" class="form-control" name="Edad">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Dni</label>
                <input type="text" class="form-control" name="Dni">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Productos</label>
                <input type="text" class="form-control" name="Productos">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
            <a href="crud.php" class="btn btn-small btn-danger"><i class="fa-solid fa-ban"></i></a>       
        </form>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>