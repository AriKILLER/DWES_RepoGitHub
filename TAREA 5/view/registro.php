<?php
if(!defined('CON_CONTROLADOR')){
    die('Error: No se puede acceder directamente a este archivo');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registro de Usuario</title>
</head>
<body>
    <a href="index.php">Volver al catalogo</a>
    
    <h1>Registro de Usuario</h1>
    
    <?php if(!empty($mensaje)): ?>
        <p><strong><?php echo $mensaje; ?></strong></p>
    <?php endif; ?>
    
    <?php if(isset($usuario) && $usuario !== null): ?>
        <h2>Datos del Usuario:</h2>
        <p><strong>Nombre:</strong> <?php echo $usuario['nombre']; ?></p>
        <p><strong>Email:</strong> <?php echo $usuario['email']; ?></p>
        <p><strong>Fecha:</strong> <?php echo $usuario['fecha_registro']; ?></p>
    <?php endif; ?>
    
    <form method="POST" action="index.php?accion=registro">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required>
            <br>
            <label>Email:</label><br>
            <input type="email" name="email" required>
            <br>
            <label>Contrasena:</label><br>
            <input type="password" name="password" required>
            <br>
            <label>Confirmar Contrasena:</label><br>
            <input type="password" name="password_confirm" required>
            <br><br>
            <button type="submit">Registrar</button>
    </form>
</body>
</html>