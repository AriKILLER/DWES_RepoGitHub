<?php
require_once __DIR__ . '/../model/modelo.php';
class controlador{
    private $modelo;
    public function __construct(){
        $this->modelo = new modelo();
    }
    public function obtenerArticulos(){
        return $this->modelo->listarArticulos();
    }
}
?>