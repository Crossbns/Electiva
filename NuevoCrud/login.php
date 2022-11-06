<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <script src="https://kit.fontawesome.com/431fc3955d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <form class="form" action="" method="POST" id="form">

        <div class="form-cont">
            <h2 class="form-cont">Inicio de Sesión</h2>

            <div>
                <input class="form-input" type="email" placeholder="Correo:" id="email" required>
            </div>

                <input class="form-input" type="text" placeholder="Contraseña:" id="password" required>
            </div>

            <button type="submit">
                Iniciar sesión
            </button>
            <p class="war" id="war"></p>

        </div>

    </form>
    <script src="main.js"></script>
</body>
</html>
