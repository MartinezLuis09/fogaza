<?php
include_once('_CRUD.php');

Class Producto extends CRUD {
    function mostrarProductos () {
        $query = "SELECT * FROM productos";
        $sql = $this->_Select($query,null,"1");
        return $sql;
    }

  /*   function prueba () {
        $query = "SELECT DATE_FORMAT(NOW(),'%m-%d-%Y') ";
        $sql = $this->_Select($query,null,"1");
        foreach($sql as $row);
        return  $row[0];
    } */
    
}
?>