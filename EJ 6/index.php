<?php
require_once __DIR__ . '/controller/controlador.php';
$controlador = new controlador();
$articulos = $controlador->obtenerArticulos();
require_once __DIR__ . '/view/vista.php';
?>
