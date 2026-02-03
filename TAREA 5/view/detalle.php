<?php
if(!defined('CON_CONTROLADOR')){
    die('Error: No se puede acceder directamente a este archivo');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalle del Articulo</title>
</head>
<body>
    <a href="index.php">Volver al catalogo</a>
    
    <?php if($articulo): ?>
        <h1><?php echo $articulo['nombre']; ?></h1>
        <p><strong>ID:</strong> <?php echo $articulo['id']; ?></p>
        <p><strong>Descripcion:</strong> <?php echo $articulo['descripcion']; ?></p>
        <p><strong>Precio:</strong> <?php echo $articulo['precio']; ?> euros</p>
        <p><strong>Stock:</strong> <?php echo $articulo['stock']; ?> unidades</p>
    <?php else: ?>
        <h2>Articulo no encontrado</h2>
        <p>El articulo solicitado no existe.</p>
    <?php endif; ?>
</body>
</html>
