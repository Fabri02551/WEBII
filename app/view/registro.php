<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/styles.css"> 
</head>
<body>
    <div class="container">
        <h2>Registro de Usuarios</h2>
        <form action="../controller/UsuarioController.php" method="post">
            <input type="hidden" name="action" value="registrar">
            <input type="email" name="email" placeholder="Email" required><br><br>
            <input type="password" name="password" placeholder="Contraseña" required><br><br>
            <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required><br><br>
            <button type="submit">Registrarse</button><br><br>
            <a href="bienvenido.php">¿Ya tienes una cuenta? Inicia sesión aquí</a>
        </form>
    </div>
</body>
</html>