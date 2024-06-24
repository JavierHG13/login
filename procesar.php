<?php 
    $usuario = "luis";
    $contrasenia = "mendoza";

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $user = !empty($_POST['user']) ? $name = $_POST['user'] : $name = "obligatorio" ;
        $password = !empty($_POST['password']) ? $_POST['password'] : "obligatorio" ; 
        $edad = !empty($_POST['age']) ? $_POST['age'] : "obligatorio" ; 
        
        if (empty($user) || empty($password) || empty($edad)) {
            echo "Todos los campos son obligatorios.";
        } elseif (!is_numeric($edad) || $edad < 18) {
            echo "Debes ser mayor de 18 años.";
        } elseif ($user !== $usuario || $password !== $contrasenia) {
            echo "Usuario o contraseña incorrectos.";
        } else {
            echo "Inicio de sesión exitoso. Bienvenido, " . htmlspecialchars($user)."<br>";
            echo "Tu edad es de " . htmlspecialchars($edad)." años";
        }
    }
?>