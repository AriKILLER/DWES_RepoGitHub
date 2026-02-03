<?php
require_once __DIR__ . '/../db/conexion.php';

class modelo{
    private $conexion;
    public function __construct(){
        $db = new conexion();
        $this->conexion = $db->getConexion();
    }
    
    public function listarArticulos(){
        $query = "SELECT * FROM ejercicio6";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>