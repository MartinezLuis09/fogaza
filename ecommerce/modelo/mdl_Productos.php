<?php
include_once('_CRUD.php');

Class Producto extends CRUD {
    function mostrarProductos () {
        $query = "SELECT * FROM productos";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }
}
?>