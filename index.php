<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <form action="./inventario/index.php" class="form-login" method="post">
            <label for="user">Ingrese su nombre de usuario:</label>
            <input type="text" placeholder="Usuario" name="user" class="user"><br>

            <label for="pass">Ingrese su contraseña</label>
            <input type="password" placeholder="Contraseña" name="password" class="password"><br>

            <div class="botonera">
                <button type="submit" class="login-button">Iniciar sesión</button>
            </div>
        </form>
    </div>
</body>
</html>
