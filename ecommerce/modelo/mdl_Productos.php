<?php
include_once('_CRUD.php');

Class Producto extends CRUD {
    function mostrarProductos () {
        $query = "SELECT * FROM productos ORDER BY id_categoria ASC";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }

}
?>