<?php
if(!defined('CON_CONTROLADOR')){
    die('Error: No se puede acceder directamente a este archivo');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sugerencias</title>
</head>
<body>
    <a href="index.php">Volver al catalogo</a>
    
    <h1>Sugerencias</h1>
    
    <?php if(!empty($mensaje)): ?>
        <p><strong><?php echo $mensaje; ?></strong></p>
    <?php endif; ?>
    
    <?php if(!empty($sugerencias)): ?>
        <h2>Sugerencia Recibida:</h2>
        <?php foreach($sugerencias as $sug): ?>
            <p><strong>Nombre:</strong> <?php echo $sug['nombre']; ?></p>
            <p><strong>Email:</strong> <?php echo $sug['email']; ?></p>
            <p><strong>Fecha:</strong> <?php echo $sug['fecha']; ?></p>
            <p><strong>Sugerencia:</strong> <?php echo $sug['sugerencia']; ?></p>
        <?php endforeach; ?>
    <?php endif; ?>
    
    <h2>Enviar Sugerencia</h2>
    <form method="POST" action="index.php?accion=sugerencias">
            <label>Nombre:</label><br>
            <input type="text" name="nombre" required>
            <br>
            <label>Email:</label><br>
            <input type="email" name="email" required>
            <br>
            <label>Sugerencia:</label><br>
            <textarea name="sugerencia" rows="5" cols="50" required></textarea>
            <br><br>
            <button type="submit">Enviar</button>
    </form>
</body>
</html>