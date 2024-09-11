<?php
class CategoriaDAO{
    private $nombre;

    public function __construct($nombre=""){
        $this -> nombre = $nombre;
    }
    
    public function consultarTodos(){
        return "select nombre
                from categoria";
    }
    
    
}

?>