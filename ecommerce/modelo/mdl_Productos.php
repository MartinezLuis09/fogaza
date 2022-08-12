<?php
include_once('_CRUD.php');

Class Producto extends CRUD {
    function mostrarProductos () {
        $query = "SELECT * FROM productos ORDER BY id_categoria  ASC";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }

    function mostrarProductosCat() {
        $query = "SELECT * FROM productos WHERE $id_categoria";//Y concatenamos directamente la variable
        $sql = $this->_Select($query,null,"2"); //Agregar un null xq no existe ningun array
        return $sql;
      } 

}
?>