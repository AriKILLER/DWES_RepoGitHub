<?php
require_once __DIR__ . '/../model/modelo.php';

/**
 * Clase controladora principal de la aplicacion
 */
class controladores{
    private $modelo;

    /**
     * Constructor de la clase
     */
    public function __construct(){
        $this->modelo = new modelo();
    }

    /**
     * Obtiene todos los articulos del catalogo
     * 
     * @return array Lista de articulos
     */
    public function getArticulos(){
        return $this->modelo->mostrarArticulos();
    }

    /**
     * Obtiene un articulo por su ID
     * 
     * @param int $id Identificador del articulo
     * @return array|null Datos del articulo o null si no existe
     */
    public function getArticuloById($id){
        return $this->modelo->obtenerArticuloPorId($id);
    }

    /**
     * Agrega una nueva sugerencia
     * 
     * @param array $datos Datos de la sugerencia (nombre, email, sugerencia)
     * @return array Resultado con mensaje y sugerencia creada
     */
    public function agregarSugerencia($datos){
        if(!isset($datos['nombre']) || !isset($datos['email']) || !isset($datos['sugerencia'])){
            return [
                'mensaje' => 'Datos incompletos.',
                'sugerencias' => []
            ];
        }
        $nuevaSugerencia = [
            'nombre' => $datos['nombre'],
            'email' => $datos['email'],
            'sugerencia' => $datos['sugerencia'],
            'fecha' => date('Y-m-d H:i:s')
        ];
        return [
            'mensaje' => 'Sugerencia recibida.',
            'sugerencias' => [$nuevaSugerencia]
        ];
    }

    /**
     * Registra un nuevo usuario
     * 
     * @param array $datos Datos del usuario (nombre, email, password, password_confirm)
     * @return array Resultado con mensaje y datos del usuario
     */
    public function registrarUsuario($datos){
        if(!isset($datos['nombre']) || !isset($datos['email']) || !isset($datos['password']) || !isset($datos['password_confirm'])){
            return [
                'mensaje' => 'Datos incompletos.',
                'usuario' => null
            ];
        }
        $nuevoUsuario = [
            'nombre' => $datos['nombre'],
            'email' => $datos['email'],
            'fecha_registro' => date('Y-m-d H:i:s')
        ];
        return [
            'mensaje' => 'Usuario registrado.',
            'usuario' => $nuevoUsuario
        ];
    }
}