<?php
if(!defined('CON_CONTROLADOR')){
    die('Error: No se puede acceder directamente a este archivo');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Catalogo de Articulos</title>
</head>
<body>
    <h1>Catalogo de Articulos</h1>
    
    <p>
        <a href="index.php?accion=sugerencias">Sugerencias</a> |
        <a href="index.php?accion=registro">Registro</a>
    </p>
    
    <ul>
        <?php foreach($articulos as $articulo): ?>
            <li>
                <strong><?php echo $articulo['nombre']; ?></strong> - 
                <?php echo $articulo['precio']; ?> euros - 
                Stock: <?php echo $articulo['stock']; ?> - 
                <a href="index.php?id=<?php echo $articulo['id']; ?>">Ver detalle</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>