<?php
class ProductoDAO{
    private $idProducto;
    private $nombre;
    private $cantidad;
    private $precioCompra;
    private $precioVenta;
    
    public function __construct($idProducto=0, $nombre="", $cantidad=0, $precioCompra=0, $precioVenta=0){
        $this -> idProducto = $idProducto;
        $this -> nombre = $nombre;
        $this -> cantidad = $cantidad;
        $this -> precioCompra = $precioCompra;
        $this -> precioVenta = $precioVenta;
    }
    
    // Método para insertar un nuevo producto en la base de datos
    public function crearProducto(){
        return "INSERT INTO Producto (nombre, cantidad, precioCompra, precioVenta) VALUES (
                '" . $this -> nombre . "',
                " . $this -> cantidad . ",
                " . $this -> precioCompra . ",
                " . $this -> precioVenta . ")";
    }
    public function consultarTodos(){
        return "select idProducto, nombre, cantidad, precioCompra, precioVenta, Marca_idMarca 
                from Producto";
    }
    
    
}

?>