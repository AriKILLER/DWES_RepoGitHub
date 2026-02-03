<?php
class conexion{
    private $host = "localhost";
    private $user= "root";
    private $pass = "";
    private $db= "ejercicio2";
    private $conexion;

    public function getConexion(){
        $this->conexion = null;
        try{
            $this->conexion = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db,
                $this->user,
                $this->pass
            );
        }catch(PDOException $e){
            echo "Error de conexión: " . $e->getMessage();
        }
        return $this->conexion;
    }
}
?>