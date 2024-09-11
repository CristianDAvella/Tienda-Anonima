<?php
//require ("./persistencia/Conexion.php");
require ("./persistencia/CategoriaDAO.php");

class Categoria{
    
    private $nombre;

    public function __construct($nombre=""){
        $this -> nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function consultarTodos(){
        $categorias = array();
        $conexion = new Conexion();
        $conexion -> abrirConexion();
        $categoriaDAO = new CategoriaDAO();
        $conexion -> ejecutarConsulta($categoriaDAO -> consultarTodos());
        while($registro = $conexion -> siguienteRegistro()){
            $categoria = new Categoria($registro[0]);
            array_push($categorias, $categoria -> getNombre());
        }
        $conexion -> cerrarConexion();

        return $categorias;        
    }

}

?>