<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="container">
        <h2>Formulario de Registro</h2>
        <form action="validar.php" method="POST">
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email" required>
            
            <label for="password1">Contraseña:</label>
            <input type="password" id="password1" name="password1" required>
            
            <label for="password2">Confirmar Contraseña:</label>
            <input type="password" id="password2" name="password2" required>
            
            <input type="submit" value="Registrarse">
        </form>
    </div>
</body>
</html>