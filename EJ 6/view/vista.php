<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de articulos</h1>
    <form method="GET" action="">
        <select name="categoria" onchange="this.form.submit()">
            <option value="todas" <?php echo (!isset($_GET['categoria']) || $_GET['categoria'] == 'todas') ? 'selected' : ''; ?>>Todas</option>
            <option value="Ropa" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == 'Ropa') ? 'selected' : ''; ?>>Ropa</option>
            <option value="Tecnologia" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == 'Tecnologia') ? 'selected' : ''; ?>>Tecnologia</option>
            <option value="Deporte" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == 'Deporte') ? 'selected' : ''; ?>>Deportes</option>
            <option value="Alimentos" <?php echo (isset($_GET['categoria']) && $_GET['categoria'] == 'Alimentos') ? 'selected' : ''; ?>>Alimentos</option>
        </select>
    </form>
    <?php
    foreach($articulos as $articulo){
        // Si hay una categoría seleccionada y no es "todas"
        if(isset($_GET['categoria']) && $_GET['categoria'] !== 'todas'){
            // Solo mostrar si coincide con la categoría seleccionada
            if($articulo['Categoria'] !== $_GET['categoria']){
                continue;
            }
        }
        echo "<ul>";
        echo "<li>Título: " . htmlspecialchars($articulo['Nombre']) . "</li>";
        echo "<li>Categoria: " . htmlspecialchars($articulo['Categoria']) . "</li>";
        echo "</ul>";
    }
    ?>

</body>
</html>