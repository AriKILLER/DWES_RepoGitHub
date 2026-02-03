<?php
if(!defined('CON_CONTROLADOR')){
    die('Error: No se puede acceder directamente a este archivo');
}

/**
 * Clase modelo para gestionar los articulos
 */
class modelo{
    private $articulos=[];

    /**
     * Constructor de la clase
     */
    public function __construct(){
        $this->articulos = [
            ["id"=>1,"nombre"=>"Camisa","precio"=>20,"descripcion"=>"Camisa de algodón 100%","stock"=>15],
            ["id"=>2,"nombre"=>"Pantalon","precio"=>30,"descripcion"=>"Pantalón vaquero azul","stock"=>10],
            ["id"=>3,"nombre"=>"Zapatos","precio"=>50,"descripcion"=>"Zapatos deportivos cómodos","stock"=>8],
        ];
    }

    /**
     * Obtiene todos los articulos
     * 
     * @return array Lista completa de articulos
     */
    public function mostrarArticulos(){
        return $this->articulos;
    }

    /**
     * Busca un articulo por su ID
     * 
     * @param int $id Identificador del articulo
     * @return array|null Articulo encontrado o null
     */
    public function obtenerArticuloPorId($id){
        foreach($this->articulos as $articulo){
            if($articulo['id'] == $id){
                return $articulo;
            }
        }
        return null;
    }
}