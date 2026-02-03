<?php
define('CON_CONTROLADOR', true);

require_once __DIR__ . '/model/modelo.php';
require_once __DIR__ . '/controller/controladores.php';

$controlador = new controladores();

// Enrutamiento
if(isset($_GET['accion']) && $_GET['accion'] === 'sugerencias'){
    // Gestionar sugerencias
    $mensaje = '';
    $sugerencias = [];
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $resultado = $controlador->agregarSugerencia($_POST);
        $mensaje = $resultado['mensaje'];
        $sugerencias = $resultado['sugerencias'];
    }
    require_once __DIR__ . '/view/sugerencias.php';
} elseif(isset($_GET['accion']) && $_GET['accion'] === 'registro'){
    // Gestionar registro
    $mensaje = '';
    $usuario = null;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $resultado = $controlador->registrarUsuario($_POST);
        $mensaje = $resultado['mensaje'];
        $usuario = $resultado['usuario'];
    }
    require_once __DIR__ . '/view/registro.php';
} elseif(isset($_GET['id'])){
    // Mostrar detalle de articulo
    $articulo = $controlador->getArticuloById($_GET['id']);
    require_once __DIR__ . '/view/detalle.php';
} else {
    // Mostrar listado de articulos por defecto
    $articulos = $controlador->getArticulos();
    require_once __DIR__ . '/view/vista.php';
}
?>