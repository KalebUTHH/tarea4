<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $errors = [];

    // Validar correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "El correo electrónico no es válido.";
    }

    // Validar que las contraseñas coincidan
    if ($password1 !== $password2) {
        $errors[] = "Las contraseñas no coinciden.";
    }

    // Mostrar resultados
    if (empty($errors)) {
        echo "<p>Registro exitoso.</p>";
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
}
?>
